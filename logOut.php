<?php ob_start(); ?>
<?php session_start(); ?>
<?php

$_SESSION['email'] = null;
$_SESSION['id'] = null;

header("Location: /ItJob/");
?>
