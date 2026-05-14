<?php

include "../includes/db.php";

$query = $conn->query("SELECT * FROM projects");

$projects = $query->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

echo json_encode($projects);

?>