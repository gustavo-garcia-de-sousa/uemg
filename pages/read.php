<?php
// Check existence of id parameter before processing further
if (isset($_GET["id_usuario"]) && !empty(trim($_GET["id_usuario"]))) {

    require_once '../src/config/conexao.php';

    if ($statement = $conn->prepare("SELECT * FROM usuarios WHERE id_usuario = :id_usuario")) {
        $statement->bindValue(':id_usuario', $id_usuario);


        // Set parameters
        $param_id = trim($_GET["id_usuario"]);

        // Attempt to execute the prepared statement
        if ($statement->execute()) {
            

            if ($statement->rowCount() == 1) {

                $select = $statement->fetch(PDO::FETCH_ASSOC);

                $usuario = $select["usuario"];
                $email = $select['email'];
                $niveis_acesso = $select["niveis_acesso"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }


} else {
    // URL doesn't contain id parameter. Redirect to error page
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
                        <label>Usuario</label>
                        <p><b><?php echo $select['usuario']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p><b><?php echo $select['email']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Nivel de Acesso</label>
                        <p><b><?php echo $select["niveis_acesso"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>