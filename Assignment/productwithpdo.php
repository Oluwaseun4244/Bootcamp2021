<?php

require './class/PDO.class.php';


$tola = new DBH();

$naam = "HEY";

// $sql = "SELECT * FROM products WHERE product_name = :product_name";

// $stmt = $tola->prepare($sql);
// $stmt->execute(["product_name" => $naam]);
// $posts = $stmt->fetchAll();

// // var_dump($posts);

// foreach ($posts as $post) {
//    echo $post["product_price"] . "<br>";
// }
$sql = "SELECT * FROM products";

$stmt = $tola->query($sql);

while($row = $stmt->fetch()) {
   echo $row ["product_name"] . "<br>";
}


