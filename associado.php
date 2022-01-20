<?php
require_once 'includes/conexao.php';
require_once 'includes/header.php';
?>

<!-- apresentacao section starts  -->
<section></section>

<div class="banner">

    <div class="conteudo">
        <h3>Acesse o portal do Usuário</h3>
        <p>Diversos serviços, como: 2º via de boletos, portal transparência, gerenciar sócios e agendamento de horário!</p>
        <br><br>
        <br>
    </div>

</div>
<!-- apresentacao section ends -->

<!-- login usuario form section starts  -->
<section class="usuario-form" id="usuario-form">

    <form autocomplete="off" data-aos="zoom-in" action="">
        <div class="inputBox">
            <span>E-mail</span>
            <input type="text" placeholder="e-mail cadastrado" value="">
        </div>
        <div class="inputBox">
            <span>Senha</span>
            <input type="password" placeholder="digite sua senha..." value="">
        </div>
        <input class="btn" type="submit" value="Entrar">

    </form>

</section>
<!-- login usuario form section ends -->

<?php
require_once 'includes/footer.php';
?>