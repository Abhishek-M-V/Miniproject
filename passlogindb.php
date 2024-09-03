<?php 
    include('connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pname = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT name, password FROM passenger_register WHERE name = ? AND password = ? ";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $pname, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            setcookie("name", $pname, time() + 3600, "/");
            header('Location: index.php');
            exit();
        } else {
            echo "Invalid email or password";
        }

        $stmt->close();
        $result->close();
    } 
?>
