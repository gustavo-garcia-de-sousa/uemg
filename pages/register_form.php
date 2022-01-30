<!-- https://www.php.net/manual/pt_BR/pdo.prepare.php -->

<?php

require_once '../src/config/conexao.php';
require_once '../includes/header.php';

session_start();

if (isset($_POST['submit'])) {

   $output = array();
   $usuario = $_POST['usuario'];
   $email = $_POST['email'];
   $senha = md5(md5($_POST['senha']));
   $confirm_senha = md5(md5($_POST['confirm_senha']));

   /*métodos utilizados para evitar SQl INJECTION*/
   $statement = $conn->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:usuario, :email, :senha);");
   $statement->bindValue(':usuario', $usuario);
   $statement->bindValue(':email', $email);
   $statement->bindValue(':senha', $senha);
   /*métodos utilizados para evitar SQl INJECTION*/

   $count = $statement->rowCount();

   if ($count > 0) {

      if (empty($usuario)) {

         $output['usuario_error'] = 'First Name is Required';
      }

      if (empty($email)) {

         $output['email_error'] = 'Email is Required';
      } else {

         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $output['email_error'] = 'Invalid Email Format';
         }
      }

      if ($senha != $confirm_senha) {
         $error[] = 'As senhas não são iguais!';
      } else {

         try {

            $statement->execute();
            header('location:login_form.php');
         } catch (PDOException $error) {
         }
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
            echo '<span class="alerta error">' . $error . '</span>';
         }
      }
      ?>

      <input type="txt" name="usuario" placeholder="digite o seu nome" class="box" required>
      <span class="advertencia"></span>

      <input type="email" name="email" placeholder="digite o seu melhor em-mail" class="box" required>
      <span class="advertencia"></span>

      <input type="password" name="senha" placeholder="cadastre uma senha" class="box" required>
      <span class="advertencia"></span>

      <input type="password" name="confirm_senha" placeholder="confirme sua senha" class="box" required>
      <span class="advertencia"></span>

      <input type="submit" value="se registrar agora" class="form-btn" name="submit">

      <p>já é sócio do nosso clube? <a href="login_form.php">acesse agora!</a></p>

   </form>

</div>

<?php require_once '../includes/footer.php';
