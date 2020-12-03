<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style> <?php include "loginStyles.css"?> </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="backContainer">
    <div class="logo"><a href="/ItJob/"><h1>ItJobOffers</h1></a></div>
    <div class="container">
        <div class="niceImg">
            <div id="tilt">
            </div>
        </div>
        <div class="loginForm">
            <p class="logText">Log In</p>
            <form action="processLogin.php" method="POST">
                <input name="email" class="inForm" type="text" placeholder="Email">
                <input name="password" class="inForm" type="password" placeholder="Password">
                <input name="login" class="inFormButton example_e" type="submit" value="SUBMIT">
            </form>
            <p>Need an account? <a class="signUp" href="/ItJob/register.php">Sign up now!</a></p>
        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>