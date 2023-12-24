<?php
    class ValidationUtil {
        static function validate(LoginRequest $request) {
            if(!isset($request->username)) {
                throw new ValidationException("username is not set");
            } else if (!isset($request->password)) {
                throw new ValidattionException("password is not set");
            } else if (is_null($request->username)) {
                throw new ValidattionException("username is null");
            } else if (is_null($request->password)) {
                throw new ValidattionException("password is null");
            }
        }

        // dari pada program diatas lebih baik benggunakan reflection dikarenakan lebih otomatis dan ga banyak lagi
        static function validateReflection($request) {
            $reflection = new ReflectionClass($request); 
            $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
            foreach ($properties as $property) {
                if (!$property->isInitialized($request)) {
                    throw new ValidationException("$property->name is not set");
                } else if (is_null($property->getValue($request))) {
                    throw new ValidationException("$property->name is null");
                }
            }
        }
    }