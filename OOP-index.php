<?php 

    require_once('storeClass.php');
    $mystore = new MyStore();
    $users = $mystore->getUsers();

    print_r($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>