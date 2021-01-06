<?php

        // Require MySQL Connection
        require ("database/DBController.php");

        // Require Product Class
        require ("database/Product.php");
        // Require Cart Class
        require ('database/Cart.php');


        //DBController Object
        $db = new DBController();

        $product = new Product($db);
        $product_shuffle = $product->getData();


        $Cart = new Cart($db );

?>