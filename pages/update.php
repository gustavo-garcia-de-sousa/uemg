<?php
// Include config file
require_once "config.php";

$usuario = $email = $niveis_acesso = "";
$usuario_err = $email_err = $niveis_acesso_err = "";

// Processing form data when form is submitted
if (isset($_POST["id_usuario"]) && !empty($_POST["id_usuario"])) {
    // Get hidden input value
    $id_usuario = $_POST["id_usuario"];

    // Validate name
    $input_usuario = trim($_POST["usuario"]);
    if (empty($input_usuario)) {
        $usuario_err = "Please enter a name.";
    } elseif (!filter_var($input_usuario, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $usuario_err = "Please enter a valid name.";
    } else {
        $usuario = $input_usuario;
    }

    // Validate address address
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter an address.";
    } else {
        $email = $input_email;
    }

    // Validate niveis_acesso 
    $input_niveis_acesso = trim($_POST["niveis_acesso"]);
    if (empty($input_niveis_acesso)) {
        $niveis_acesso_err = "Please enter the niveis_acesso  amount.";
    } elseif (!ctype_digit($input_niveis_acesso)) {
        $niveis_acesso_err = "Please enter a positive integer value.";
    } else {
        $niveis_acesso = $input_niveis_acesso;
    }

    // Check input errors before inserting in database
    if (empty($usuario_err) && empty($email_err) && empty($niveis_acesso_err)) {

        if ($statement = $conn->prepare("UPDATE usuarios SET usuario = :usuario, email = :email, niveis_acesso = :niveis_acesso WHERE id_usuario = ?")) {

            $statement->bindValue(':usuario', $usuario);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':niveis_acesso', $niveis_acesso);
            $statement->bindValue('?', $id_usuario);


            if ($statement->execute()) {

                header("location: index.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

    session_destroy();
} else {

    if (isset($_GET["id_usuario"]) && !empty(trim($_GET["id_usuario"]))) {

        $id_usuario =  trim($_GET["id_usuario"]);

        if ($statement = $conn->prepare("SELECT * FROM usuarios WHERE id_usuario = ?")) {

            $statement->bindValue('?', $id_usuario);


            if ($statement->execute()) {

                if ($statement->rowCount()  == 1) {

                    $select = $statement->fetch(PDO::FETCH_ASSOC);


                    $usuario = $select["usuario"];
                    $email = $select["email"];
                    $niveis_acesso = $select["niveis_acesso"];
                } else {
     
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }


    } else {

        header("location: error.php");
        exit();
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
                            <label>email</label>
                            <textarea name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"><?php echo $email; ?></textarea>
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>niveis_acesso </label>
                            <input type="text" name="niveis_acesso" class="form-control <?php echo (!empty($niveis_acesso_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $niveis_acesso; ?>">
                            <span class="invalid-feedback"><?php echo $niveis_acesso_err; ?></span>
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