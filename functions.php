<?php
function getProducts() {
    $json = file_get_contents('products.json');
    return json_decode($json, true);
}
?>
