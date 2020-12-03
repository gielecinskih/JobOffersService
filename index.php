<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style> <?php include "styles.css"?> </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="logo"><a href='/ItJob/'>ItJobOffers.pl</a></h1>
        <?php
        if(isset($_SESSION['email'])){
            echo "<a href='/ItJob/addPost.php'><div class='postButton'>Add Post</div></a>";
            echo "<a href='/ItJob/logOut.php'><div class='logOutButton'>Log out</div></a>";
        }else{
            echo "<a href='/ItJob/login.php'><div class='loginButton'>SignIn</div></a>";
        }
        ?>
    </header>
    <div class="languagesFilter">
        <div class="clear"></div>
        <div class="language">
            <div class="logo">
                <span>All</span>
            </div>
            <h4 class="name">All</h4>
        </div>
        <div class="language">
            <div class="logo ruby">
                <span class="iconify" data-icon="whh:ruby" data-inline="false"></span>
            </div>
            <h4 class="name">RUBY</h4>
        </div>
        <div class="language">
            <div class="logo java">
                <span class="iconify" data-icon="cib:java" data-inline="false"></span>
            </div>
            <h4 class="name">JAVA</h4>
        </div>
        <div class="language">
            <div class="logo php">
                <span class="iconify" data-icon="cib:php" data-inline="false"></span>
            </div>
            <h4 class="name">PHP</h4>
        </div>
        <div class="language">
            <div class="logo net">
                <span class="iconify" data-icon="cib:dot-net" data-inline="false" data-width="40" data-height="40"></span>
            </div>
            <h4 class="name">.NET</h4>
        </div>
        <div class="language">
            <div class="logo python">
                <span class="iconify" data-icon="bx:bxl-python" data-inline="false" data-width="40" data-height="40"></span>
            </div>
            <h4 class="name">PYTHON</h4>
        </div>
        <div class="language">
            <div class="logo html">
                <span class="iconify" data-icon="icomoon-free:html-five" data-inline="false" data-width="40" data-height="40"></span>
            </div>
            <h4 class="name">HTML</h4>
        </div>
        <div class="language">
            <div class="logo mobile">
                <span class="iconify" data-icon="tabler:device-mobile" data-inline="false" data-width="40" data-height="40"></span>
            </div>
            <h4 class="name">MOBILE</h4>
        </div>
        <div class="language">
            <div class="logo js">
                <span class="iconify" data-icon="cib:javascript" data-inline="false" data-width="40" data-height="40"></span>
            </div>
            <h4 class="name">JS</h4>
        </div>
        <div class="language">
            <div class="logo other">
                <span class="iconify" data-icon="jam:computer-alt" data-inline="false" data-width="40" data-height="40"></span>
            </div>
            <h4 class="name">OTHER</h4>
        </div>
        <div class="clear"></div>
    </div>
    <div class="offers">
        <ul class="allOffers">
            <li class="offer">
                <div class="offerContainer">
                    Offer
                </div>
            </li>
            <li class="offer">
                <div class="offerContainer">
                    Offer
                </div>
            </li>
            <li class="offer">
                <div class="offerContainer">
                    Offer
                </div>
            </li>
        </ul>
    </div>

</body>
</html>
