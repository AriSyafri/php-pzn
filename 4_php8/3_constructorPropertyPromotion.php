<?php 

    // cara lama
    // class Product {
    //     public string $id;
    //     public string $name;
    //     public int $price;
    //     public int $quantity;

    //     public function __construct(string $id, string $name, int $price, int $quantity){

    //     }

    // }


    // cara baru 
    class Product {
        public function __construct(public string $id,
                                    public string $name,
                                    public int $price = 0,
                                    public int $quantity = 0,
                                    private bool $expensve = false)
        {

        }

    }

    $product = new Product(id: "1",name: "mie ayam", price: 2000);
    var_dump($product);

    echo $product->name . PHP_EOL;



?>