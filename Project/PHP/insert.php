<?php
    require("./config/server.php");

    if(isset($_POST['submit'])){


        // Get values from form data
        $cardNum = $_POST['card_number'];
        $cardExp = $_POST['exp_date'];
        $cardCvv = $_POST['card_cvv'];

        // Connect to the database
        //$connection = new mysqli("localhost", "root", "", "user information");

        // Check for connection errors
        //if ($connection->connect_error) {
           // die("Connection failed: " . $connection->connect_error);
        //}


        $sql = "INSERT INTO `payment_infomation`(`Card_Number`, `Card_Exp`, `Card_CVV`) 
        VALUES (?, ?, ?)";

        // Prepare the statement
        $stmt = $connection->prepare($sql);


        // Bind parameters to the statement
        $stmt->bind_param("sss", $cardNum, $cardExp, $cardCvv);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and the database connection
        $stmt->close();
        $connection->close();
    }
?>