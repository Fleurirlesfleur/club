<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
    include "../db_conn.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $yrOfStudy = $_POST['yrOfStudy'];
        $major = $_POST['major'];

        // Perform input validation here if needed

        // Update the user profile in the database
        $id = $_SESSION['id'];
        $sql = "UPDATE users 
                SET name=?, email=?, address=?, yrOfStudy=?, major=?
                WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $name, $email, $address, $yrOfStudy, $major, $id);
        $result = $stmt->execute();

        if ($result) {
            // Profile updated successfully
            header("Location: userProfile.php?success=Your profile has been updated successfully");
            exit;
        } else {
            // Handle error
            header("Location: userProfile.php?error=Failed to update profile");
            exit;
        }
    } else {
        // If form is not submitted
        header("Location: ../edit.php?error=error");
        exit;
    }
} else {
    // If user is not logged in
    header("Location: Login Page.php");
    exit;
}
?>
