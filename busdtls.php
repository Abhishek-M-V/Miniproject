<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS for styling the form */
    body {
      font-family: Arial, sans-serif;
      background-image:url("bgsamp1.jpg");
      background-position: center;
    }
    
    .form-container {
      color: white;
      max-width: 400px;
      margin: 0 auto;
      padding: 10px;
      border: 2px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .form-group {
      margin-bottom: 20px;
      max-width: 500px;
      color: white;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      max-width: 500px;
      font-weight: bold;
    }
    
    input[type="text"]
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    select {
      height: 40px;
    }
    /* Apply styles to the label */
    label {
    font-size: 16px;
    margin-right: 1px;
    padding: 1px,30px;

   
   }

/* Style the time input box */
input[type="time"] {
    padding:1px,50px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 1px;
    
} 
 .form-group-one{
  display: flex;

 }
 .input1{
  width: 100%;
  height: 1.5rem;
 }



    
    button[type="submit"] {
      
      background-color: #007bff;
      color: #fff;
      width: 30%;
      border: none;
      padding: 20px,30px;
      border-radius: 3px;
      cursor: pointer;
    }
    
    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2 align="center"><u>ADD ROUTE DETAILS</u></h2>
    <form action="busdtlsdb.php" method="POST" >
      <div class="form-group">
        <label for="bname">Bus Name:</label>

        <input type="text" id="bname" name="bname" class="input1">
      </div>
      <div class="form-group">
        <label for="bnum">Bus Number:</label>
        <input type="text" id="bnum" name="bnum"  class="input1">
      </div>
      <h3>SERVICE DETAILS</h3>
      <div class="form-group">
        <label for="from">From:</label>
        <input type="text" id="from" name="fromadd" class="input1">
      </div>
      <div class="form-group">
        <label for="to">To:</label>
        <input type="text" id="to" name="toadd" class="input1">
      </div>
      <div class="form-group">
        <label for="seats">Number of Seats Available:</label>
        <input type="number" id="seats" name="seats" class="input1">
      </div>

      <div class="form-group-one">
        <label for="dtime">Departure Time:</label>
        <input type="time" id="dtime" name="dtime" step="1">&nbsp&nbsp
        <label for="time-input">Arrival Time:</label>
        <input type="time" id="time-input" name="atime" step="1">
      </div>
      
      <div class="form-group">
        <label for="dropdown">BusType:</label>
        <select id="dropdown" name="dropdown">
          <option value="option1">Ordinary</option>
          <option value="option2">Fast Passenger</option>
          <option value="option3">Sleeper</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>