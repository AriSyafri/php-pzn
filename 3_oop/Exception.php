<?php
    require_once "exception/ValidationException.php";
    require_once "data/LoginRequest.php";
    require_once "helper/Validation.php";


    $loginRequest = new LoginRequest();
    $loginRequest->username = "ari";
    $loginRequest->password = "";


    // multiple try catch

    // try {
    //     validateLoginRequest($loginRequest);
    //     echo "valid" . PHP_EOL;
    // } catch (ValidationException $exception) {
    //     echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
    // } catch (Exception $exception) {
    //     echo "Error : {$exception->getMessage()}" . PHP_EOL;
    // } 

    // alternatif

    try {
        validateLoginRequest($loginRequest);
        echo "valid" . PHP_EOL;
    } catch (ValidationException | Exception $exception) {
        echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
        
        var_dump($exception->getTrace());       // ini debug exception

        echo $exception->getTraceAsString() . PHP_EOL;

    }  finally {       // blok finally untuk eksekusi baik ada exception atau tidak
        echo "error atau tidak, selalu dieksekusi" . PHP_EOL;
    }



?>