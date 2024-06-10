<!DOCTYPE html>
<html>
<head>
    <title>Ranjit Swain | Docker Class</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f5f5f5;
            padding-top: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1, h3 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            margin-top: 20px;
        }
        thead {
            background-color: #34495e;
            color: #ecf0f1;
        }
        tbody tr:hover {
            background-color: #ecf0f1;
        }
    </style>
</head>
<body>
    <div class="container">
       
        <?php
        $conn = mysqli_connect('db', 'root', '12345', "myDb");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query = 'SELECT * FROM Student';
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo '<table class="table table-striped table-bordered">';
            echo '<thead><tr><th></th><th>Rollno</th><th>Name</th></tr></thead>';
            echo '<tbody>';
            while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
                echo '<tr>';
                echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
                foreach ($value as $element) {
                    echo '<td>' . htmlspecialchars($element) . '</td>';
                }
                echo '</tr>';
            }
            echo '</tbody></table>';
            $result->close();
        } else {
            echo "<p class='text-danger'>Error: " . mysqli_error($conn) . "</p>";
        }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
