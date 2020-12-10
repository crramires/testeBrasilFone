<?php

$conn = new PDO("mysql:host=localhost; dbname=dbBrasilFone", "root", "");

$stmt = $conn->prepare("INSERT INTO usuarios (desemail, despassword) VALUES (:LOGIN, :PASSWORD) ");

?>