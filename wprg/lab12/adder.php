<?php
if(isset($_POST['color']) && isset($_POST['make']) && isset($_POST['plates']) && isset($_POST['rok_prod'])){
    $dbConnection = mysqli_connect("localhost", "ian", "123","wprg");
    $color = $_POST['color'];
    $make = $_POST['make'];
    $plates = $_POST['plates'];
    $rok_prod = $_POST['rok_prod'];

    //nowe

    $query = "INSERT INTO cars (color, make, plates, rok_prod) VALUES (?, ?, ?, ?)";
    $statement = mysqli_prepare($dbConnection, $query);
    mysqli_stmt_bind_param($statement, "sssi", $color, $make, $plates, $rok_prod);
    if(!$result = mysqli_stmt_execute($statement)){
        echo mysqli_error($dbConnection);
    }else{
        header("Location: /wprg/lab12/index.php");
    }
    mysqli_close($dbConnection);
    exit();

    //stare

    /*$query ="INSERT INTO cars (color,make,plates) VALUES('$color','$make','$plates')";
    mysqli_query($dbConnection,$query);
    mysqli_close($dbConnection);
    header("Location: /wprg/lab12/index.php");
    exit();*/
}
?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf8">
    <title>Samochody</title>
</head>
<body>
<form action="adder.php" method="post">
    <table>
        <input type="text" name="color" placeholder="color" required>
        <input type="text" name="make" placeholder="make" required>
        <input type="text" name="plates" placeholder="plates" required>
        <input type="number" name="rok_prod" placeholder="rok_prod" required>
        <button type="submit"> Dodaj samochód</button>
    </table>
</form>
</body>
</html>