<?php
require_once '../src/config/conexao.php';
require_once '../includes/header.php';

session_start();

if (isset($_POST['submit'])) {

   $email = ($_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $statement = $conn->prepare("INSERT INTO user_form (email, password) VALUES (:usermail, :password);");
   $statement->bindValue(':usermail', $email);
   $statement->bindValue(':password', $pass);
   $count = $statement->rowCount();

   if ($count > 0) {
      $error[] = 'user already exist';
   } else {
      if ($pass != $cpass) {
         $error[] = 'password not mathched!';
      } else {
         $statement->execute();
         header('location:login_form.php');
      }
   }
}

?>

<section></section>

<div class="banner">

   <div class="conteudo">
      <h3>Acesse o portal do Associado</h3>
      <p>Diversos serviços, como: 2º via de boletos, portal transparência, gerenciar sócios e agendamento de horário!</p>
      <br><br><br>
   </div>

</div>

<div class="form-container">

   <form action="" method="post">

      <?php
      if (isset($error)) {
         foreach ($error as $error) {
            echo '<span class="error-msg">' . $error . '</span>';
         }
      }
      ?>

      <input type="email" name="usermail" placeholder="digite o seu melhor em-mail" class="box" required>

      <input type="password" name="password" placeholder="cadastre uma senha" class="box" required>

      <input type="password" name="cpassword" placeholder="confirme sua senha" class="box" required>

      <input type="submit" value="se registrar agora" class="form-btn" name="submit">

      <p>já é sócio do nosso clube? <a href="login_form.php">acesse agora!</a></p>

   </form>

</div>

<?php require_once '../includes/footer.php';
