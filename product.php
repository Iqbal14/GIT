<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$products = ['Nike', 'Adidas', 'Puma', 'Reebok'];

function set_product(&$data, $nama) {
   array_push($data, $nama);
}

function get_products($data)
{
   foreach ($data as $product) {
       echo $product . ' ';
   }
}

set_product($products, 'Airwalk');
get_products($products);

?>
</body>
</html>