<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Eggplant Quality Checker</title>
    <style>
        footer {
            background-color: #6CB3FF;
            padding: 10px;
            text-align: center;
            color: white;
            height: 50px;
            margin-top: 380px;
        }
        header {
            background-color: #6CB3FF;
            padding: 30px;
            text-align: none;
            font-size: 35px;
            color: white;
        }
    </style>
</head>
<body>
<header>
  <h2>Eggplant Quality Checker™️</h2>
  <h6>For An Easier Management</h6>
  <a class="btn btn-primary" href="/home.php" role="button">Back to Home</a>
</header>
    <div class="container my-5">
        <h2>List of Eggplants</h2>
        <h5>All eggplants are recorded into the database.</h5>
        <a class="btn btn-primary" href="/create.php" role="button">Incoming Eggplant</a>
        <br>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Color</th>
                    <th>Temperature</th>
                    <th>Size</th>
                    <th>Weight</th>
                    <th>Recorded At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "eggplant";
                
                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connnect_error);
                }

                $sql = "SELECT * FROM quality";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[color]</td>
                        <td>$row[temperature]</td>
                        <td>$row[size]</td>
                        <td>$row[weight]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/edit.php?id=$row[id]'>EDIT</a>
                            <a class='btn btn-danger btn-sm' href='/delete.php?id=$row[id]'>DELETE</a>
                        </td>
                    </tr>
                    ";
                }

                ?>

               
            </tbody>
        </table>
    </div>
<footer>
  <p>CCC151 © 2023-2024</p>
</footer>

</body>
</html>