<?php include "db.php"; ?>
<?php session_start(); ?>

<?php
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['id'];
    $offerName = mysqli_real_escape_string($connection, $_POST['offerName']);
    $salary = mysqli_real_escape_string($connection, $_POST['salary']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $experience = mysqli_real_escape_string($connection, $_POST['experience']);
    $companyName = mysqli_real_escape_string($connection, $_POST['experience']);
    $technology = mysqli_real_escape_string($connection, $_POST['technology']);

    $query = "INSERT INTO `offers` (`id`, `userId`, `offerName`, `salary`, `address`, `experience`, `companyName`, `technology`) VALUES (NULL, '$user_id', '$offerName', '$salary', '$address', '$experience', '$companyName', '$technology')";

    $result = $connection->query($query);
    if (!$result) {
        header("Location: /ItJob/addPost.php");
    }

    $offerId = $connection->insert_id;
    $typeOfRecrutation = mysqli_real_escape_string($connection, $_POST['typeOfRecrutation']);
    $Stages = mysqli_real_escape_string($connection, $_POST['stages']);

    $query = "INSERT INTO `recrutation` (`id`, `offerId`, `typeOfRecrutation`, `Stages`) VALUES (NULL, '$offerId', '$typeOfRecrutation ', '$Stages')";
    $result = $connection->query($query);
    if (!$result) {
        header("Location: /ItJob/addPost.php");
    }

    if (isset($_POST['hardware'])) $hardware = 'Yes';
    else $hardware = 'No';

    if (isset($_POST['car'])) $car = 'Yes';
    else $car = 'No';

    if (isset($_POST['phone'])) $phone = 'Yes';
    else $phone = 'No';

    $query = "INSERT INTO `benefits` (`id`, `offerId`, `hardware`, `car`, `phone`) VALUES (NULL, '$offerId', '$hardware ', '$car', '$phone')";
    $result = $connection->query($query);
    if (!$result) {
        header("Location: /ItJob/addPost.php");
    }

    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $requirements = mysqli_real_escape_string($connection, $_POST['requirements']);

    $query = "INSERT INTO `description` (`id`, `offerId`, `description`, `requirements`) VALUES (NULL, '$offerId', '$description ', '$requirements')";
    $result = $connection->query($query);
    if (!$result) {
        header("Location: /ItJob/addPost.php");
    }
}
header("Location: /ItJob/");
