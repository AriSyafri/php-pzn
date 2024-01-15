<?php 

function input(string $info): string {
    // menggunakan fungsi fgets untuk menginput data konsol
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);    
}