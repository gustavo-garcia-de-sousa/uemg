<?php
// Check existence of id parameter before processing further
if (isset($_POST["id_usuario"]) && !empty(trim($_POST["id_usuario"]))) {

    require_once '../../src/config/conexao.php';

    if ($statement = $conn->prepare("SELECT * FROM usuarios WHERE id_usuario = ?")) {
        $statement->bindValue('?', $param_id_usuario);

        $param_id_usuario = trim($_POST["id_usuario"]);

        if ($statement->execute()) {

            if ($statement->rowCount() == 1) {

                $row = $statement->fetchAll(PDO::FETCH_ASSOC);

                $usuario = $row["usuario"];
                $email = $row["email"];
                $senha = $row["senha"];
            } else {

                header("location: error.php");
                exit();
            }
        } else {

            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    session_destroy();
} else {

    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row["usuario"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p><b><?php echo $row["email"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p><b><?php echo $row["senha"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>