<?php include "db.php"; ?>
<?php session_start(); ?>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '$username'";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {
        header("Location: /ItJob/login.php");
    }

    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_id = $row['id'];
        $db_username = $row['username'];
        $db_password = $row['password'];
    }

    if ($username !== $db_username || !password_verify($password, $db_password)) {
        header("Location: /ItJob/login.php");
    } else {
        $_SESSION['email'] = $db_username;
        $_SESSION['id'] = $db_id;
    }
}
header("Location: /ItJob/");