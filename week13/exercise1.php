<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js "></script> -->
</head>

<body>
    <p>
        <input type="url" class="url" id="url"><br>
        <button class="button">Tambah</button><br>
        <a href="" class="link">Click Me</a>
    </p>

    <script type="text/javascript">
    $(".button").click(function() {
        var isi = $(".url").val();
        alert(isi);
        $("a").attr('href', isi);
    });
    </script>
</body>

</html>