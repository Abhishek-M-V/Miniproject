<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <style>
        /* Styles for the navigation bar */
        table, th, td, tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .navbar a {
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Styles for the logout link */
        .logout {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #fff;
            border-radius: 5px;
        }

        .logout:hover {
            background-color: #fff;
            color: #333;
        }

        /* Styles for the dashboard content */
        .content {
            padding: 20px;
        }

        a {
            font-family: monospace;
        }
    </style>
    <body>

        <div class="navbar">
            <div>
                <a href="admindash.php">Home</a>
                <a href="request.php">Requests</a>
                <a href="showbookings.php">Bookings</a>
                <a href="#">Settings</a>
            </div>
        <?php 
            if (isset($_COOKIE['adminname'])) {
                $admin = $_COOKIE['adminname'];
                // Perform actions that a logged-in user can do
                echo '<form method="post" action="index.php" class="logout-form">';
                echo '<input type="submit" name="logout" value="Logout" class="logout">';
                echo '</form>';
            } 
            if (isset($_POST['logout'])) {
                setcookie("adminname", "", time() - 3600, "/");
                header("Location: index.php"); // Redirect to the login page after logout
                exit;
            }
                            
        ?>
        </div>
    </body>