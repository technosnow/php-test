<?php

$products=[["name"=>"iphone", "price"=>"1000","category"=>"Electronics"],
["name"=>"Laptop", "price"=>"2000","category"=>"Electronics"],
["name"=>"T-Shirt", "price"=>"50","category"=>"clothes"],
];

foreach( $products as $product ){
    echo "Product: " .$product['name'] . " | Price: " . $product['price']. " | category: ". $product['category'] . "\n";
}
