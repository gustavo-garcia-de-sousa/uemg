<?php
require_once 'includes/conexao.php';
require_once 'includes/header.php';
?>

<section class="about" id="about"><br></section>

<!-- usuario form section starts  -->

<section class="usuario-form" id="usuario-form">

    <form data-aos="zoom-in" data-aos-delay="150" action="">
        <div class="inputBox">
            <span>Qual o seu nome?</span>
            <input type="text" placeholder="escreva o seu nome completo" value="">
        </div>
        <div class="inputBox">
            <span>Será para quantas pessoas?</span>
            <input type="number" placeholder="número de sócios" value="">
        </div>
        <div class="inputBox">
            <span>Sua Data de Nascimento</span>
            <input type="date" value="">
        </div>
        <input type="submit" value="Encontrar perfil" class="btn">
    </form>

</section>

<!-- usuario form section ends -->

<?php
require_once 'includes/footer.php';
?>