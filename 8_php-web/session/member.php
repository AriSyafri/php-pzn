<?php 

    session_start();

    if($_SESSION['login'] != true) {
        header('Location: login.php');
        exit();
    }

    $say = "Hello " . $_SESSION['username_login'];

?>


<html>
    <body>
        <h1><?= $say ?></h1>
        <a href="logout.php">Logout</a>
    </body>
</html>