<?php 

require_once __DIR__ .'/vendor/autoload.php';

$customer = new \Programmerzamannow\BelajarPhpComposerHello\Customer("Ari");

echo $customer->sayHello("Ujang") . PHP_EOL;
echo $customer->sayHello("Udin") . PHP_EOL;
echo $customer->sayHello("Deden") . PHP_EOL;


?>