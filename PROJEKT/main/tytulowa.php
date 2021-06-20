<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf8">
    <link rel="stylesheet" href="style.css">
    <title>TicTacToe</title>
</head>

<body>
    <div class="modeDiv">
        <input type="checkbox" class="checkbox" id="chk" />
        <label class="label" for="chk">
            <i class="darkmode"></i>
            <i class="fas fa-sun"></i>
            <div class="ball">
            </div>
        </label>
    </div class="logoutButton">
    <form action="logout.php" method="POST">
        <button>Log Out!</button>
    </form>
    <div class="tictactoe-container">
        <h1 class="game-title">TicTacToe</h1>
        <div class="turns">
            <div class="x-container">

            </div>
            <div class="o-container">

            </div>
            <div class="xo-overlay-container xo-overlay-left">

            </div>
            <div class="xo-overlay-container xo-overlay-right">

            </div>
        </div>
        <div class="reset">Reset game</div>
        <div class="game-grid">
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
            <div class="game-cell" id="game-cell"></div>
        </div>
    </div>
    <!-- <h6><?php echo (date("Y-m-d")) ?></h6> -->
    <h6 class="footer">Copyright © 2021 Made By Ian Canals-Wąsik s23538</h6>
    </div>
    <script src="script.js"></script>
</body>

</html>