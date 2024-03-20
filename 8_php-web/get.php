<?php 
    $say = "Hello " . htmlspecialchars($_GET['name']);

?>


<html>


    <body>
        <h1> <?php echo $say ?> </h1>
    </body>
</html>