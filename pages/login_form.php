<?php

require_once '../src/config/conexao.php';
require_once '../includes/header.php';

session_start();

if (isset($_POST['submit'])) {

   $email = ($_POST['usermail']);
   $pass = md5($_POST['password']);

   $statement = $conn->query("SELECT * FROM user_form WHERE email = '$email' && password = '$pass'");
   $select = $statement->fetchAll(PDO::FETCH_ASSOC);
   $statement->execute();

   $count = $statement->rowCount();

   if ($count > 0) {
      $_SESSION['usermail'] = $email;
      header('location:welcome.php');
   } else {
      $error[] = 'e-mail ou senha incorretos.';
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
            echo '<span class="alerta error">' . $error . '</span>';
         }
      }
      ?>

      <input type="email" name="usermail" placeholder="digite o seu e-mail cadastrado" class="box" required>

      <input type="password" name="password" placeholder="digite a sua senha" class="box" required>

      <input type="submit" value="acessar" class="form-btn" name="submit">

      <p>ainda não criou a sua conta? <a href="register_form.php">se inscreva agora</a></p>

   </form>

</div>

<?php require_once '../includes/footer.php';
