<?php require_once 'actions/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR 10 Alejandro Rodriguez</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php 
    ob_start();
    session_start(); // start a new session or continues the previous
    include 'navbar.php';
    ?>
    <div class="container">
        <div class="row">

            <?php
           $sql = "SELECT * FROM animals";
           $result = $connect->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($row['animal_age'] >= 8){
                    echo  "
                    <div id='".$row['animal_id']."' class='card col-3 m-3'>
                        <img class='card-img-top' src='img/".$row['animal_image']."' alt='Card image cap'>
                            <ul class='list-group list-group-flush'>
                            <li class='list-group-item-primary list-group-item'><b>Name: </b>".$row['animal_name']."</li>
                            <li class='list-group-item'><b>Size: </b>".$row['animal_size']."</li>
                            <li class='list-group-item'>".$row['animal_desc']."</li>
                        </ul>
                        <div class='card-body'>
                            <p class='card-text'><b>Age</b>: ".$row['animal_age']."</p>
                            <p class='card-text'><b>Hobbies</b>: ".$row['animal_hobbies']."</p>
                            <p class='card-footer'><b>Location</b>: ".$row['animal_location']."</p>
                        </div>
                    </div>";
                    }
            }} else  {
                echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            echo "</div>";
           ?>
        </div>
        <div class="row">
            <a class="col-2 mx-auto pb-3" href="create.php"><button type="button" class="btn btn-danger">Add Media</button></a>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>