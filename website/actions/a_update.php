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
    $animal_size = $_POST['size'];
    $img = $_POST['image'];
    $animal_name = $_POST[ 'animalname'];
    $animal_description = $_POST['description'];
    $hobbies = $_POST['hobbies'];
    $age = $_POST['age'];
    $location = $_POST['location'];
   $sql = "UPDATE animals SET 
    animal_name = '$animal_name',
    animal_image = '$img', 
    animal_size = '$animal_size',
    animal_desc = '$animal_description',
    animal_hobbies = '$hobbies',
    animal_age = '$age',
    animal_location = '$location'
    WHERE animal_id = {$id}";
    

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

