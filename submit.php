<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $course = $_POST['course'] ?? '';

    // DB connection
    $conn = new mysqli("localhost", "root", "", "courses_db");

    if ($conn->connect_error) {
        echo json_encode(["status" => "error", "message" => "DB connection failed"]);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO enrollments (name, email, course) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $course);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Insert failed"]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
