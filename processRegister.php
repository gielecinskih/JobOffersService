<?php include "db.php"; ?>
<?php session_start(); ?>
<?php
if (isset($_POST['register'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $secondPassword = $_POST['secondPassword'];
}

if($password !== $secondPassword){
    header("Location: /ItJob/register.php");
}

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$encriptPassword = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (username,password) VALUES('$username','$encriptPassword')";
if($username && $password){
    $result = mysqli_query($connection,$query);
    if(!$result){
        header("Location: /ItJob/register.php");
    }else{
        $query = "SELECT * FROM users WHERE username = '$username'";
        $select_user_query = mysqli_query($connection, $query);
        if (!$select_user_query) {
            header("Location: /ItJob/register.php");
        }
        while ($row = mysqli_fetch_array($select_user_query)) {
            $db_id = $row['id'];
            $db_username = $row['username'];
        }
        $_SESSION['email'] = $db_username;
        $_SESSION['id'] = $db_id;
    }
}
header("Location: /ItJob/");
?>