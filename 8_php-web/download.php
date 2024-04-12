<?php 
    if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
        header('Content-Disposition: attachment; filename="pict.jpg"');
        header('Content-Type: image/jpeg');
        readfile(__DIR__ . '/file/pict.jpg');
        exit();
    } else {
        echo "Invalid Key";
    }



?>