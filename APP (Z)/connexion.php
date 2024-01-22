<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $requete = $bdd->prepare("SELECT * FROM users WHERE pseudo = :username");
    $requete->execute(
        array(
            "username" => $username
        )
    );

    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['username'] = $username;

        header("Location: Acceuil.php?status=connected");
        exit();
    } else {
        echo "Identifiants incorrects";
    }
}
