<?php 
    session_start();
    if($_SESSION['login'] == true){
        header('Location: member.php');
        exit();
    }

    $error = "";
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if($_POST['username'] == 'ari' && $_POST['password'] = 'ari') {
            $_SESSION['login'] = true;
            $_SESSION['username_login'] = 'ari';
            header('Location: member.php');
            exit();
        } else {
            $error = "login gagal";
        }
    }

?>

<html>
    <body>

        <?php if($error != "") { ?>
            <h2><?= $error ?></h2>
        <?php } ?>

        
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label>Username :
                <input type="text" name="username">
            </label>
            <br>

            <label>Password :
                <input type="password" name="password">
            </label>
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>


