<?php
// Always start session
session_start();

// Includes
include("../../serv/auth.php");

// Check if user is authentificated
isAuthorized($_SESSION['mail']);

// Set current page
$currentPage = 'creation';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My first HTML5/PHP page</title>
    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Header -->
<?php include("../menu/component/header.php"); ?>

<div class="row">
    <div class="col-md-2">
        <?php include("../menu/component/menus.php"); ?>
    </div>
    <div class="col-md-8">
        <?php include("component/buildingList.php"); ?>
    </div>
</div>

</body>
</html>