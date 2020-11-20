<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php 

require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $newusername = $_POST['username'];
    $newpwd = $_POST['userpassword'];
    $password = hash('sha256' , $newpwd);
    $newemail = $_POST['usermail'];
    $newtype = $_POST['usertype'];
   $sql = "UPDATE user SET 
    user_name = '$newusername',
    password = '$password', 
    email = '$newemail',
    user_type = '$newtype'
    WHERE user_id = {$id}";
    

    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully updated new item</p>" ;
        echo "<a href='../home.php'><button class='btn btn-primary ml-4' type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
</div>
</body>
</html>

