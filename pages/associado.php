<?php require_once '../src/config/conexao.php' ?>
<?php require_once '../includes/header.php' ?>

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

    <form autocomplete="off" data-aos="zoom-in" action="login.php" method="post">
        
        <div class="form-step form-step-active">

            <div class="input-group">
                <span for="nome">Seu nome:</span>
                <input type="text" name="nome" id="nome" placeholder="digite seu nome completo" required>
                <span class="error"></span>
            </div>

            <div class="input-group">
                <span for="position">Data de Nascimento:</span>
                <input type="date" name="position" id="position" required>
                <span class="error"></span>
            </div>

        </div>

        <input class="btn" type="submit" value="Entrar">

    </form>

</section>
<!-- login usuario form section ends -->

<?php
require_once '../includes/footer.php';
?>