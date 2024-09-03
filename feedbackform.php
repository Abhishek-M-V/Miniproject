<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="styles.css"> <!-- External CSS file for styles -->
 <style>
  body{
   background-image:url("images/image3.jpg");
             background-position: auto;
  }
  /* In your CSS file, e.g., styles.css */
h2 {
  color: lightblue;
  text-align: center; /* Change this to the color you want */
}


  .card {
  width: 400px; /* Increase the width */
  height: 200px; /* Increase the height */
  background-color: lightcyan;
  background-position: auto; /* Change the background color */
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-top:auto;
  padding: 10px;
  word-wrap: break-word;
  margin-top: 70px;
}
</style>
</head>
<body>
<div class="login-box">
  <h2><u><b>FEEDBACK</b></u></h2>
  <form method="post" action="feedback.php">
    <div class="user-box">
      
      <input type="text" name="name" required>
      <label>Name</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="address" name="message" required>
      <label>Message</label>
    </div>
    <center>
      <input type="submit" name="submit" value="Send">
      <span></span>
    </center>
  </form>
</div>


<?php 
  include('connect.php');

        $sql = "SELECT * FROM feedbacks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="feedback-list">';
        } else {
          $conn->error;
        }
         while ($row = $result->fetch_assoc()) {

               
                echo '<div class="card" >';
                echo '<div class="card-header" style="text-align: center;"><u>' ."FEEDBACK" . '</u></div>';
                echo '<div class="places">';
                echo' <p>Name: '.$row["name"].'</p>';
                echo '<p>Email: '.$row['email'].'</p>';
                echo '<p>Message: '.$row['message'].'</p>';
                echo '</div>';
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

        }
        echo '</div>';
        $conn->close();
    ?>
</body>
</html>
