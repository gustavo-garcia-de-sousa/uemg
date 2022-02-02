<?php

require_once '../../src/config/conexao.php';

$usuario = $email = $senha = "";
$usuario_err = $email_err = $senha_err = "";

if (isset($_POST["id_usuario"]) && !empty($_POST["id_usuario"])) {

    $id_usuario = $_POST["id_usuario"];

    $input_usuario = trim($_POST["usuario"]);

    if (empty($input_usuario)) {

        $usuario_err = "Please enter a usuario.";
    } elseif (!filter_var($input_usuario, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {

        $usuario_err = "Please enter a valid_usuario usuario.";
        
    } else {

        $usuario = $input_usuario;
    }

    $input_email = trim($_POST["email"]);

    if (empty($input_email)) {

        $email_err = "Please enter an email.";
    } else {

        $email = $input_email;
    }

    $input_senha = trim($_POST["senha"]);

    if (empty($input_senha)) {

        $senha_err = "Please enter the senha amount.";
    } elseif (!ctype_digit($input_senha)) {

        $senha_err = "Please enter a positive integer value.";
    } else {

        $senha = $input_senha;
    }


    if (empty($usuario_err) && empty($email_err) && empty($senha_err)) {

        if ($statement = $conn->prepare("UPDATE usuarios SET usuario= :usuario, email=:email, senha=:senha WHERE id_usuario=:id_usuario")) {

            $statement->bindValue(':usuario', $usuario);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':senha', $senha);
            $statement->bindValue(':id_usuario', $id_usuario);

            $param_usuario = $usuario;
            $param_email = $email;
            $param_senha = $senha;
            $param_id_usuario = $id_usuario;

            if ($statement->execute()) {

                header("location: index.php");
            } else {

                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
} else {

    if (isset($_POST["id_usuario"]) && !empty(trim($_POST["id_usuario"]))) {

        $id_usuario =  trim($_POST["id_usuario"]);

        if ($statement = $conn->prepare("SELECT * FROM usuarios WHERE id_usuario = :id_usuario")) {

            $statement->bindValue(':id_usuario', $param_id_usuario);

            $param_id_usuario = $id_usuario;

            if ($statement->execute()) {

                if ($statement->rowCount() == 1) {

                    $row = $statement->fetch(PDO::FETCH_ASSOC);

                    $usuario = $row["usuario"];
                    $email = $row["email"];
                    $senha = $row["senha"];
                } else {

                    header("location: error.php");
                }
            } else {

                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    } else {

        header("location: error.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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

                    <h2 class="mt-5">Update Record</h2>

                    <p>Please edit the input values and submit to update the employee record.</p>

                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">

                        <div class="form-group">

                            <label>Name</label>
                            <input type="text" name="usuario" class="form-control <?php echo (!empty($usuario_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $usuario; ?>">
                            <span class="invalid-feedback"><?php echo $usuario_err; ?></span>

                        </div>

                        <div class="form-group">

                            <label>Address</label>
                            <textarea name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"><?php echo $email; ?></textarea>
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>

                        </div>

                        <div class="form-group">

                            <label>Salary</label>
                            <input type="text" name="senha" class="form-control <?php echo (!empty($senha_err)) ? 'is-invalid_usuario' : ''; ?>" value="<?php echo $senha; ?>">
                            <span class="invalid-feedback"><?php echo $senha_err; ?></span>

                        </div>

                        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>

                    </form>

                </div>

            </div>

        </div>

    </div>
</body>

</html>