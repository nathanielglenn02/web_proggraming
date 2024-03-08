<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .latar-cerah{
            background: #fdabab;
        }
        .latar-gelap{
            background: #98a9b0;
        }
        .warna-merah { 
            color: red; 
        } 
        .warna-biru { 
            color: blue; 
        }
        .huruf-tebal { 
            font-weight: bold; 
        }
        
    </style>
    <title>WEEK 3</title>
</head>
<?php
    $angka = mt_rand(1,10);
    // if($angka % 2 == 1){
    //     $latar = "latar-gelap";
    // } else{
    //     $latar = "latar-cerah";
    // }

    $latar = ($angka%2) ? "latar-gelap" : "latar-cerah";
?>
<body class="<?php echo $latar; ?>">
    <?php 
        // $a = 10;
        // echo $a . "<br>";
        // $a = "Halo";
        // echo "Nilai a = $a<br>";
        // echo "<p>This hello generated from php  </p>"; 

        // $myteam = "Justice-League";
        // $yourteam = "The-Avengers";
        // $myleader = "Batman";
        // $yourleader = "Ironman";

        // echo "<u>$myteam</u>" . " adalah kelompok pahlawan super pimpinan ". "<b>$myleader</b>" . ", sedangkan " . "<u>$yourteam</u>" . ", pimpinannya adalah " . "<b>$yourleader</b>" . ".";

        //soal 1
        // for($i=1; $i <= $angka; $i++){
        //     echo "<p>Paragraf ke-$i</p>";
        // }

        //soal 2
        // for($i=1; $i <= $angka; $i++){
        //     echo "<p id=\"$i\">Paragraf ke-$i</p>";
        // }
        
        //soal 3
        // for($i=1; $i <= $angka; $i++){
        //     if($i%2==0){
        //         echo "<p id=\"$i\" class=\"warna-merah\">Paragraf ke-$i</p>";
        //     }else{
        //         echo "<p id=\"$i\" class=\"warna-biru\">Paragraf ke-$i</p>";
        //     }
        // }

        // soal 4
        // for($i=1; $i <= $angka; $i++){
        //     if($i==1 || $i==$angka){
        //         if($i%2==0){
        //             echo "<p id=\"$i\" class=\"warna-merah\"><b>Paragraf ke-$i</b></p>";
                    
        //         }else{
        //             echo "<p id=\"$i\" class=\"warna-biru\"><b>Paragraf ke-$i</b></p>";
        //         }
        //     }
        //     else{
        //         if($i%2==0){
        //             echo "<p id=\"$i\" class=\"warna-merah\">Paragraf ke-$i</p>";
                    
        //         }else{
        //             echo "<p id=\"$i\" class=\"warna-biru\">Paragraf ke-$i</p>";
        //         }
        //     }
        // }

        //soal 5
        // $tgl_lahir = 12;

        // echo "<ul>";
        // for ($i = 1; $i <= 100; $i++) {
        //     if ($i % $tgl_lahir === 0) {
        //         echo "<li>$i</li>";
        //     }
        // }
        // echo "</ul>";
        
    ?>
</body>
</html>