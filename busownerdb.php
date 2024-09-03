<?php 
    include('connect.php');
    $uname = $password = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname = $_POST['vnumber'];
        $password = $_POST['password'];

        $sql = "SELECT vehiclenumber, password FROM busowner_register WHERE vehiclenumber = ? AND password = ? ";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $uname, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            header('Location: busdash.php');
            setcookie("name", $uname, time() + 3600, "/");
            exit();
        } else {
            echo "Invalid email or password";
        }

        $stmt->close();
        $result->close();
    } 
?>
