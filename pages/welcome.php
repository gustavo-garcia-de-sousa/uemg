<?php

require_once '../includes/header.php';
require_once '../src/config/conexao.php';

session_start();

if (!isset($_SESSION['usermail'])) {
   header('location:login_form.php');
}

?>

<section></section>

<div class="container">
   <div class="content">
      <h3>Welcome!</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maxime necessitatibus itaque sit adipisci odit debitis temporibus aliquid nisi totam.</p>
      <p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>
      <a href="user/logout.php" class="logout">logout</a>
   </div>
</div>

<?php require_once '../includes/footer.php'; ?>