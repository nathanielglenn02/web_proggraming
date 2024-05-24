<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .d1,
        .p1 {
            background: royalblue;
            height: 50px;
            width: 100px;
        }

        .d2,
        .p2 {
            background: lightsalmon;
            height: 75px;
            width: 150px;
        }

        .s1 {
            background: lightyellow;
            margin: 10px;
            padding: 5px;
        }

        .d2 {
            /* margin-top: 20px;
        margin-right: 25px;
        margin-bottom: 30px;
        margin-left: 35px; */
            margin: 20px 25px 30px 35px;
            border: 3px solid red;
        }

        .d1 {
            padding: 5px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        body,
        p {
            margin: 0px
        }

        .d3 {
            background: lightgreen;
            width: 20px;
            height: 15px;
            margin-left: auto;
            margin-right: auto;
        }

        #biru {
            background: blue;
            padding-top: 20px;
            padding-left: 25px;
        }

        #kuning {
            background: yellow;
        }

        #hijau {
            background: green;
            padding-bottom: 20px;
            padding-right: 25px;
        }

        #merah {
            background: red;
        }

        #orange {
            background: orange;
            padding: 0px 15px;
        }

        #birumuda {
            background: lightblue;
        }

        div {
            width: 100px;
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="d1">abc <span class="s1">def</span> ghi
        <div class="d3">

        </div>
    </div>
    <div class="d2">ppp</div>
    <p class="p1"></p>
    <p class="p2"></p>
    <br>
    <!-- latihan 1 -->
    <div id="biru">
        <div id="kuning"></div>
    </div>
    <div id="hijau">
        <div id="merah"></div>
    </div>
    <div id="orange">
        <div id="birumuda"></div>
    </div>


</body>

</html>