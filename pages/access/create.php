<?php

require_once '../../src/config/conexao.php';

$usuario = $senha = $niveis_usuario = "";
$usuario_err = $senha_err = $senha_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate usuario
    $input_usuario = trim($_POST["usuario"]);
    if (empty($input_usuario)) {
        $usuario_err = "Please enter a usuario.";
    } elseif (!filter_var($input_usuario, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $usuario_err = "Please enter a valid usuario.";
    } else {
        $usuario = $input_usuario;
    }

    $input_senha = trim($_POST["senha"]);
    if (empty($input_senha)) {
        $senha_err = "Please enter an senha.";
    } else {
        $senha = $input_senha;
    }

    $input_nivel_usuario = trim($_POST["nivel_usuario"]);

    if (empty($input_nivel_usuario)) {

        $senha_err = "Please enter the nivel_usuario amount.";
    } elseif (!ctype_digit($input_nivel_usuario)) {

        $senha_err = "Please enter a positive integer value.";
    } else {

        $senha = $input_nivel_usuario;
    }


    if (empty($usuario_err) && empty($senha_err) && empty($senha_err)) {

        if ($statement = $conn->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:usuario, :email, :senha);")) {

            $statement->bindValue(':usuario', $usuario);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':senha', $senha);

            $param_usuario = $usuario;
            $param_senha = $senha;
            $param_email = $email;

            if ($statement->execute()) {

                header("location: index.php");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="usuario" class="form-control <?php echo (!empty($usuario_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $usuario; ?>">
                            <span class="invalid-feedback"><?php echo $usuario_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"><?php echo $senha; ?></textarea>
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="senha" class="form-control <?php echo (!empty($senha_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $senha; ?>">
                            <span class="invalid-feedback"><?php echo $senha_err; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>