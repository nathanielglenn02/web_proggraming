<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Color Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    div {
        float: left;
        width: 100px;
        height: 100px;
    }

    .clearfix {
        clear: both;
    }

    .red {
        background: red;
    }

    .green {
        background: green;
    }
    </style>
</head>

<body>
    <div id="div1" class="red"></div>
    <div id="div2" class="green"></div>
    <div id="div3" class="green"></div>
    <p class="clearfix"></p>
    <p>
        <button id="btnNext" now="1">Next</button>
    </p>

    <script>
    $('#btnNext').click(function() {
        var now = $('#btnNext').attr('now');
        $('#div' + now).removeClass('red');
        $('#div' + now).addClass('green');
    });
    </script>
</body>

</html>