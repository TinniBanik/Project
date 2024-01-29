<?php
// Establish a database connection here (not shown in this example)
// Replace 'your_database_host', 'your_username', 'your_password', and 'your_database' with your actual database details.
$conn = new mysqli('your_database_host', 'your_username', 'your_password', 'your_database');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_POST['change_password'])) {
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];
    
    // Validate the current password against the database (you should have a users table with a password field)
    // Replace 'users' with your actual table name and 'password' with the field name for the password in your table.
    $username = $_SESSION['username']; // Assuming you have stored the username in a session variable
    
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];
        
        if (password_verify($currentPassword, $hashedPassword)) {
            if ($newPassword === $confirmPassword) {
                // Hash the new password
                $newPasswordHash = password_hash($newPassword, PASSWORD_BCRYPT);
                
                // Update the user's password in the database
                $updateSql = "UPDATE users SET password = '$newPasswordHash' WHERE username = '$username'";
                if ($conn->query($updateSql) === TRUE) {
                    echo "Password changed successfully!";
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "New passwords do not match.";
            }
        } else {
            echo "Incorrect current password.";
        }
    } else {
        echo "User not found.";
    }
    
    $conn->close();
}
?>
