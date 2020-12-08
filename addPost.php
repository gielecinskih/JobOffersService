<?php session_start(); ?>
<?php
if (!isset($_SESSION['email'])) {
    header("Location: /ItJob/");
}
?>
<?php include "db.php"; ?>
<?php
$query = "SELECT technology FROM technologies";
$select_tech_query = mysqli_query($connection, $query);
if (!$select_tech_query) {
    header("Location: /ItJob/");
}

$technologies = array();
while ($row = mysqli_fetch_array($select_tech_query)) {
    array_push($technologies, $row['technology']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style> <?php include "addPostStyles.css"?> </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <h1 class="logo"><a href='/ItJob/'>ItJobOffers.pl</a></h1>
    <?php
    if (isset($_SESSION['email'])) {
        echo "<a href='/ItJob/logOut.php'><div class='logOutButton'>Log out</div></a>";
    }
    ?>
</header>
<form action="processPosting.php" method="POST">
    <div>
        <label for="offerName">Offer Name</label>
        <input class="inForm" name="offerName" type="text" required>
    </div>
    <div>
        <label for="companyName">Company Name</label>
        <input class="inForm" name="companyName" type="text" required>
    </div>
    <div>
        <label for="salary">Salary (PLN)</label>
        <input class="inForm" name="salary" type="number" required>
    </div>
    <div>
        <label for="address">Address</label>
        <input class="inForm" name="address" type="text" required>
    </div>
    <div>
        <label for="experience">Experience</label>
        <input class="inForm" name="experience" type="number" required>
    </div>
    <div>
        <label for="typeOfRecrutation">Recrutation type</label>
        <select name="typeOfRecrutation" class="inForm">
            <option value="online">Online</option>
            <option value="office">Office</option>
            <option value="hybrid">Hybrid</option>
        </select>
    </div>
    <div>
        <label for="stages">Number of stages</label>
        <input class="inForm" name="stages" type="number" required>
    </div>
    <div>
        <label for="technology">Technology</label>
        <select name="technology" class="inForm">
            <?php
            foreach ($technologies as &$tech) {
                echo "<option value='$tech'>$tech</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="hardware">Hardware</label>
        <input id="chbox" class="inForm" name="hardware" type="checkbox">
    </div>
    <div>
        <label for="car">Car</label>
        <input id="chbox" class="inForm" name="car" type="checkbox">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input id="chbox" class="inForm" name="phone" type="checkbox">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea class="inForm" name="description" rows="4" cols="50"></textarea>
    </div>
    <div>
        <label for="requirements">Requirements</label>
        <textarea class="inForm" name="requirements" rows="4" cols="50"></textarea>
    </div>
    <div>
        <input name="submit" class="inFormButton example_e" type="submit" value="Add Post">
    </div>

</form>
</body>
</html>
