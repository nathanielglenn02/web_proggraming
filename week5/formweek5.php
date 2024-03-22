<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Week 5</title>
</head>

<body>
    <form action="filekeduaform.php" method="post">
        <p>
            <label for="nrp">NRP</label>
            <input type="text" name="nrp" id="nrp" maxlength="9" placeholder="160XXXXXX" required autofocus>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="109XXX" required>
        </p>
        <p>
            <label for="ipk">IPK</label>
            <input type="number" name="ipk" id="ipk" min="0" max="4" step="any">
        </p>
        <!-- <input type="submit" name="btnsimpan" value="simpan"> -->
        <button type="submit" value="simpan">SIMPAN</button>

    </form>
</body>

</html>