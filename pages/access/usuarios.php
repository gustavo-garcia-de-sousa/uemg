<?php require_once '../../src/config/conexao.php'; ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/css/custom.css">

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>
            </div>

            <form action="updatecode.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group">
                        <label> usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Enter First Name">
                    </div>

                    <div class="form-group">
                        <label> email </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label> senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Enter Phone Number">
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>

                </div>
            </form>

        </div>
    </div>
</div>

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <form action="deletecode.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="delete_id" id="delete_id">

                    <h4> Do you want to Delete this Data ??</h4>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                    <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>

                </div>

            </form>

        </div>
    </div>
</div>

<div class="container">





    <div class="card">

        <div class="card-body">

            <?php

            $statement = $conn->query("SELECT * FROM usuarios");
            $select = $statement->fetchAll(PDO::FETCH_ASSOC);
            $statement->execute();

            ?>

            <table class="rTable">
                <thead>
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col"> email </th>
                        <th scope="col"> senha </th>
                        <th scope="col"> EDIT </th>
                        <th scope="col"> DELETE </th>
                    </tr>
                </thead>

                <?php

                if ($statement) {
                    foreach ($statement as $row) {
                ?>
                        <tbody>
                            <tr>
                                <td data-label="ID"> <?php echo $row['id_usuarios']; ?> </td>
                                <td data-label="USUARIO"> <?php echo $row['usuario']; ?> </td>
                                <td data-label="E-MAIL"> <?php echo $row['email']; ?> </td>
                                <td data-label="SENHA"> <?php echo $row['senha']; ?> </td>

                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>

                            </tr>

                        </tbody>
                <?php
                    }
                } else {
                    echo "No Record Found";
                }
                ?>
        </div>

    </div>

</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {

        $('.viewbtn').on('click', function() {
            $('#viewmodal').modal('show');
            $.ajax({ //create an ajax request to display.php
                type: "GET",
                url: "display.php",
                dataType: "html", //expect html to be returned                
                success: function(response) {
                    $("#responsecontainer").html(response);
                    //alert(response);
                }
            });
        });

    });
</script>



<script>
    $(document).ready(function() {

        $('.deletebtn').on('click', function() {

            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

        });
    });
</script>

<!-- responsável pela atualização dos dados -->
<script>
    $(document).ready(function() {

        $('.editbtn').on('click', function() {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#usuario').val(data[1]);
            $('#email').val(data[2]);
        });
    });
</script>
<!-- responsável pela atualização dos dados -->


</body>

</html>