<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT adminname,password FROM adminlogin WHERE adminname = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error in SQL query: ' . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ss", $user, $password);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $a_id = $row['adminname'];

        // Set a cookie for the a_id
        setcookie("adminname", $a_id, time() + 3600, "/");

        // Redirect to the admin dashboard
        header('Location: admindash.php');
        exit();
    } else {
       echo "<script>alert('Invalid Username or Password');</script>";

    }

    $stmt->close();
    $result->close();
}
?>