<?php

require_once '../src/config/conexao.php';
require_once '../includes/header.php';

session_start();

if (isset($_POST['submit'])) {

   $niveis_acesso = $_POST['niveis_acesso'];
   $email = $_POST['email'];
   $senha = md5(md5($_POST['senha']));

   $statement = $conn->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' AND niveis_acesso = '$niveis_acesso'");
   $select = $statement->fetchAll(PDO::FETCH_ASSOC);
   $statement->execute();

   if ($statement->rowCount() > 0) {

      $_SESSION['email'] = $email;
      $_SESSION['niveis_acesso'] = $niveis_acesso;

      if ($niveis_acesso == 1) {
         header('location:index.php');
      } else {
         header('location:welcome.php');
      }
   } else {
      $error[] = 'e-mail ou senha incorretos.';
   }
}

?>

<section></section>

<div class="banner">

   <div class="conteudo">
      <br>
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

      <select name="niveis_acesso" class="box" required>
         <option value="0" selected>Associado</option>
         <option value="1">Administrador</option>
      </select>

      <input type="email" name="email" placeholder="digite o seu e-mail cadastrado" class="box" required>

      <input type="password" name="senha" placeholder="digite a sua senha" class="box" required>

      <input type="submit" value="acessar" class="form-btn" name="submit">

      <p>ainda não criou a sua conta? <a href="register_form.php">cadastre-se agora</a></p>

   </form>

</div>

<?php require_once '../includes/footer.php';
