<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>Data $i-1</td>";
            echo "<td>Data $i-2</td>";
            echo "<td>Data $i-3</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
