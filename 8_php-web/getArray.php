<?php 
    $numbers = $_GET['numbers'];
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;  
        var_dump($total);  
    }
?>


<html>


    <body>
        <h1>Total <?php echo $total ?> </h1>
    </body>
</html>