<?php
// example.php
header('Content-Type: application/json');
$data = [
    "message" => "Hello, world!",
    "status" => "success"
];
echo json_encode($data);
?>