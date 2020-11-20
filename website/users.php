<?php 
    ob_start();
    session_start(); // start a new session or continues the previous
require_once 'actions/db_connect.php';

if ((!isset($_SESSION['superadmin']))){
        header('location: home.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<?php include 'navbar.php' ?>
    <div class="container">
        <legend>Edit users</legend>
        <div class="row">
            <?php
            
   $sql = "SELECT * FROM user" ;
   $result = $connect->query($sql);

   $connect->close();
            if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '
                        <form class="col-5 pt-3" action="actions/a_updateuser.php" method="POST">
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" value="'.$row["user_name"].'" name="username" /></td>
                                </tr>
                                <tr>
                                    <th>password</th>
                                    <td><input type="text" placeholder="new password" name="userpassword" /></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><input type="text" value="'.$row["email"].'" name="usermail" /></td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td><input type="text" name="usertype" placeholder = "admin/superadmin/user"/></td>
                                </tr>
                                <tr>
                                    <input type="hidden" name="id" value="'.$row["user_id"].'" />
                                    <td><button class="btn btn-primary"type="submit">Save Changes</button></td>
                                    <td><a href="actions/a_deleteuser.php?id='.$row["user_id"].'"><button class="btn btn-primary" type="button">Delete</button></a></td>
                                </tr>
                            </table>
                        </form>
                        ';
            }
            } 
            ?>
        </div>
    </div>
</body>

</html>