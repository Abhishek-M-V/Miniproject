<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body 
     .dropdown {
      background-image: linear-gradient(to bottom right, #e2e2e2, #ffffff);
      background-color: rgba(0, 0, 0, 0);
      max-width: 400px;
      margin:  auto;
      padding: 25px;
      border: 2px solid #ccc;
      border-radius: 25px;
    }
</style>
</head>
<body>
<div class="dropdown">
    <select onchange="location = this.value;">
      <option value="" disabled selected>Select User</option>
      <option value="signup.php">PASSENGER</option>
      <option value="signup2.php">BUS OWNER</option>
    </select>
</head>
</html>