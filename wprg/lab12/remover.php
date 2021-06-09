<?php
if(isset($_POST['color']) && isset($_POST['make']) && isset($_POST['plates'])){
    $dbConnection = mysqli_connect("localhost", "ian", "123","wprg");
    $color = $_POST['color'];
    $make = $_POST['make'];
    $plates = $_POST['plates'];
    $selected_id = $_POST['id'];
    $query = "DELETE FROM cars WHERE $_POST['$id']";
    $statement = mysqli_prepare($dbConnection, $query);
    mysqli_stmt_bind_param($statement, "sss", $color, $make, $plates);
    if(!$result = mysqli_stmt_execute($statement)){
        echo mysqli_error($dbConnection);
    }else{
        header("Location: /wprg/lab12/index.php");
    }
    mysqli_close($dbConnection);
    exit();