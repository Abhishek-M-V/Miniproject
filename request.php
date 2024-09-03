<?php 
include('navbar.php');

include('connect.php');

if (isset($_POST['accept'])) {
    $num = $_POST['vehiclenumber'];
    $sql = "UPDATE busowner_register SET status = 'verified' WHERE vehiclenumber = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $num);
    $stmt->execute();
} elseif (isset($_POST['reject'])) {
    $num = $_POST['vehiclenumber'];
    $sql = "UPDATE busowner_register SET status = 'rejected' WHERE vehiclenumber = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $num);
    $stmt->execute();
} else {
    echo $conn->error;
}

$sql = "SELECT * FROM busowner_register";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            background-color: #f9f9f9;
            text-align: center;
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin: 10px 0;
        }

        .card h2 {
            font-size: 1.5rem;
        }

        .card p {
            font-size: 1rem;
            margin: 10px 0;
        }

        .buttons {
            display: flex;
            justify-content: space-around;
        }

        .accept-button, .reject-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .accept-button:hover {
            background-color: #45a049;
        }

        .reject-button {
            background-color: #f44336;
        }

        .reject-button:hover {
            background-color: #e53931;
        }
    </style>
</head>
<body>
        <?php 
            while ($row = $result->fetch_assoc()) {
                if ($row['status'] == 'unverified') {
                    echo '<form method="post" action="request.php">';
                    echo '<div class="card" style="margin-top: 20px;">';
                    echo '<img src="your-image.jpg" alt="Your Image">';
                    echo '<h2>'.$row['vehiclename'].'</h2>';
                    echo '<p>'.$row['name'].'</p>';
                    echo '<p>'.$row['address'].'</p>';
                    echo '<p>'.$row['phonenumber'].'</p>';
                    echo '<p>'.$row['emailid'].'</p>';
                    echo '<p>'.$row['vehiclenumber'].'</p>';
                    echo '<div class="buttons">';
                    echo '<input type="hidden" name="vehiclenumber" value="'.$row['vehiclenumber'].'">';
                    echo '<button class="accept-button" name="accept" type="submit">Accept</button>';
                    echo '<button class="reject-button" name="reject" type="submit">Reject</button>';
                    echo '</div>'; 
                    echo '</div>';
                    echo '</form>';
                }
            }
        ?>

        <?php 
        
            include('connect.php');
            if (isset($_POST['accept'])) {
                $sql = "UPDATE busowner_register SET status = 'verified' WHERE vehiclenumber = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $num);
                $stmt->execute();
            } else {
                echo $conn->error;
            }

        ?>
</body>
</html>

