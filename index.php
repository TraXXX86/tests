<?php
// Always start session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My first HTML5/PHP page</title>
    <!-- Bootstrap -->
    <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php
header('Location: ./gui/auth/authentication.php');
exit;
?>

</body>
</html>