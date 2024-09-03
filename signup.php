<!DOCTYPE html>
<html>
<head>
  <title>passenger signup</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    body {
     background-image:url("wp3.jpg");
      background-position: center;
      font-family: Arial, sans-serif;
    }
    
    .container {
      background-image: linear-gradient(to bottom right, #e2e2e2, #ffffff);
      background-color: rgba(0, 0, 0, 0);
      max-width: 400px;
      margin:  auto;
      padding: 25px;
      border: 2px solid #ccc;
      border-radius: 25px;
      
    }
    .dropdown {
      
      position: : absolute;
      top:10px;
      right:10px;
    }
    
    
    .container h2 {
      text-decoration: underline;
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 5px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
    }
    
    .form-group input {
      width: 90%;
      padding: 8px;
      border-radius: 25px;
      border: 2px solid #ccc;
    }
  .button-container {
      text-align:right;
    }

    input[type="submit"] {
  
    width: 40%;
      background-color: #3498db;
      color: #fff;
      padding: 15px 15px;
      border: none;
      border-radius: 25px;
      cursor: pointer;
    }
  .form-row {
      margin-bottom: 15px;
    }
  .form-row label {
      display: block;
      font-weight: bold;
    }
   .form-row input,textarea {
      width: 90%;
      padding: 8px;
      border-radius: 25px;
      border: 3px solid #ccc;
    }
  .form-row {
      align-items: center;
    }
  .form-row input[type="tel"] {
    width: 74%;
      flex: 1;
  }
  select#country-code{
     width: 15%;
      padding: 8px;
      border-radius: 25px;
      border: 3px solid #ccc;
   }
   .form-group input[type="password"] {
cursor: pointer;
    }
    button {
  border: none;
  padding: 0;
  background: none;
  cursor: pointer;
}

/* Add styles to the designful button */
.designful-button {
  background-color: #3498db;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 25px;
  font-size: 16px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: background-color 0.2s ease;
}

/* Add hover effect */
.designful-button:hover {
  background-color: #2980b9;
}

  
  </style>
</head>
<body>
  <div class="dropdown" >
    <select  class="designful-button " onchange="location = this.value;">
      <option value="" disabled selected>Select User</option>
      <option value="signup.php">PASSENGER</option>
      <option value="signup2.php">BUS OWNER</option>
    </select>

<div class="container">
  <h2>PASSENGER SIGNUP</h2>
  <form action="passengerreg.php" method="POST">
  
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
</div>
<div class="form-group">
    <label for="Address">Address:</label>
  <textarea id="Address" name="Address" required></textarea>
 </div>
<div class="form-row">
     <label for="phone">Phone Number:</label>
    <select id="country-code" name="country-code">
      <option value="+1">+1</option>
      <option value="+44">+44</option>
      <option value="+61">+61</option>
      <option value="+81">+81</option>
      <option value="+91">+91</option>
      <!-- Add more country code options as needed -->
    </select>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br><br>

    <!-- Your other form fields here -->

</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
</div>

<div class="form-group">
    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>
</div>

<div class="form-group">
<label for="password">Password:</label>
  <input type="password" name="password" pattern=".{8,}" required minlength="8" id="password">
  <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> 
  <small style= "color:red;">password must have 8 characters*</small><br>
</div>
<div class="form-group">
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required onkeyup="validate_password()">
    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> 
  
</div>
<span id="wrong_pass_alert"></span><br><br>
 <div class="button-container">
      <input type="submit" value="Signup" class="submit_btn" onclick="wrong_pass_alert()">
    </div>
  
</div>
  </form>
  <script>
   const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<script>
function validate_password() {

      var pass = document.getElementById('password').value;
      var confirm_pass = document.getElementById('confirm_password').value;
      if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML
          = ' Use same password';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML =
          'Password Matched';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
      }
    }

    function wrong_pass_alert() {
      if (document.getElementById('pass').value != "" &&
        document.getElementById('confirm_pass').value != "") {
        alert("Your response is submitted");
      } else {
        alert("Please fill all the fields");
      }
    }
  </script>
</body>
</html>