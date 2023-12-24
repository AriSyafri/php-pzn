<?php
    require_once "exception/ValidationException.php";
    require_once "data/LoginRequest.php";
    require_once "helper/ValidationUtil.php";

    $request = new LoginRequest();
    $request->username = "done";
    $request->password = "inul";

    // tanpa reflect
    //ValidationUtil::validate($request);

    ValidationUtil::validateReflection($request);

    class RegisterUserRequest {
        public ?string $name;
        public ?string $address;
        public ?string $email;
    }

    $register = new RegisterUserRequest();
    $register->name = "ujanag";
    $register->address = "subang";
    $register->email = "test@gmail.com";

    ValidationUtil::validateReflection($register);