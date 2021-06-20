<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $dbConnection = mysqli_connect("localhost", "ian", "123", "projekt");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT email, password FROM signup WHERE email='$email' AND password='$password'";
    $mojeQuery = $dbConnection->query($query);
    $mojeQuery = $mojeQuery->num_rows;
    if ($mojeQuery > 0) {
        session_start();
        $_SESSION['zalogowano'] = true;
        header("Location: ../main/tytulowa.php");
    } else {
        $_SESSION['zalogowano'] = false;
        header("Location: index.php");
    }

    mysqli_close($dbConnection);
    exit();
} ?>

<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf8">
    <link rel="stylesheet" href="styleindex.css">
    <title>TicTacToe</title>
</head>

<body>
    <div class="popup" id="popup-1">
        <div class="content" id="content">
            <?php
            session_start();
            if (isset($_SESSION['zalogowano'])) {
                header("Location: ../main/tytulowa.php");
            } else {
                echo '
                    <div class="form-container sign-up-container">
                        <form action="signUp.php" method="POST">
                            <h1>Create Account!</h1>
                            <input type="email" placeholder="xyz@email.com" name="email" required>
                            <input type="text" placeholder="Name" name="name" required>
                            <input type="text" placeholder="Surname" name="surname" required>
                            <input type="password" placeholder="Password" name="password" required>
                            <button>Sign up</button>
                        </form>
                    </div>
                    <div class="form-container sign-in-container">
                        <form action="index.php" method="POST">
                            <h1>Sign in!</h1>
                            <input type="email" placeholder="xyz@email.com" name="email" required>
                            <input type="password" placeholder="Password" name="password" required>
                            <button>Sign in</button>
                        </form>
                    </div>
                    <div class="overlay-container" id="overlay-sign">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1>Welcome Back!</h1>
                                <p>
                                    Please sign in with your personal information, and enjoy!
                                </p>
                                <button class="ghost" id="signIn">Sign In</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1>Hello stranger!</h1>
                                <p>
                                    Enter your information to begin your journey!
                                </p>
                                <button class="ghost" id="signUp">Sign Up</button>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
    <script src="script_log.js"></script>
</body>