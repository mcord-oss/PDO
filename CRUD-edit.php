<?php

    include_once("connections/connection.php");
    $con = connection();

    $id = "";
    $fname = "";
    $lname = "";
    $email = "";
    $gender = "";

    $errorMessage = "";
    $successMessage = "";
 
    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        if(!isset($_GET['id'])){

            echo header("location: /cruid/index.php");
            exit;
            
        }

        $id = $_GET['id'];

        $sql = "SELECT * FROM `employees` WHERE `id` = '$id'";
        $stmt = $con->query($sql) or die ($con->error);
        $row = $stmt->fetch_assoc();

        if(!$row){

            echo header("location: /cruid/index.php");
            exit;
        }

        
        $id = $row['id'];
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $email = $row['email'];
        $gender = $row['gender'];
        
    }else{

        
        $id = $_POST['id'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        do {

            if(empty($id) || empty($fname) || empty($lname) || empty($email) || empty($gender)){

                $errorMessage = "All the fields are required";
                break;
            }

            $sql = "UPDATE `employees`".
                "SET `first_name` = '$fname', `last_name` = '$lname', `email` = '$email', `gender` = '$gender'".
                "WHERE `id` = '$id'";

                $stmt = $con->query($sql) or die ($con->error);

                if(!$stmt){

                    $errorMessage = "Invalid Query!!".$connect_error;
                    break;
                }

                $successMessage = "Client updated correctly..";
                echo header("location: /cruid/index.php");
                exit;

        }while(true);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
    <?php
            if(!empty($errorMessage)){

                echo "

                    <div class='alert alert-warning alert-dismissible' fade='' show='' role='alert'>
                        <strong>$errorMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' area-label='Close'></button>
                    </div>
                ";
            }
        ?>
        <h2>Edit client Information</h2>
        <form action="#" method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">id</label>
                <div class="col-sm-6">
                    <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id;?>">
                </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">first name</label>
                <div class="col-sm-6">
                    <input type="text" name="first_name" id="fname" class="form-control" value="<?php echo $fname;?>">
                </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">last name</label>
                <div class="col-sm-6">
                    <input type="text" name="last_name" id="lname" class="form-control" value="<?php echo $lname;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">gender</label>
                <div class="col-sm-6">
                    <select name="gender" id="gender" value="<?php echo $gender;?>" class="col-sm-3 col-form-label">
                        <option value="Male" <?=$row['gender'] = 'male'? 'Selected':'';?> class="row mb-3">Male</option>
                        <option value="Female" <?=$row['gendere'] = 'female'? 'Selected':'';?> class="row mb-3">Female</option>
                    </select>
                </div>
            </div>
            <?php 
                if(!empty($successMessage)){


                        echo "
                        
                            <div class='row mb-3'>
                                <div class='offset-sm-3 col-sm-6'>
                                    <div class='alert alert-success alert-dismissible' fade='' show='' role='alert'>
                                        <strong>$successMessage</strong>
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label=''></button>
                                    </div>
                                </div>
                            </div>
                                            
                        
                        ";  


                }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="/cruid/index.php" class="btn btn-outline-primary" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>