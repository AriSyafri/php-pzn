<?php 
    // nullabel class
    class Address {
        public ?string $country;
    }

    class User {
        public ?Address $address;
    }

    // manual null check 

    // function getCountry(?User $user): ?string {
    //     if ($user != null){
    //         if ($user->address != null) {
    //             return $user->address->country;
    //         }
    //     }
    //     return null;
    //     //return $user->address->country; ini error
    // }
    // echo getCountry(null) . PHP_EOL;

    // nullsafe operator
    function getCountry(?User $user):?string {
        return $user?->address?->country;
    }

    echo getCountry(null) . PHP_EOL;

?>