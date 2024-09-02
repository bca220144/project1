<html>
<head>
    <title>MANAGE STAFF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <nav>
        <h1>MANAGE STAFF</h1>
    </nav>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "project");
    if (!$conn) {
        echo "Database not connected";
    }

    $sql = "SELECT * FROM `staff`";
    $data = mysqli_query($conn, $sql);

    if (mysqli_num_rows($data) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone Number</th>";
        echo "<th>User ID</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>";
            echo "<td>" . $row['staff_name'] . "</td>";
            echo "<td>" . $row['staff_email'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['staff_id'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No staff records found.</p>";
    }
    ?>
</body>
</html>
