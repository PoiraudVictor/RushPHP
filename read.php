<?php
    $content = file_get_contents("../db/products");
    $products = unserialize($content);
        foreach ($products as $key => $val)
        {
                echo $products[$key];
        }
?>
