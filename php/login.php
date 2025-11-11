<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row["password"])) {
            $_SESSION["user"] = $row["username"];
            header("Location: dashboard.html");
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}
?>
