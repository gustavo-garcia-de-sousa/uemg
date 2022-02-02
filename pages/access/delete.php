<?php

if (isset($_POST["id_usuario"]) && !empty($_POST["id_usuario"])) {

    require_once '../../src/config/conexao.php';

    if ($statement = $conn->prepare("DELETE FROM usuarios WHERE id_usuario = :id_usuario")) {

        $statement->bindValue(':id_usuario', $param_id_usuario);

        $param_id_usuario = trim($_POST["id_usuario"]);

        if ($statement->execute()) {

            header("location: index.php");exit();
        } else {

            echo "Oops! Something went wrong. Please try again later.";
        }
    }
} else {

    if (empty(trim($_GET["id_usuario"]))) {

        header("location: error.php");exit();

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
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
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id_usuario" value="<?php echo trim($_GET["id_usuario"]); ?>" />
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>