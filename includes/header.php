<!--
Autor: Gustavo Garcia
Data: 19/01/2022 às 18:50
Desenvolvimento de site disciplina Programação II

Adaptado do site: https://ccrc.org.br/institucional/
Inspiração: Alvorada Praia Clube de Frutal.
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clube Recanto, o melhor clube em Frutal para você e sua família.">
    <title>Clube Recanto</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css aos cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!--Bootstrap cdn link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
        <img src="images/favicon.png" alt="">
        <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php" class="logo">Clube Recanto</a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php#sobre">Início</a>
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php#eventos">Eventos</a>
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php#servicos">Experiências</a>
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php#review">Nossos Sócios</a>
        </nav>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="associado.php" class="btn">Associado</a>

    </header>

    <!-- header section ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>