<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube Recanto</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>

<body>

    <!-- header section starts  -->
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
        <img src="images/favicon.png" alt="">
        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">Clube Recanto</a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php">Início</a>
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php">Eventos</a>
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php">Experiências</a>
            <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php">Nossos Sócios</a>
        </nav>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#book-form" class="btn">Associado</a>

    </header>
    <!-- header section ends -->
    <section class="about" id="about"><br></section>
    <!-- booking form section starts  -->
    <section class="book-form" id="book-form">

        <form data-aos="zoom-in" data-aos-delay="150" action="">
            <div class="inputBox">
                <span>Quem é você?</span>
                <input type="text" placeholder="escreve o seu nome completo" value="">
            </div>
            <div class="inputBox">
                <span>O seu passe será para quantas pessoas?</span>
                <input type="number" placeholder="número de sócios" value="">
            </div>
            <div class="inputBox">
                <span>Sua Data de Nascimento</span>
                <input type="date" value="">
            </div>
            <input type="submit" value="Encontrar perfil" class="btn">
        </form>

    </section>
    <!-- booking form section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo">
                    <h3>Clube Recanto</h3>
                </a>
                <p>Estamos presentes nas maiores Redes Sociais. Não deixe de nos seguir!</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-tiktok"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>Contato</h3>
                <p> <i class="fas fa-map"></i> Avenida Juscelino Kubitscheck, nº 1050, Jardim Brasil - Frutal, Minas
                    Gerais </p>
                <p> <i class="fas fa-phone"></i> +55 34 3423-6868 </p>
                <p> <i class="fas fa-envelope"></i> contato@cluberecanto.com.br </p>
                <p> <i class="fas fa-clock"></i> Estamos abertos das 08:00 às 22:00 horas</p>
            </div>

        </div>

    </section>

    <div class="credit">Feito com <i class="fas fa-heart"></i> por &copy;<span> Clube Recanto</span> | <?php $Year = date("Y");
                                                                                                        echo $Year; ?></div>
    <!-- footer section ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>

</body>

</html>