<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            border: 5px;
        }

        header {
            color: white;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }

        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            padding: 0;
            list-style: none;
            text-align: center;
        }

        header li {
            display: inline;
            margin: 0 20px;
        }

        header .highlight, header .current a {
            color: #e8491d;
            font-weight: bold;
        }

        section {
            padding: 20px;
            background: #ffffff;
            border: 5px solid #dddddd;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        footer {
            background: #50b3a2;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li class="current"><a href="MonCompte.php">Mon Compte</a></li>
                    <!-- Autres liens de navigation si nécessaire -->
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <section class="privatisations">
            <h2>Mes Privatisations</h2>
            <!-- Contenu des privatisations ici -->
        </section>
        <section class="reservations">
            <h2>Mes Réservations</h2>
            <!-- Contenu des réservations ici -->
        </section>
        <section class="films-favoris">
            <h2>Mes Films Favoris</h2>
            <!-- Contenu des films favoris ici -->
        </section>
    </div>
    <div class="back-to-home">
        <a href="AcceuilConnecte.php">Retour à l'accueil</a>
    </div>

    <footer>
        <!-- Contenu du pied de page ici -->
    </footer>
</body>
</html>
