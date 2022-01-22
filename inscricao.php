<?php require_once 'includes/header.php'; ?>

<!-- apresentacao section starts  -->
<section></section>

<div class="banner">

    <div class="conteudo">
        <h3>Descubra o melhor para você!</h3>
        <span>Vamos encontrar o seu perfil.</span>
        <br><br><br><br>
    </div>

</div>
<!-- apresentacao section ends -->

<!-- usuario form section starts  -->
<section class="usuario-form" id="usuario-form">

    <form data-aos="zoom-in" data-aos-delay="150" action="">
        <div class="inputBox">
            <span>Qual o seu nome?</span>
            <input type="text" placeholder="escreva o seu primeiro nome" value="" required>
        </div>
        <div class="inputBox">
            <span>Será para quantas pessoas?</span>
            <input type="number" placeholder="número de beneficiários" value="" required>
        </div>
        <div class="inputBox">
            <span>Sua Data de Nascimento</span>
            <input type="date" value="" required>
        </div>
        <input type="submit" value="Encontrar perfil" class="btn">
    </form>

</section>
<!-- usuario form section ends -->

<?php
require_once 'includes/footer.php';
?>