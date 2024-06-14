<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
        background: lightgray;
        min-height: 400px;
        position: relative;
    }

    .d {
        width: 120px;
        height: 100px;
        float: left;
    }

    #d1 {
        background: red;
    }

    #d2 {
        background: lightgreen;
        /* position: absolute;
        bottom: 20px;
        right: 50px; */
        position: relative;
        top: 50px;
        left: -60px;
    }

    #d3 {
        background: blue;
        position: relative;
        top: 100px;
        left: -120px;
        /* position: fixed;
        bottom: 20px; */
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="d" id="d1">d1</div>
        <div class="d" id="d2">d2</div>
        <div class="d" id="d3">d3</div>
    </div>
</body>

</html>