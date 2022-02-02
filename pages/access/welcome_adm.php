<?php

require_once '../../includes/header.php';
require_once '../../src/config/conexao.php';

session_start();

if (!isset($_SESSION['niveis_acesso'])) {
   header('location:../login_form.php');
}

?>


<div class="container">
   <div class="content">
      <h3>Welcome!</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maxime necessitatibus itaque sit adipisci odit debitis temporibus aliquid nisi totam.</p>
      <p>Sua inscrição : <span><?= $_SESSION['niveis_acesso']; ?></span></p>
      <a href="logout.php" class="logout">logout</a>
   </div>
</div>

<?php require_once '../../includes/footer.php'; ?>