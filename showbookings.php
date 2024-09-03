<?php include('navbar.php'); ?>
<?php 
    include('connect.php');

    $sql = "SELECT * FROM ticket";
    $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TOTAL BOOKINGS</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>TOTAL BOOKINGS</h1>
        <table class="table table-striped table-bordered table-responsive">
            <thead>
                <tr>
                    <th>FROM</th>
                    <th>TO</th>
                    <th>DATE</th>
                    <th>NUMBER OF PASSENGERS</th>
                </tr>
            </thead>
            <tbody>
            <?php 
    include('connect.php');

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['fromp'] . '</td>';
        echo '<td>' . $row['top'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '<td>' . $row['noofpass'] . '</td>';
    
        echo '</tr>';
    }
    ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Include jQuery (required for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include DataTables plugin for advanced table features -->
    <link href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable on your table
            $('.table').DataTable({
                // Add additional options and configurations here
            });
        });
    </script>
</body>
</html>
