<!DOCTYPE html>
<html>
<head>
   <title>Add animal</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php session_start(); include 'navbar.php' ?>
    <div class="container">
        <legend>Add animal to the database</legend>

        <form action="actions/a_create.php" method= "POST">
            <table>
                    <select name="size">
                        <option value="small">Small</option>
                        <option value="large">Large</option>
                    </select>
                    <label class="pl-3">Size of animal</label>
                <tr>
                    <th>Name</th >
                    <td><input  type="text" name="animalname"  placeholder="name" /></td >
                </tr>    
                <tr>
                    <th>Relative path to image (must be added manually into the folder)</th>
                    <td><input type="text"  name="image" placeholder ="example.jpg" /></td>
                </tr>
                <tr>
                    <th>Animal description</th>
                    <td><input type="text"  name="description" placeholder ="description..." /></td>
                </tr>
                <tr>
                    <th>Hobbies</th>
                    <td><input type="text"  name="hobbies" placeholder ="" /></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><input type="text"  name="age" placeholder ="" /></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><input type="text"  name="location" placeholder ="" /></td>
                </tr>
                <?php 
                if($_SESSION['superadmin'] || $_SESSION['admin']){ 
                    echo '
                    <td><button class="btn btn-primary" type ="submit">Insert item</button></td>
                    <td><a href="home.php"><button class="btn btn-primary" type="button">Back</button></a></td>
                </tr>';
                }
                ?>
            </table>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>