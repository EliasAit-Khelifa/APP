<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Creation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #0a2254;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    #signup-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }

    .form-group button {
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .back-to-home {
      margin-top: 15px;
      text-align: center;
    }

    .back-to-home a {
      color: #3498db;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div id="signup-container">
  <h2>Account Creation</h2>
  <?php include 'bdd.php'; ?>
  <form method="POST" class="submitLoginForm">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>
      <div id="password-error" style="color: red; display: none;">Passwords do not match.</div>
    </div>
    <button type="submit" name="formsend">Submit</button>
    <p>Already have an account? <a href="loginE.php">Log in here</a></p>
  </form>

  <div class="back-to-home">
    <a href="AcceuilEngl.php">Back to Home</a>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector(".submitLoginForm");
      const passwordError = document.getElementById("password-error");

      form.addEventListener("submit", function(event) {
        const passwordField = document.getElementById("password");
        const confirmPasswordField = document.getElementById("confirm-password");

        if (passwordField.value !== confirmPasswordField.value) {
          passwordError.style.display = "block";
          event.preventDefault();
        } else {
          passwordError.style.display = "none";
        }
      });
    });
  </script>
</div>
</body>
</html>
