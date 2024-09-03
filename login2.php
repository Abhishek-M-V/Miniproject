<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      background-image:url("bgsamp1.jpg");
      background-position: center;
      font-family: Arial, sans-serif;
    }
    
    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 25px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      background-image: url("wt1.png");
      background-repeat: repeat;
    }
    .dropdown {
      
      position: : absolute;
      top:10px;
      right:10px;
    }
    
    .container h2 {
      text-align: center;
      color: white;
    }
    
    .container label {
      display: block;
      color:white;
      margin-bottom: 10px;
    }
    
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 65px;
      box-sizing: border-box;
      margin-bottom: 10px;

    }
    
    .container select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 65px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }
    
    .container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 65px;
      cursor: pointer;
      width: 100%;
    }
    
    .container input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    .container .show-password {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    
    .container .show-password input[type="checkbox"] {
      margin-right: 5px;
    }
    .forgot-password{
      text-align: center;
      margin-top: 20px;
    }
    
    .container .signup-link {
      text-align: center;
      margin-top: 10px;
    }
    
    
    .container .signup-link a {
      color: #4CAF50;
      text-decoration: none;
    }
    

  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Designful Button</title>
  <link rel="stylesheet" href="styles.css">
  <script>
    function togglePassword() {
      var passwordInput = document.getElementById("password");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    }
  </script>
</head>
<body>
  
  <div class="container">
    <h2><u>PassengerLogin</u></h2>
    <form action="passlogindb.php" method="POST">
      <label for="username"><b>Username:</b></label>
      <input type="text" id="username" name="username" required>
      
      <label for="password"><b>Password:</b></label>
      <input type="password" id="password" name="password" required>
      <div class="show-password">
        <input type="checkbox" onclick="togglePassword()">
        <label for="showPassword">Show Password</label>
      </div> 
        
     
      <input type="submit" value="LOGIN">
      <div class="forgot password">
        <a href="password_recovery.php"><b><font color="white">Forgot Password?</font></b></a>
      <div class="signup-link">
      <input type="button"  value="New to the page?Signup!" onclick="location.href='signup.php';">
    </div>
    </form>
  </div>
</body>
</html>
