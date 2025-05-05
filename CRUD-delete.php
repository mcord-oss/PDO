<?php

    include_once("connections/connection.php");
    $con = connection();

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $sql = "DELETE FROM `employees` WHERE `id` = '$id'";
        $con->query($sql) or die ($con->error);
    }

    echo header("location: /cruid/index.php");
    exit;

?>