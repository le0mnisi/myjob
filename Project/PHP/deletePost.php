<?php
    require("./config/server.php");

    if(isset($_GET['DeleteID'])){
        $id = $_GET['DeleteID'];
        $sql = "DELETE FROM postedjobs WHERE JobID = $id";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo "Deleted successfuly";
            header("Location: ../dash.php?Delete=success");
        } 
        else{
            die(mysqli_error($connection));
        }
    }
?>