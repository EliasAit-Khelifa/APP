<?php
// Récupérer la sélection du cinéma à partir des données du formulaire
$cinemaSelection = $_POST['cinemaSelect'];

// Rediriger vers une page différente en fonction du cinéma sélectionné
switch ($cinemaSelection) {
    case 'Paris12':
        header("Location: Programmation12.html");
        break;
    case 'Paris06':
        header("Location: Programmation6.html");
        break;
    case 'LaDefense':
        header("Location: ProgrammationLaDefense.html");
        break;
    case 'Marseille':
        header("Location: ProgrammationMarseille.html");
        break;

}

exit;
?>

