<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 13</title>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js "></script> -->
</head>

<body>
    <p>
        <input type="text" id="txt" class="txt1" kode="123">
        <input type="text" id="txt" class="txt2">
        <br>
        <br>
        <button type="button" id="btnku" class="btnku" nomer="1">Klik Aku</button>
        <button type="button" id="tambah" class="btnku" nomer="2">Tambah</button>
    </p>

    <script type="text/javascript">
    function input() {
        if ($("#txt").val() != "") {
            alert($("#txt").val());
        } else {
            alert("Empty Messagge")
        }
    }

    // $("#btnku").click(input);

    // $(".tambah").click(function() {
    //     let isi1 = $(".txt1").val();
    //     let isi2 = $(".txt2").val();
    //     let hasil = isi1 * 1 + isi2 * 1;
    //     alert(hasil)
    // })

    $(".btnku").click(function() {
        var nomer = $(this).attr("nomer");
        alert("Nomor " + nomer);
    })
    </script>
</body>

</html>