<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: AcceuilEngl.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>APP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="language-selection bottom-left">
            <a href="AcceuilConnecte.php"><img class="language-flag" src="image/french-flag.png" alt="French Flag"></a>
            <a href="AcceuilCEngl.php"><img class="language-flag" src="image/english-flag.png" alt="English Flag"></a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button type="submit">Search</button>
        </div>
        <nav>
            <ul>
                <li><a href="AcceuilCEngl.php">Home</a></li>
                <li><a href="Privatisation.html">Privatization</a></li>
                <li><a href="ProgrammationAVT.html">Programmation</a></li>
            </ul>
        </nav>

        <?php
        if (isset($_SESSION['username'])) {
            echo '<div class="login-register-button">
                    <p>Welcome, ' . htmlspecialchars($_SESSION['username']) . '!</p>
                    <div style="margin-top: 10px;">
                        <a href="MonCompte.php">My Account</a>
                    </div>
                    <form action="" method="post">
                        <button type="submit" name="logout" style="margin-top: 10px;">Logout</button>
                    </form>
                  </div>';
        } else {
            echo '<div class="login-register-button">
                    <a href="loginE.php">Log In</a>
                  </div>';
        }
        ?>

    </header>

    <section class="image-slider">
        <div class="image-container">
            <img class="slider-image" src="image\affiche\FILM1.jpg" alt="Image 1">
        </div>
        <script src="js/drapeau.js"></script>
    </section>

    <footer>
        <div class="footer-content">
            <ul>
                <li><a href="CGU.html">Terms of Service</a></li>
                <li><a href="societe.html">Company Information</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
