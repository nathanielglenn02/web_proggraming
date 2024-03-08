<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img{
            width: 200px;
        }
        img.luky-class:hover{
            width: 500px;
        }

        a:link{
            color: green;
            text-decoration: none;
        }
        a:hover{
            font-weight: bold;
        }
        a:active{
            text-decoration: underline;
        }
        a:visited{
            color: orange;
        }

        .atas:link, .atas:visited{
            color:green;
        }
        .bawah:link, .atas:visited{
            color:magenta;
        }
        
        
        

    </style>
    <title>WEEK 4</title>
</head>
<?php
    $random = mt_rand(1,6);
    if($random == 1){
        $gambar = "<img src=\"images/1.jpg\">";
    }
    else if($random == 2){
        $gambar = "<img src=\"images/2.jpg\">";
    }
    else if($random == 3){
        $gambar = "<img src=\"images/3.jpg\">";
    }
    else if($random == 4){
        $gambar = "<img src=\"images/4.jpg\">";
    }
    else if($random == 5){
        $gambar = "<img src=\"images/5.jpg\">";
    }
    else if($random == 6){
        $gambar = "<img src=\"images/6.jpg\">";
    }
?>
<body>
    <p>
        <img src="images/kungfupanda.jpg" alt="Gambar kungfupanda" title="Kungfu Panda">
        <img class="luky-class" src="https://my.ubaya.ac.id/img/mhs/160722006_l.jpg" alt="">
        
        <?php
            // for($i=1; $i <= $random; $i++){
            //     echo $gambar;
            // }
            echo $gambar;
        ?>
    </p>
    
    <p>
        <a href="week4b.php" target="_blank">KLIK</a>
        <br>
        <a href="https://www.ubaya.ac.id" target="_blank">UBAYA WEBSITE</a>
        <a href="#par1">PAR 1</a>
        <a href="#par2">PAR 2</a>
    </p>

    <p id="par1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rerum dolor nam incidunt vitae exercitationem aperiam consectetur voluptatibus quo doloremque accusantium eaque nostrum quaerat, ea nemo maiores maxime enim quae odit natus blanditiis harum necessitatibus at? Temporibus, cum reiciendis minus culpa at error dignissimos ad harum quibusdam, cupiditate impedit voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti neque fugit corporis aperiam voluptate earum, numquam ullam quidem saepe. Voluptatibus velit quod excepturi soluta quas assumenda sed ab, optio quisquam provident sunt hic? Fuga molestias a illo culpa laborum earum, soluta omnis aut consequatur repudiandae, at ipsum fugiat assumenda ea blanditiis, possimus quasi ipsa rem expedita nam quas. In consectetur quas ipsam, corporis nobis esse at explicabo nam odio labore commodi rem saepe quis cupiditate recusandae ea laudantium qui unde aliquam aspernatur est? Deserunt voluptas facilis, ratione quod itaque enim iure, dolore voluptatibus esse, nam quis id sequi? Laborum, odit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laborum error ipsa eius accusamus quidem aliquam, porro molestias quaerat nesciunt officia excepturi illum, minima est iste. Autem voluptatibus consequatur qui facilis optio accusamus sapiente, vitae ea fugiat ab nulla, a laborum deserunt voluptas eius numquam consectetur repellendus sint omnis deleniti. Aperiam non facilis sunt quidem consequuntur cum quas voluptatem tempora enim, debitis, dolorum quibusdam maiores quaerat beatae porro impedit aliquam, adipisci modi dolore provident exercitationem sint! Amet, unde perspiciatis cumque suscipit impedit nobis cupiditate nesciunt, aliquam adipisci, voluptate maiores natus necessitatibus ab sed neque reiciendis quisquam asperiores aut quas deleniti est quis quo molestiae dolores! Ratione aut deleniti ut repellat optio vero dolorum numquam dolor possimus beatae placeat natus explicabo voluptatem velit, est at aliquam harum consequuntur voluptatum laborum ullam molestias. Recusandae atque molestiae esse architecto explicabo odio non quia dicta repudiandae facere ex unde ipsum dolores eligendi vel, reprehenderit ut consequuntur doloribus, accusamus dignissimos eius cum aliquid? Odit, rem. Inventore porro ratione nam perspiciatis earum impedit, beatae ullam repellat? Praesentium, omnis a. Ipsum maxime mollitia praesentium. Vero ratione rem corporis maiores animi illo, quis a porro. At pariatur sunt itaque illum libero. Itaque repellendus mollitia, quasi ducimus dignissimos sunt saepe, commodi magni quisquam neque adipisci. Culpa veritatis dignissimos consequatur laboriosam et officia. Odio corporis magni architecto vitae. Sint tempore repudiandae aliquam voluptate sunt officiis excepturi, cupiditate, eligendi et debitis ratione impedit doloremque, deserunt aperiam totam eos vitae asperiores molestiae aspernatur. Distinctio eum fuga, non odit voluptatibus accusantium nostrum voluptatem doloribus! Incidunt fugiat ratione dolores obcaecati expedita mollitia recusandae molestiae voluptatem labore sit? Tenetur maiores facilis sequi adipisci quasi perferendis eveniet beatae quos ut placeat harum rem, ab impedit aliquam veniam consequatur iste qui animi. Minus, quod ea quo libero doloribus sunt illum ipsa corrupti quia quibusdam nesciunt error cum!
    </p>
    <p id="par2">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis earum eius eveniet ipsam dicta deleniti facere incidunt velit consequuntur tempore laudantium, alias nulla, qui voluptatem. Sunt eius veniam aliquid ut quis laboriosam vero dignissimos natus iste tenetur, unde voluptas non, itaque dolor accusantium! Cupiditate magni, cum nobis, tenetur ducimus placeat explicabo error eum laudantium quis dolore earum assumenda praesentium! Sit exercitationem earum maiores similique, illum ipsam omnis consectetur ipsa odio eveniet praesentium qui? Labore, fuga! Quasi repellat, possimus ipsam quam voluptatum ex a architecto illo ipsa vel eos, odio omnis sequi. Illo voluptatum at fuga recusandae repellat consequatur accusamus, mollitia facilis illum exercitationem soluta atque. Illo ea incidunt molestiae non, maiores doloremque in nulla laborum fugiat voluptas placeat numquam ipsum labore. Magnam eligendi, inventore iste sed consequuntur necessitatibus pariatur voluptas consequatur, provident error quibusdam in animi a molestiae esse totam cumque minima eaque, reprehenderit blanditiis? Soluta earum, aliquam facilis ea magnam commodi reprehenderit assumenda at sit cum omnis unde quos sint velit quibusdam quae sunt illum nisi minus quisquam, eos dolor, temporibus autem! Quas labore enim iusto, id, magnam quod numquam cumque modi, molestiae ducimus eius explicabo ut? At asperiores quisquam recusandae dolorem sunt modi consectetur atque voluptatum eveniet possimus.
    </p>

    <ul>
        <li><a href="https://www.ubaya.ac.id" class="atas"target="_blank">UNIVERSITAS SURABAYA</a></li>
        <li><a href="https://www.facebook.com" target="_blank">FACEBOOK</a></li>
        <li><a href="https://www.kompas.com" target="_blank">KOMPAS</a></li>
    </ul>


</body>
</html>