<?php
    session_start();
    $connection = new mysqli("localhost", "root", "", "myJobDB");

    $jb_username = $_POST['jb_username'];
    $password = $_POST['password'];
    $_SESSION['jb_username'] = $jb_Username;
    
    // Function to check if username and password exist in the database
    function checkUsernameAndPassword($jb_username, $password, $connection)
    {
        // Escape special characters to prevent SQL injection
        $jb_username = $connection->real_escape_string($jb_username);
        $password = $connection->real_escape_string($password);

        // Hash the password (assuming it's stored as a hash in the database)
        $hashedPassword = md5($password); // You should consider using a more secure hashing algorithm

        // Query to check if username and password match
        $query = "SELECT COUNT(*) as count FROM jobseeker WHERE jobSeeker_Username = '$jb_username' AND password_ = '$password'";
        $result = $connection->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            $count = $row['count'];
            return ($count > 0);
        }
        return false;
}

    if (checkUsernameAndPassword($jb_username, $password, $connection)) {
        header("Location: ../home_.php?login=success");
        echo "Logged in successfully!";
        // Perform further actions after successful login
    } else {
        echo "Invalid username or password.";
        header("Location: ../jobseeker login.php?login=failed");

    }

    


?>