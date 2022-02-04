<?php

require_once '_header.php';
require_once '../src/config/conexao.php';

session_start();

if (!isset($_SESSION['niveis_acesso'])) {
   header('location:login_form.php');
}

?>

<section></section>

<div style="padding: 1rem 2rem;"></div>

<div class="container">
   <div class="content">
      <h3>Seja Bem Vindo!</h3>
      <p>Ainda estamos construindo este site.</p>
      <p>Seu acesso : <span><?php if ($_SESSION['niveis_acesso'] == 1) {
                                 echo 'Administrador';
                              } else {
                                 echo 'Sócio';
                              }; ?></span></p>

   </div>
</div>

<?php require_once '../includes/footer.php'; ?>