<?php
    session_start();
    require("./server.php");

    $jName = $_POST['jobTitle'];
    $comp_Username = $_SESSION['comp_Username'];
    $jIndustry = $_POST['industry'];
    $jLocation = $_POST['jobLocation'];
    $cType = $_POST['cType'];
    $Hours= $_POST['workingHours'];
    $Salary= $_POST['salary'];
    $tPeriod = $_POST['tPeriod'];
    $jDescrip = $_POST['jDescription'];
    $sRequired = $_POST['sRequired'];
    $edLevel = $_POST['edLevel'];

    $sql = "INSERT INTO postedjobs (comp_Username, JobName, JobSector, JobLocation, ContractType, WorkingHours, Salary, S_TimePeriod, J_Description, skillsRequired, EdLevels)
    VALUES ('$comp_Username', '$jName', '$jIndustry', '$jLocation', '$cType', '$Hours', '$Salary', '$tPeriod', '$jDescrip', '$sRequired', '$edLevel')";
    mysqli_query($connection, $sql);

    header("Location: ../stripe.php");
?>