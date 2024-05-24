<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 9</title>
</head>

<body>
    <form action="week9_test.php" method="post" enctype="multipart/form-data">
        <p><label>Nama Photo 1:</label>
            <input type="text" name="nama[]">
        </p>

        <p>
            <label>Photo 1 :</label>
            <input type="file" name="photo[]" accept="image/jpeg, image/png">
        </p>
        <p><label>Nama Photo 2:</label>
            <input type="text" name="nama[]">
        </p>

        <p>
            <label>Photo 2 :</label>
            <input type="file" name="photo[]" accept="image/jpeg, image/png">
        </p>
        <button name="btnUpload" type="submit" value="upload">Upload</button>
    </form>
</body>

</html>