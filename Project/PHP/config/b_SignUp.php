<?php
    require("./server.php");
    session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $bName = $_POST['bName'];
        $comp_Username = $_POST['bUsername'];
        $pPic = $_POST['pPic'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $industry = $_POST['industry'];
        $comp_Descrip = $_POST['comp_Descrip'];
        $contactNum= $_POST['contactNum'];
        $password= $_POST['password'];

        // Check if the username already exists in the database
        $query = "SELECT COUNT(*) as count FROM companyprofile WHERE comp_Username = '$comp_Username'";
        $query2 = "SELECT COUNT(*) as count FROM companyprofile WHERE comp_Email = '$email'";

        $result = mysqli_query($connection, $query);
        $result2 = mysqli_query($connection, $query2);

        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);

        $count = $row['count'];
        $count2 = $row2['count'];


        if ($count > 0 || $count2 > 0) {
            // User already exists
            $message = "This user already exists.";
            header("Location: ../business sign-up.php?signup=failed");

        } else {
            $_SESSION['comp_Username'] = $b_Username;
            // User doesn't exist, proceed with inserting the new user
            // ...
            // Code to insert the user into the database goes here
            // ...
            $sql = "INSERT INTO companyprofile (comp_Name, comp_Username, comp_IMG, comp_Address, comp_Email, comp_TelNum, password_, comp_Descrip, Industry)
            VALUES ('$bName', '$comp_Username','$pPic', '$address', '$email', '$contactNum', '$password', '$comp_Descrip', '$industry')";
            mysqli_query($connection, $sql);
            header("Location: ../business login.php?signup=success");
            $message = "User registered successfully!";
        }
    }
?>