<?php
    session_start();
    require("./server.php");
    $id = $_GET['UpdateID'];
    $jName = $_POST['jobTitle'];
    $comp_Username = $_SESSION['comp_Username'];
    $jIndustry = $_POST['industry'];
    $jLocation = $_POST['JobLocation'];
    $cType = $_POST['cType'];
    $Hours= $_POST['workingHours'];
    $Salary= $_POST['salary'];
    $tPeriod = $_POST['tPeriod'];
    $jDescrip = $_POST['jDescription'];
    $sRequired = $_POST['sRequired'];
    $edLevel = $_POST['edLevel'];
    

    $sql = "UPDATE postedjobs set JobID = '$id', JobName = '$jName', JobSector = '$jIndustry', JobLocation = '$jLocation',
    ContractType = '$cType', WorkingHours = '$Hours', Salary = '$Salary', S_TimePeriod = '$tPeriod', j_Description = '$jDescrip', skillsRequired = '$sRequired', EdLevels = '$edLevel'
    where JobID = '$id'";
    mysqli_query($connection, $sql);
    header("Location: ../dash.php?signup=success");

?>