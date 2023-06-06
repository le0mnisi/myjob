<?php
    $connection = new mysqli("localhost", "root", "", "myJobDB");
    session_start();

        // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $jb_Name = $_POST['fullname'];
        $jb_Surname = $_POST['surname'];
        $jb_Username = $_POST['username'];
        $jb_Email = $_POST['email'];
        $password = $_POST['password'];
        $birthdate = $_POST['birthdate'];
    
        // Check if the username already exists in the database
        $query = "SELECT COUNT(*) as count FROM jobseeker WHERE jobSeeker_Username = '$jb_Username'";
        $query2 = "SELECT COUNT(*) as count FROM jobseeker WHERE jobSeeker_Email = '$jb_Email'";
    
        $result = mysqli_query($connection, $query);
        $result2 = mysqli_query($connection, $query2);
    
        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);
    
        $count = $row['count'];
        $count2 = $row2['count'];
    
    
        if ($count > 0 ) {
            // User already exists
            $message = "This user already exists.";
            header("Location: ../jobseeker sign-up.php?signup=failed");
    
        } else {
            $_SESSION['jobSeeker_Username'] = $jobSeeker_Username;
            // User doesn't exist, proceed with inserting the new user
            // ...
            // Code to insert the user into the database goes here
            // ...
            $sql = "INSERT INTO jobseeker (jobSeeker_Username, jobSeeker_Name, jobSeeker_Surname, jobSeeker_Email, password_, jobSeeker_Birthdate)
            VALUES ('$jb_Username', '$jb_Name','$jb_Surname', '$jb_Email', '$password', '$birthdate')";
            mysqli_query($connection, $sql);
            header("Location: ../home_.php?signup=success");
            $message = "User registered successfully!";
        }
    }
?>