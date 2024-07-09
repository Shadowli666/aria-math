<?php
require "conn.php";
// Obtener datos del POST
$name = $_POST['name'];
$email = $_POST['email'];
// Insertar datos en la base de datos
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true, "message" => "Registro exitoso"]);
} else {
    echo json_encode(["success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error]);
}

