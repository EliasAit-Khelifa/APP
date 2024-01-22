<?php
if (isset($_POST['formsend'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connexion réussie !";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $pseudo = $_POST["username"];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = hash('sha256', $password);

    $requete = $bdd->prepare("INSERT INTO users (pseudo, password, email) VALUES (:pseudo, :hashedPassword, :email)");
    $requete->execute(
        array(
            "pseudo" => $pseudo,
            "hashedPassword" => $hashedPassword,
            "email" => $email
        )
    );

    echo "Inscription prise en compte";
    header("Location: login.php");
}
?>
