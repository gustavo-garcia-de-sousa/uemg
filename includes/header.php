<!--
Autor: Gustavo Garcia
starts: 26/01/2022
ends: 01/02/2022
Desenvolvimento Web na disciplina de Programação II

Adaptado do site: https://ccrc.org.br/institucional/
Inspiração: Alvorada Praia Clube de Frutal.
-->
<?php

session_start();

if (!isset($_SESSION['niveis_acesso'])) { ?>

    <!-- cabeçalho sem autenticação starts-->

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Clube Alvorada, o melhor clube em Frutal para você e sua família.">
        <title>Clube Alvorada</title>

        <!-- favicon -->
        <link rel="shortcut icon" type="../assets/images/png" href="../assets/images/favicon.ico">

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css aos cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

        <!-- custom css file link -->
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/custom.css">

        <!-- jquery script cdn link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- custom js file aos cdn link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <!-- custom js file link -->
        <script src="../js/main.js" defer></script>
        <script src="../js/custom.js" defer></script>

    </head>

    <body>

        <!-- header section starts  -->

        <header class="header">

            <div id="menu-btn" class="fas fa-bars"></div>
            <img src="../assets/images/favicon.png" alt="">
            <a data-aos="zoom-in-left" data-aos-delay="150" href="../index.php" class="logo">Clube Alvorada</a>

            <nav class="navbar">
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../index.php#sobre">Início</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../index.php#eventos">Eventos</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../index.php#servicos">Experiências</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../index.php#review">Nossos Sócios</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../index.php#visita">Agendar Visita</a>
            </nav>

            <a data-aos="zoom-in-left" data-aos-delay="150" href="../pages/login_form.php" class="btn"><strong>Associado</strong></a>

        </header>

        <!-- header section ends -->

        <script>
            AOS.init({
                duration: 400,
                offset: 150,
            });
        </script>

        <!-- cabeçalho sem autenticação ends-->
    <?php } ?>

    <!-- cabeçalho com autenticação starts-->

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Clube Alvorada, o melhor clube em Frutal para você e sua família.">
        <title>Clube Alvorada</title>

        <!-- favicon -->
        <link rel="shortcut icon" type="../../assets/images/png" href="../assets/images/favicon.ico">

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css aos cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

        <!-- custom css file link -->
        <link rel="stylesheet" href="../../assets/css/main.css">
        <link rel="stylesheet" href="../../assets/css/custom.css">

        <!-- jquery script cdn link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- custom js file aos cdn link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <!-- custom js file link -->
        <script src="../../js/main.js" defer></script>
        <script src="../../js/custom.js" defer></script>

    </head>

    <body>

        <!-- header section starts sem autenticação -->

        <header class="header">

            <div id="menu-btn" class="fas fa-bars"></div>
            <img src="../../assets/images/favicon.png" alt="">
            <a data-aos="zoom-in-left" data-aos-delay="150" href="../index.php" class="logo">Clube Alvorada</a>

            <nav class="navbar">
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../../index.php#">Index</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php">Usuários</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../../index.php#">?????</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../../index.php#">?????</a>
                <a data-aos="zoom-in-left" data-aos-delay="150" href="../../index.php#">?????</a>
            </nav>

            <a data-aos="zoom-in-left" data-aos-delay="150" href="../pages/access/logout.php" class="btn"><strong>Logout</strong></a>

        </header>

        <!-- header section ends sem autenticação -->

        <script>
            AOS.init({
                duration: 400,
                offset: 150,
            });
        </script>

        <!-- cabeçalho com autenticação ends-->