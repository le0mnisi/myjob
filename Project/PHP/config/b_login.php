<?php
session_start();

$connection = new mysqli("localhost", "root", "", "myJobDB");


$b_Username = $_POST['b_Username'];
$password = $_POST['password'];

// Function to check if username and password exist in the database
function checkUsernameAndPassword($username, $password, $connection)
{
    // Escape special characters to prevent SQL injection
    $username = $connection->real_escape_string($username);
    $password = $connection->real_escape_string($password);

    // Hash the password (assuming it's stored as a hash in the database)
    $hashedPassword = md5($password); // You should consider using a more secure hashing algorithm

    // Query to check if username and password match
    $query = "SELECT COUNT(*) as count FROM companyprofile WHERE comp_Username = '$username' AND password_ = '$password'";
    $result = $connection->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $count = $row['count'];
        return ($count > 0);
    }
    return false;
}

if (checkUsernameAndPassword($b_Username, $password, $connection)) {
    $_SESSION['comp_Username'] = $b_Username;
    header("Location: ../dash.php?signup=success");
    echo "Logged in successfully!";
    // Perform further actions after successful login
} else {
    echo "Invalid username or password.";
    header("Location: ../business login.php?signup=success");

}
$_SESSION['comp_Username'] = $b_Username;
?>