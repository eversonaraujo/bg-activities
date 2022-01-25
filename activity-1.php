<?php

/**
* Given a list of products such as 'name', 'unit price', 'quantity',
*
* - write a script to display the products sorted by prices, the most expensive first
* - if 2 products have the same price, sort by quantities, the highest first
* - bonus: display in your sorted list of products the total price per product (quantity * unit price)
*/

    $products = [
        ['Milk', '1.25', 2],
        ['Eggs', '4.99', 1],
        ['Granulated sugar', '1.25', 1],
        ['Broccoli', '2.34', 3],
        ['Chocolate bar', '1.25', 5],
        ['Organic All-purpose flour', '4.99', 2]
    ];
    
    $prices = array_column($products, 1);
    $amount = array_column($products, 2);
    
    array_multisort($prices, SORT_DESC, $amount, SORT_DESC,  $products);
    var_dump($products);

