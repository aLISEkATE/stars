<?php

$conn = new mysqli("localhost", "root", "", "stars");

$results = $conn->query("SELECT * FROM clickers"); 
$row = $results->fetch_assoc(); 

var_dump($row);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $new_clicks = $row['clicks'] + 1;

   $sql = "UPDATE clickers SET clicks = $new_clicks WHERE id = 1"; 
}
$conn->close();
?>

