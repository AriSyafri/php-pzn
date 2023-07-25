<?php 
    class SocialMedia {
        public string $name;
    }


    //final class ketika di final tidak dapat diturunkan 
    // final function tidak dapat di override

    class Facebook extends SocialMedia {
        final public function login(string $username, string $password):bool {
            return true;
        }
    }

    //error
    class FakeFacebook extends SocialMedia {
        public function login(string $username, string $password):bool {
            return false;
        }
    }