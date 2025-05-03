<?php

    include_once("connections/connection.php");
    $con = connection();

    if(isset($_POST['btn'])){

        $images = $_FILES['upload']['name'];
        $temp_file = $_FILES['upload']['tmp_name'];
        $folder = 'images/'.$images;

        $sql = "INSERT INTO `employees`(`img`)VALUES('$images')";
        $con->query($sql) or die ($con->error);

        if(move_uploaded_file($temp_file, $folder)){
            echo header("location: upload.php");
        }else{
            echo "Error!!";
        }
    }

?>