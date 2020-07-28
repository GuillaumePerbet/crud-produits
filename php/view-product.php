<?php

include 'functions.php';

//Connect to MySQL
$pdo = pdo_connect_mysql();
// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM products');
$stmt->execute();
// Fetch the records so we can display them in our template.
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($products);
foreach($products as $product){
    $product['id_products'];
    $product['image_id'];
    $product['category_id'];
    $product['manual_id'];
    $product['source_id'];
    $product['name'];
    $product['reference_number'];
    $product['price'];
    $product['buy_date'];
    $product['end_warranty'];
    $product['care_products'];
}