<?php 
include('connect.php');

if (isset($_GET['busname'])) {
    $busname = $conn->real_escape_string($_GET['busname']);
    $sql = "SELECT * FROM busdtls WHERE busname = '$busname'";
    $result= $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;;
            background-image:url("images/image3.jpg");
            background-position: auto;
            margin: 2;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .form-container {
            background-color:transparent;
            border-radius: 5px;
            padding: 80px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            margin: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            width: 90px;
            align-items:center;
        }

        input[type="text"],
        input[type="number"],
    
        select {
            width: 110%;
            padding: 25px;
            border: 1px solid #ccc;
            border-radius: 3px;
            align-content: center;

        }


        select {
            height: 25px;
        }
        .datee{
            background-color: white;
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;


        }

        .submit-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>CONFIRM TICKETS</h2><br>
        <form action="bookingpage.php" method="post">
            <div class="form-group">
                <label for="textbox1">FROM:</label>
                <input type="text" id="textbox1" name="from" value=" <?php echo $row['fromadd'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="textbox2">TO:</label>
                <input type="text" id="textbox2" name="to" value="<?php echo $row['toadd'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="textbox3">Number of Passengers:</label>
                <input type="number" id="textbox3" name="number" required>
            </div>
            <div class="datee">
                <label for="textbox4">DATE:</label>
                <input type="date" id="textbox4" name="date" required>
            </div>
            <br><br>

           
            <button type="submit" class="submit-button" name="submit">Submit</button>
            <p style="color:red;">*KINDLY TAKE THE SCREENSHOT OF THE OTP</p>

        </form>
        <?php
        $otp = rand(1000, 9999); 
        if (isset($_POST['submit'])) {
            
            $number = $_POST['number'];

        
            $getTotalSeatsSQL = "SELECT seats FROM busdtls";
            $result = $conn->query($getTotalSeatsSQL);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $totalSeatsAvailable = $row['seats'];

            
                $updatedTotalSeats = $totalSeatsAvailable - $number;

                
                $updateTotalSeatsSQL = "UPDATE busdtls SET seats = $updatedTotalSeats";
                if ($conn->query($updateTotalSeatsSQL) === TRUE) {
                    
                    $from = $_POST['from'];
                    $to = $_POST['to'];
                    $formattedDob = date('Y-m-d H:i:s', strtotime($_POST['date']));

                    $insertTicketSQL = "INSERT INTO ticket (fromp, top, date, noofpass) VALUES (?, ?, ?, ?)";
                    if ($stmt = $conn->prepare($insertTicketSQL)) {
                        
                        $stmt->bind_param("sssi", $from, $to, $formattedDob, $number);

                        if ($stmt->execute() === TRUE) {
                            echo '<script>alert("SUCCESSFULLY BOOKED.Your one-time password (OTP) is: ' . $otp . '");</script>';
                            echo '<script>window.location = "index.php";</script>';
                            exit();
                        } else {
                            echo '<script>alert("Error adding your ticket: ' . $stmt->error . '");</script>';
                        }

                    } else {
                        echo '<script> alert("Prepare statement failed: ' . $conn->error . '"); </script>';
                    }
                } 
                }
            } else 
                
            
        ?>

    </div>
</body>
</html>