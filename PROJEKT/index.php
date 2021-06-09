<?php
/*$buttonIncrement = 0;
$dbConnection = mysqli_connect("localhost", "ian", "123", "projekt");
$columns = [
    'game' => 'game',
];

$sql = "SELECT " . implode(',', array_keys($columns)) . " FROM `TicTacToe`";
$result = mysqli_query($dbConnection, $sql);
$test = [];
while ($row = mysqli_fetch_row($result)) {
    $test[] = $row;
}
*/ ?><!--
<!doctype html>
<html lang="pl">
<head>
    <style>
        input {
            background-color: #ececec;
            border: none;
            color: #000000;
            padding: 20px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 1px 1px;
            cursor: pointer;
            width: 20px;
            height: 20px;
        }
    </style>
    <meta charset="utf8">
    <title>kółko i krzyżyk</title>
</head>
<form action="index.php" method="post">
    <?php
/*
    $k = 0;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $zmienna = NULL;
            if (@$test[$k] == "") {
                $zmienna = " ";
            } else {
                $zmienna = implode($test[$k]);
            }
            echo('<input type="submit" value="' . $zmienna . '" name="button' . $k .'" >');

            for ($buttonIncrement = 1; $buttonIncrement < 8; $buttonIncrement++){
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Something posted

                    if (isset($_POST['button'.$k])) {
                        if($buttonIncrement%2==0){
                            $game = "chuj";
                            echo($buttonIncrement." jeden ");
                            echo($game);
                            break;
                        }else{
                            $game = "a";
                            $buttonIncrement++;
                            echo($buttonIncrement."dwa");
                        }
                    }
                }
                $query = "INSERT INTO `tictactoe`(`game`) VALUES (?)";
                $statement = mysqli_prepare($dbConnection, $query);
                mysqli_stmt_bind_param($statement, "s", $game);
            }
            $k++;
        }
        echo('<br>');
    }


*/ ?>
</form>
</body>
<?php /*mysqli_close($dbConnection); */ ?>
</html>-->


<!--NOWE-->


<!DOCTYPE HTML>
<html>
<head>
    <style>
        div {
            width: 72px;
            height: 72px;
            padding: 10px;
            border: 1px solid #aaaaaa;
            margin: 1px 1px;
            display: inline-block;
        }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>
<form action="wartosci.php" method="post"
<?php
$k = 0;
for ($i = 0; $i < 3; $i++) {
    echo("<section>");
    for ($j = 0; $j < 3; $j++) {
        echo('<div id="div'.$k.'"ondrop="drop(event)" ondragover="allowDrop(event)"></div>');
        $k++;
    }
    echo("</section>");
}
?>

<br>
<?php
$k = 0;
$stable = 0;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 2; $j++) {
        if ($stable % 2 == 0) {
            echo('<img id="'.$k.'" src="zdjecie1.ico" draggable="true" ondragstart="drag(event)" width="72" height="72">');
            $k++;
            $stable++;
        } else {
            echo('<img id="'.$k.'" src="zdjecie2.ico" draggable="true" ondragstart="drag(event)" width="72" height="72">');
            $k++;
            $stable++;
        }
    }
    echo("<br>");
}
echo('<br>');
?>
<button type="submit" name="potwierdź">oke</button>
</html>
