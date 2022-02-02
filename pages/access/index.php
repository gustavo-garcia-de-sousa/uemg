<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 90%;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="mt-5 mb-3 clearfix">

                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
                   
                    </div>

                    <?php

                    require_once '../../src/config/conexao.php';

                    $statement = $conn->query("SELECT * FROM usuarios");               

                    if ($statement->execute()) {

                        if ($statement->rowCount() > 0) {

                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>NOME</th>";
                            echo "<th>E-MAIL</th>";
                            echo "<th>SENHA</th>";
                            echo "<th>AÇÔES</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

                                echo "<tr>";
                                echo "<td>" . $row['id_usuario'] . "</td>";
                                echo "<td>" . $row['usuario'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['senha'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id_usuario=' . $row['id_usuario'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id_usuario=' . $row['id_usuario'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id_usuario=' . $row['id_usuario'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";

                        } else {

                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {

                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>