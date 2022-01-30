<?php

include('function.php');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="library/jstable.css" />

    <script src="library/jstable.min.js" type="text/javascript"></script>

    <title>Vanilla DataTables CRUD Application - Update or Edit Mysql Table Data - 3</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5 mb-5 text-center text-danger"><b>Vanilla DataTables CRUD Application - Delete or Remove Mysql Table Data - 4</b></h1>

        <span id="success_message"></span>
        <div class="card">

            <div class="card-header">
                <div class="row">

                    <div class="col col-md-6">Customer Data</div>
                    <div class="col col-md-6" align="right">
                        <button type="button" name="add_data" id="add_data" class="btn btn-success btn-sm">Add</button>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="customer_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Senha</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo fetch_top_five_data($connect); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<div class="modal" id="customer_modal" tabindex="-1">
    <form method="post" id="customer_form">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="modal_title">Add Customer</h5>

                    <button type="button" class="btn-close" id="close_modal" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" />
                        <span class="text-danger" id="usuario_error"></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" />
                        <span class="text-danger" id="email_error"></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" />
                        <span class="text-danger" id="senha_error"></span>
                    </div>

                </div>

                <div class="modal-footer">

                    <input type="hidden" name="id_usuarios" id="id_usuarios" />
                    <input type="hidden" name="action" id="action" value="Add" />
                    <button type="button" class="btn btn-primary" id="action_button">Add</button>
                </div>

            </div>

        </div>

    </form>

</div>

<div class="modal-backdrop fade show" id="modal_backdrop" style="display:none;"></div>

<script>
    var table = new JSTable("#customer_table", {
        serverSide: true,
        deferLoading: <?php echo count_all_data($connect); ?>,
        ajax: "fetch.php"
    });

    function _(element) {
        return document.getElementById(element);
    }

    function open_modal() {
        _('modal_backdrop').style.display = 'block';
        _('customer_modal').style.display = 'block';
        _('customer_modal').classList.add('show');
    }

    function close_modal() {
        _('modal_backdrop').style.display = 'none';
        _('customer_modal').style.display = 'none';
        _('customer_modal').classList.remove('show');
    }

    function reset_data() {
        _('customer_form').reset();
        _('action').value = 'Add';
        _('usuario_error').innerHTML = '';
        _('email_error').innerHTML = '';
        _('modal_title').innerHTML = 'Add Data';
        _('action_button').innerHTML = 'Add';
    }

    _('add_data').onclick = function() {
        open_modal();
        reset_data();
    }

    _('close_modal').onclick = function() {
        close_modal();
    }

    _('action_button').onclick = function() {

        var form_data = new FormData(_('customer_form'));

        _('action_button').disabled = true;

        fetch('action.php', {

            method: "POST",

            body: form_data

        }).then(function(response) {

            return response.json();

        }).then(function(responseData) {

            _('action_button').disabled = false;

            if (responseData.success) {
                _('success_message').innerHTML = responseData.success;

                close_modal();

                table.update();
            } else {
                if (responseData.usuario_error) {
                    _('usuario_error').innerHTML = responseData.usuario_error;
                } else {
                    _('usuario_error').innerHTML = '';
                }

                if (responseData.email_error) {
                    _('email_error').innerHTML = responseData.email_error;
                } else {
                    _('email_error').innerHTML = '';
                }
            }

        });

    }

    function fetch_data(id_usuarios) {
        var form_data = new FormData();

        form_data.append('id_usuarios', id_usuarios);

        form_data.append('action', 'fetch');

        fetch('action.php', {

            method: "POST",

            body: form_data

        }).then(function(response) {

            return response.json();

        }).then(function(responseData) {

            _('usuario').value = responseData.usuario;

            _('email').value = responseData.email;

            _('senha').value = responseData.senha;

            _('id_usuarios').value = id_usuarios;

            _('action').value = 'Update';

            _('modal_title').innerHTML = 'Edit Data';

            _('action_button').innerHTML = 'Edit';

            open_modal();

        });
    }

    function delete_data(id_usuarios) {
        if (confirm("Are you sure you want to remove it?")) {
            var form_data = new FormData();

            form_data.append('id_usuarios', id_usuarios);

            form_data.append('action', 'delete');

            fetch('action.php', {

                method: "POST",

                body: form_data

            }).then(function(response) {

                return response.json();

            }).then(function(responseData) {

                _('success_message').innerHTML = responseData.success;

                table.update();

            });
        }
    }
</script>