<?php
$message = '';
if (isset($_POST["email"])) {
    sleep(5);
    $query = "
    INSERT INTO tbl_login
    (first_name, last_name, gender, email, password, address, mobile_no) VALUES
    (:first_name, :last_name, :gender, :email, :password, :address, :mobile_no)
    ";
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $user_data = array(
        ':first_name' => $_POST["first_name"],
        ':last_name' => $_POST["last_name"],
        ':gender' => $_POST["gender"],
        ':email' => $_POST["email"],
        ':password' => $password_hash,
        ':address' => $_POST["address"],
        ':mobile_no' => $_POST["mobile_no"]
    );
    $statement = $connect->prepare($query);
    if ($statement->execute($user_data)) {
        $message = '
    <div class="alert alert-success">
        Registration Completed Successfully
    </div>
    ';
    } else {
        $message = '
    <div class="alert alert-success">
        There is an error in Registration
    </div>
    ';
    }
}
?>


    <?php echo $message; ?>

    <form method="post" id="register_form">

        <ul class="nav nav-tabs" style=" background: #282828;">

            <li class="nav-item">
                <a class="nav-link active_tab1" style="font-size: 1.7rem;" id="list_login_details">Dados da Conta</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active_tab1" style="font-size: 1.7rem;" id="list_login_details">Informações Pessoais</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active_tab1" style="font-size: 1.7rem; " id="list_login_details">Informações de Contato</a>
            </li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="login_details">

                <div class="panel panel-default" style="background: #282828;border:solid #282828;">

                    <div class="panel-body">

                        <div class="form-group">

                            <span style="  margin-top: 1rem;font-size: 1.4rem;color: #aaa;">Enter Email Address</span>

                            <input type="text" placeholder="" value="" style="width: 100%;
  padding: 1.2rem 1.4rem;
  border-radius: 5rem;
  border: 0.2rem solid #29d9d5;
  font-size: 1.6rem;
  color: #aaa;
  background: none;
  margin-top: 1rem;" />
                            <span id="error_email" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <span style="  margin-top: 1rem;
  font-size: 1.4rem;
  color: #aaa;">Senha</span>

                            <input type="text" name="email" id="email" class="form-control" style="  width: 100%;
  padding: 1.2rem 1.4rem;
  border-radius: 5rem;
  border: 0.2rem solid #29d9d5;
  font-size: 1.6rem;
  color: #aaa;
  background: none;
  margin-top: 1rem;" />
                            <span id="error_password" class="text-danger"></span>
                        </div>
                        <br />
                        <div align="center">
                            <button type="button" name="btn_login_details" id="btn_login_details" class="btn">Next</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="personal_details">
                <div class="panel panel-default">
                    <div class="panel-heading">Fill Personal Details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <span>Enter First Name</span>
                            <input type="text" placeholder="e-mail cadastrado" value="">
                            <span id="error_first_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <span>Enter Last Name</span>
                            <input type="text" name="last_name" id="last_name" class="form-control" />
                            <span id="error_last_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <span>Gender</span>
                            <span class="radio-inline">
                                <input type="radio" name="gender" value="male" checked> Male
                            </span>
                            <span class="radio-inline">
                                <input type="radio" name="gender" value="female"> Female
                            </span>
                        </div>
                        <br />
                        <div align="center">
                            <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                            <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact_details">
                <div class="panel panel-default">
                    <div class="panel-heading">Fill Contact Details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <span>Enter Address</span>
                            <textarea name="address" id="address" class="form-control"></textarea>
                            <span id="error_address" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <span>Enter Mobile No.</span>
                            <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                            <span id="error_mobile_no" class="text-danger"></span>
                        </div>
                        <br />
                        <div align="center">
                            <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                            <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<script>
    $(document).ready(function() {

        $('#btn_login_details').click(function() {

            var error_email = '';
            var error_password = '';
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if ($.trim($('#email').val()).length == 0) {
                error_email = 'Email is required';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            } else {
                if (!filter.test($('#email').val())) {
                    error_email = 'Invalid Email';
                    $('#error_email').text(error_email);
                    $('#email').addClass('has-error');
                } else {
                    error_email = '';
                    $('#error_email').text(error_email);
                    $('#email').removeClass('has-error');
                }
            }

            if ($.trim($('#password').val()).length == 0) {
                error_password = 'Password is required';
                $('#error_password').text(error_password);
                $('#password').addClass('has-error');
            } else {
                error_password = '';
                $('#error_password').text(error_password);
                $('#password').removeClass('has-error');
            }

            if (error_email != '' || error_password != '') {
                return false;
            } else {
                $('#list_login_details').removeClass('active active_tab1');
                $('#list_login_details').removeAttr('href data-toggle');
                $('#login_details').removeClass('active');
                $('#list_login_details').addClass('inactive_tab1');
                $('#list_personal_details').removeClass('inactive_tab1');
                $('#list_personal_details').addClass('active_tab1 active');
                $('#list_personal_details').attr('href', '#personal_details');
                $('#list_personal_details').attr('data-toggle', 'tab');
                $('#personal_details').addClass('active in');
            }
        });

        $('#previous_btn_personal_details').click(function() {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active in');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_login_details').removeClass('inactive_tab1');
            $('#list_login_details').addClass('active_tab1 active');
            $('#list_login_details').attr('href', '#login_details');
            $('#list_login_details').attr('data-toggle', 'tab');
            $('#login_details').addClass('active in');
        });

        $('#btn_personal_details').click(function() {
            var error_first_name = '';
            var error_last_name = '';

            if ($.trim($('#first_name').val()).length == 0) {
                error_first_name = 'First Name is required';
                $('#error_first_name').text(error_first_name);
                $('#first_name').addClass('has-error');
            } else {
                error_first_name = '';
                $('#error_first_name').text(error_first_name);
                $('#first_name').removeClass('has-error');
            }

            if ($.trim($('#last_name').val()).length == 0) {
                error_last_name = 'Last Name is required';
                $('#error_last_name').text(error_last_name);
                $('#last_name').addClass('has-error');
            } else {
                error_last_name = '';
                $('#error_last_name').text(error_last_name);
                $('#last_name').removeClass('has-error');
            }

            if (error_first_name != '' || error_last_name != '') {
                return false;
            } else {
                $('#list_personal_details').removeClass('active active_tab1');
                $('#list_personal_details').removeAttr('href data-toggle');
                $('#personal_details').removeClass('active');
                $('#list_personal_details').addClass('inactive_tab1');
                $('#list_contact_details').removeClass('inactive_tab1');
                $('#list_contact_details').addClass('active_tab1 active');
                $('#list_contact_details').attr('href', '#contact_details');
                $('#list_contact_details').attr('data-toggle', 'tab');
                $('#contact_details').addClass('active in');
            }
        });

        $('#previous_btn_contact_details').click(function() {
            $('#list_contact_details').removeClass('active active_tab1');
            $('#list_contact_details').removeAttr('href data-toggle');
            $('#contact_details').removeClass('active in');
            $('#list_contact_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        });

        $('#btn_contact_details').click(function() {
            var error_address = '';
            var error_mobile_no = '';
            var mobile_validation = /^\d{10}$/;
            if ($.trim($('#address').val()).length == 0) {
                error_address = 'Address is required';
                $('#error_address').text(error_address);
                $('#address').addClass('has-error');
            } else {
                error_address = '';
                $('#error_address').text(error_address);
                $('#address').removeClass('has-error');
            }

            if ($.trim($('#mobile_no').val()).length == 0) {
                error_mobile_no = 'Mobile Number is required';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            } else {
                if (!mobile_validation.test($('#mobile_no').val())) {
                    error_mobile_no = 'Invalid Mobile Number';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').addClass('has-error');
                } else {
                    error_mobile_no = '';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').removeClass('has-error');
                }
            }
            if (error_address != '' || error_mobile_no != '') {
                return false;
            } else {
                $('#btn_contact_details').attr("disabled", "disabled");
                $(document).css('cursor', 'prgress');
                $("#register_form").submit();
            }

        });

    });
</script>
<?php require_once '../includes/footer.php'; ?>