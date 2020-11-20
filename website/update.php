<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM animals WHERE animal_id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <legend>Update item</legend>
        <form action="actions/a_update.php" method="POST">
            <table>
                <select name="size">
                    <option <?php if ($data['animal_size'] == 'small')echo "selected='selected'";?> value="small">small</option>
                    <option <?php if ($data['animal_size'] == 'large')echo "selected='selected'";?> value="large">Large</option>
                </select>
                <label class="pl-3">Size of animal</label>
                <br>
                <tr>
                    <th>Name</th>
                    <td><input type="text" value="<?php echo $data['animal_name']?>" name="animalname" placeholder="" /></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input type="text" value="<?php echo $data['animal_image']?>" name="image" placeholder="" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input type="text" value="<?php echo $data['animal_desc']?>" name="description" placeholder="" /></td>
                </tr>
                <tr>
                    <th>Hobbies</th>
                    <td><input type="text" value="<?php echo $data['animal_hobbies']?>" name="hobbies" placeholder="" /></td>
                </tr>
                <tr>
                    <th>Author last name</th>
                    <td><input type="text" value="<?php echo $data['animal_age']?>" name="age" placeholder="" /></td>
                </tr>
                <tr>
                    <th>Short description</th>
                    <td><input type="text" value="<?php echo $data['animal_location']?>" name="location" placeholder="" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['animal_id']?>" />
                    <td><button class="btn btn-primary"type="submit">Save Changes</button></td>
                    <td><a href="home.php"><button class="btn btn-primary"type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>

<?php
}
?>