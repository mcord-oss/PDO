<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>list of clients</h2>
        <a href="/cruid/create.php" class="btn btn-primary" role="">New Client</a>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>email</th>
                    <th>gender</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include_once("connections/connection.php");
                    $con = connection();

                    $sql = "SELECT * FROM `employees`";
                    $stmt = $con->query($sql) or die ($con->error);

                    while($row = $stmt->fetch_assoc()){

                        echo "
                        
                <tr>
                    <td>$row[id].</td>
                    <td>$row[first_name]</td>
                    <td>$row[last_name]</td>
                    <td>$row[email]</td>
                    <td>$row[gender]</td>
                    <td>
                        <a href='/cruid/edit.php?id=$row[id]' class='btn btn-success btn-sm'>Edit</a>
                        <a href='/cruid/delete.php?id=$row[id]' class='btn btn-secondary btn-sm'>Delete</a>
                    </td>
                </tr>
                        
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>