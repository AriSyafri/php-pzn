<?php 
    namespace Data;

    interface HasBrand {
        function getBrand(): string;
    }

    interface IsMaintenance {
        function isMaintenance(): void;
    }

    interface Car extends HasBrand{
        function drive(): void;
        function getTime(): int;

    }

    class Avanza implements Car, IsMaintenance {

        public function drive(): void {
            echo "Drive Avanza ". PHP_EOL;
        }

        public function getTime(): int {
            return 4;
        }

        public function getBrand(): string {
            return "Toyota" . PHP_EOL;
        }

        public function isMaintenance(): void {
            echo "loading" . PHP_EOL;
        }
    }

