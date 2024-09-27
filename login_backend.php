<?php
include('db.php'); // Include the database connection file

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check if username exists
    $query = "SELECT * FROM patient_details WHERE name = '$name'";
    $result = mysqli_query($conn, $query);

    // If user exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Password is correct, login successful
            header("Location: index.php"); // Redirect to the main page after successful login
            exit();
        } else {
            // Invalid password
            echo "<script>alert('Invalid username or password. Please try again.'); window.location.href='flogin.php';</script>";
        }
    } else {
        // Invalid username
        echo "<script>alert('Invalid username or password. Please try again.'); window.location.href='flogin.php';</script>";
    }
} else {
    header("Location: login.php"); // Redirect back to login page if accessed without form submission
    exit();
}
?>
