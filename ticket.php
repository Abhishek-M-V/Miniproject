<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>
    <style>
        /* Basic styling for the ticket booking form */
        .card {
            text-align: center;
            width: 45%;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-top: 20px;
        }

        /* Title styling */
        .card-title {
            font-size: 40px;
            font-family: monospace;
            text-decoration: underline;
            font-weight: bold;
        }

        /* Place styling */
        .places {
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Time styling */
        .time {
            font-size: 14px;
            color: #666;
        }
        /* Basic styling for the ticket booking form */
        body {
            font-family: Arial, sans-serif;
            background-image:url("images/image3.jpg");
             background-position: auto;
        }

        .container {
             width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 2px solid #ccc;
      border-radius: 15px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      background-image: url("wt1.png");
      background-repeat: repeat;
      color: white;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            color: black;
        }

        label {
            color: white;
            font-weight: bold;
            margin-bottom: 5px;
            color: black;
        }

        input[type="text"],
        input[type="text"],
        input[type="date"],
        input[type="number"],
        select {
            padding: 10px;
            margin-bottom: 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
     .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Blue color for the button */
            color: #fff; /* White text color */
            text-decoration: none; /* Remove underlines from the link */
            text-align: center;
            border: none; /* Remove border */
            border-radius: 5px; /* Add rounded corners */
            cursor: pointer;
        }

        .button2 {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Blue color for the button */
            color: #fff; /* White text color */
            text-decoration: none; /* Remove underlines from the link */
            text-align: center;
            border: none; /* Remove border */
            border-radius: 5px; /* Add rounded corners */
            cursor: pointer;
        }
        
        a {
            font-family: monospace;
            font-size: 20px;
            color: black;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .smallbox {
            border: 2px solid black;
            position: relative;
            width: ;
            background: lightblue;
            cursor: pointer;
        }

        .smallbox:hover {
            background: none;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1><u>Book Your Ticket</u></h1><br/>
        <form action="ticket.php" method="POST">
            <label for="from">FROM</label>
            <input type="text" id="from" name="from" required>

            <label for="to">TO</label>
            <input type="text" id="to" name="to" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
            <br>
            <input type="submit" name="submit" class="button2" value="search details">
            </br>
        </form>
    </div>

        <?php 
            include('connect.php');
            if (isset($_POST['submit'])) {
                $to  = $_POST['to'];
                $from = $_POST['from'];

                $sql = "SELECT * FROM busdtls WHERE `fromadd` = ? AND `toadd` = ?";

                $stmt = $conn->prepare($sql);

                if (!$stmt) {
                    die("Error in prepare: " . $conn->error);
                }
                $stmt->bind_param("ss", $from, $to);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<div class="card-title" style="text-align: center;">' . $row['busname'] . '</div>';
                    echo '<div class="places">';
                    echo '<p>From: '.$row['fromadd'].'</p>';
                    echo '<p>To: '.$row['toadd'].'</p>';
                    echo '</div>';
                    echo '<div class="time">Departure time : '. $row['departuretime'].'</div>' . '<br>';
                    echo '<div class="time">Arrival time:'. $row['arrivaltime'] . '</div>';
                    echo '<p>Remaning seats: ' . $row['seats'] . '</p>';
                    if (isset($_COOKIE['name'])) {
                        echo '<div class="smallbox">';
                        echo '<a style="text-align:center;" href="bookingpage.php?busname=' . urlencode($row["busname"]).'">Book Now</a>';
                        echo '</div>';
                    } else {
                        echo '<div class="smallbox">';
                        echo '<a style="text-align: left;" href="login2.php"> Book Now </a>';
                        echo '</div>';
                    }
                    echo '</div>';
                }

                $conn->close();
                $stmt->close();

            }
        ?>
</body>
</html>
