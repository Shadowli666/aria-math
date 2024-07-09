<?php
require "conn.php";
// Obtener datos de la base de datos
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo json_encode(["success" => false, "message" => "No se encontraron registros"]);
    $conn->close();
    exit();
}

echo json_encode(["success" => true, "data" => $data]);

$conn->close();
