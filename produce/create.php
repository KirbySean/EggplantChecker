<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eggplant";

$connection = new mysqli($servername, $username, $password, $database);

$color = "";
$temperature = "";
$size = "";
$weight = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = $_POST["color"];
    $temperature = $_POST["temperature"];
    $size = $_POST["size"];
    $weight = $_POST["weight"];

    do {
        if (empty($color) || empty($temperature) || empty($size) || empty($weight)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql= "INSERT INTO quality (color, temperature, size, weight)" . 
              "VALUES ('$color','$temperature','$size','$weight')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query:" . $connection->error;
            break;
        }

        $color = "";
        $temperature = "";
        $size = "";
        $weight = "";

        $successMessage = "Produce added successfully";

        header("location:/index.php");
        exit;

    } while (false);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Eggplant Quality Checker</title>
    <style>
        footer {
            background-color: #6CB3FF;
            padding: 10px;
            text-align: center;
            color: white;
            height: 130px;
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
</header>
    <div class="container my-5">
        <h2>New Eggplant</h2>
        <h6>NOTE: All fields must be entered!</h6>
        <br>
        <?php
        if ( !empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Color</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="color" value="<?php echo $color; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Temperature</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="temperature" value="<?php echo $temperature; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Size</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="size" value="<?php echo $size; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Weight</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="weight" value="<?php echo $weight; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/index.php" role="button">CANCEL</a>
                </div>
            </div>
        </form>
    </div>
<footer>
  <p>CCC151 © 2023-2024</p>
</footer>
</body>
</html>