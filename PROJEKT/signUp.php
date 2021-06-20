<?php
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password'])) {
    $dbConnection = mysqli_connect("localhost", "ian", "123", "projekt");
    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    $query = "INSERT INTO signup(email, name, surname, password) VALUES (?, ?, ?, ?)";
    $statement = mysqli_prepare($dbConnection, $query);
    mysqli_stmt_bind_param($statement, "ssss", $email, $name, $surname, $password);
    if (!$result = mysqli_stmt_execute($statement)) {
        echo mysqli_error($dbConnection);
    }
    mysqli_close($dbConnection);
    header("Location: index.php");
    exit();
}?>
