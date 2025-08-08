<?php
session_start();
include 'db_connection.php'; // Make sure this defines $conn (MySQLi connection)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // Prepare SQL to prevent SQL injection
        $stmt = $conn->prepare("SELECT password FROM admin_users WHERE username = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // Check if username exists
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            // Check password
            if (password_verify($password, $hashed_password)) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $username;
                header("Location: admin_dashboard.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Invalid username.";
        }

        $stmt->close();
    }
} else {
    $error = "Invalid request method.";
}

// Show error and redirect if needed
if (isset($error)) {
    echo "<script>
        alert(" . json_encode($error) . ");
        window.location.href='login_page.php';
    </script>";
    exit();
}
?>
