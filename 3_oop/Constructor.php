<?php
    require_once "data/Person.php";

    $eko = new Person("eko","jakarta");
    $deden = new Person("deden",null);

    var_dump($eko);
    var_dump($deden);
?>