<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>files upload</h1>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <p>
            <input type="text" name="foldername" id="foldername" placeholder="folder name">
        </p>
        <p>
            <input type="file" name="upload[]" id="upload" multiple accept="image/*">
        </p>
        <p>
            <button type="submit" name="btn">upload</button>
        </p>
    </form>
</body>
</html>