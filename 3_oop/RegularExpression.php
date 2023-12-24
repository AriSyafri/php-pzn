<?php 

    $matches = [];
    $matchess = [];
    $result = (bool)preg_match_all("/eko|awan|edy/i", "Eko kurniawan khaennedy", $matches);
    $results = preg_match_all("/eko|awan|edy/i", "Eko kurniawan khaennedy", $matchess);

    var_dump($matches);
    var_dump($results);
    var_dump($result);

    $result = preg_replace("/anjing|bangsat/i","***","dasar lu anjing dan bangsat!");

    var_dump($result);

    $result = preg_split("/[\s,-]/", "Eko Kurniawan khannedy,programmer,zaman-Now");
    var_dump($result);

?>