<?php

    include_once("connections/connection.php");
    $con = connection();

    $sql = "SELECT * FROM `employees`";
    $stmt = $con->query($sql) or die ($con->error);
    $row = $stmt->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <h1>uploaded images</h1>
        <tbody>
            <tr>
                <td>
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="upload" id="upload">
                        <button type="submit" name="btn">upload</button>
                    </form>
                    <br>
                    <?php do { ?>
                    <img width="300" height="300" src="images/<?php echo $row['img'];?>" alt="">
                    <?php } while($row = $stmt->fetch_assoc());?>
                </td>

                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        <button type="submit" name="btn">Update</button>
                    </form>
            </tr>
        </tbody>
    </table>
</body>
</html>