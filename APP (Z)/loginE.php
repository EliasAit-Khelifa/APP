<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = hash('sha256', $password);

    $requete = $bdd->prepare("SELECT * FROM users WHERE pseudo = :username AND password = :hashedPassword");
    $requete->execute(
        array(
            "username" => $username,
            "hashedPassword" => $hashedPassword
        )
    );

    $result = $requete->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: AcceuilCEngl.php");
        exit();
    } else {
        echo "Incorrect username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="login-container">
  <form id="login-form" method="POST" action="">
    <div class="form-group">
        <center><h1>Login</h1></center>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Login</button>
    <p>Don't have an account? <a href="CrAccntE.php" onclick="toggleForm()">Create an account</a></p>
  </form>

  <div class="back-to-home">
    <a href="AcceuilEngl.php">Back to Home</a>
  </div>
</div>

<script>
  function toggleForm() {
    const loginForm = document.getElementById('login-form');
    const createAccountForm = document.getElementById('create-account-form');

    loginForm.style.display = (loginForm.style.display === 'none') ? 'block' : 'none';
    createAccountForm.style.display = (createAccountForm.style.display === 'none') ? 'block' : 'none';
  }
</script>

</body>
</html>
