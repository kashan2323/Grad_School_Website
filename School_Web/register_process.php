<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone-number']);

    $sql = "INSERT INTO registrations (name, email, phone) 
            VALUES ('$name', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registered successfully!'); window.location='index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
