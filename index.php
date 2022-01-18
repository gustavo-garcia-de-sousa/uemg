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
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#about">Início</a>
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#destination">Eventos</a>
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#services">Experiências</a>
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#review">Nossos Sócios</a>
        </nav>

        <a data-aos="zoom-in-left" data-aos-delay="450" href="#book-form" class="btn">Associado</a>

    </header>
    <!-- header section ends -->

    <!-- home section starts  -->
    <section class="about" id="about">

        <div class="video-container" data-aos="fade-right" data-aos-delay="300">
            <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
            <div class="controls">
                <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
                <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
                <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
            </div>
        </div>

        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <h3>Um Clube completo em meio à Natureza</h3>
            <span>Nós estamos abertos todos os dias, das 08:00 às 22:00 horas.</span>
            <p>Desde 1992 se comprometendo a oferecer as melhores experiências. Torne-se sócio hoje mesmo!<br>
                Clique no botão <strong>"Se inscrever"</strong> e você será redirecionado para a página do associado, onde indicaremos os melhores passes para o seu perfil!</p><br>
            <a href="inscricao.php" class="btn">Se inscrever</a>
        </div>

    </section>
    <!-- home section ends -->

    <!-- events section starts  -->
    <section class="destination" id="destination">

        <div class="heading">
            <h1>Eventos no Clube</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>1º Torneio de Voleibol</h3>
                    <span>(VAGAS LIMITADAS)</span>
                    <p>Após reestruturação do espaço de Voleibol, nos solidarizamos a emprestar o espaço às disputas
                        Municipais. O evento acontecerá no dia 06 de Fevereiro às 08:00 entre as equipes inscritas. O
                        acesso estará liberado ao público durante os jogos.</p>
                    <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Inauguração Espaço de Tênis</h3>
                    <span><br></span>
                    <p>Já começamos o ano de 2022 com o pé direito. No dia 10 de Fevereiro será inaugurado o primeiro
                        espaço de tênis dentro do Clube. Convidamos todos os sócios para prestigiar esta inauguração. A
                        fita será cortada às 18:00 horas.</p>
                    <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Esporte entre amigos</h3>
                    <span>(INGRESSO: 1 KG de Alimento não perecível)</span>
                    <p>No dia 20 de Fevereiro, acontecerá o 9º Futebol entre amigos. As entidades beneficiárias
                        deste ano serão o CENTRO EDUCACIONAL PEQUENINOS DE JESUS e CASA DA CRIANÇA. Aberto ao público
                        das 08:00 às 17:00 horas.</p>
                    <a href="#">Saiba mais <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

        </div>

    </section>
    <!-- events section ends -->

    <!-- services section starts  -->
    <section class="services" id="services">

        <div class="heading">
            <h1>Experiências</h1>
            <span>nossos serviços</span>
        </div>

        <div class="box-container">

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-utensils"></i>
                <h3>Restaurantes</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-hotel"></i>
                <h3>Hospedagens</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-campground"></i>
                <h3>Camping</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-hot-tub"></i>
                <h3>2 Saunas Masculinas e Femininas</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-fish"></i>
                <h3>Lago de Pesca Esportiva</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-biking"></i>
                <h3>Trilhas de Bike</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-swimmer"></i>
                <h3>3 piscinas</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-futbol"></i>
                <h3>4 Campos de Futebol</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-basketball-ball"></i>
                <h3>2 Quadras de Basquete</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-dumbbell"></i>
                <h3>Academia</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-volleyball-ball"></i>
                <h3>3 Quadras de Voleibol</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-bullseye"></i>
                <h3>Tiro ao Alvo (Padrão Olímpico)</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-glass-cheers"></i>
                <h3>2 salões de Eventos</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-table-tennis"></i>
                <h3>1 Quadra de Tênis</h3>
            </div>

        </div>

    </section>
    <!-- services section ends -->

    <!-- review section starts  -->
    <section class="review" id="review">

        <div class="content" data-aos="fade-right" data-aos-delay="150">
            <h3>Os sócios Amam o nosso Clube!</h3>
            <span>veja o que eles escreveram...</span>
        </div>

        <div class="box-container" data-aos="fade-left" data-aos-delay="150">

            <div class="box">
                <p>"Eu me tornei fã do Clube desde a primeira vez que o visitei. Foi amor a primeira vista! Logo
                    procurei saber como eu podia me tornar sócio." </p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>Steven Santos</h3>
                        <strong><span>sócio desde 2013</span></strong>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>"Eu passo boa parte da minha semana neste lugar, já que o trabalho em home-office permite isso. O
                    contato com o verde e a paz que isso me proporciona é impágavel."</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>Natasha Prado</h3>
                        <strong><span>sócia desde 2009</span></strong>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>"Eu me sinto lisonjeado por ser sócio há mais de 20 anos. Eu conheço toda a equipe da
                    administração e sei que se depender deles, este Clube sempre chegará mais longe."</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>Bruce Queiroz</h3>
                        <strong><span>sócio desde 1993</span></strong>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>"Eu adquiri o passe de sócio a partir dos meus pais. Este Clube fez parte da minha
                    infância e será parte na dos meus filhos. Me sinto em uma segunda casa."</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>Paola Cristina</h3>
                        <strong><span>sócia desde 1997</span></strong>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- banner section starts  -->

    <div class="banner">

        <div class="content">
            <h3>Seja um Associado do Clube</h3>
            <span>Qualidade de vida para você e sua família.</span>
            <p>Venha nos fazer uma visita e conheça! Oferecemos diversos passes, é só escolher o que melhor combina para
                você!</p>
            <a href="#book-form" class="btn">Agendar Visita</a>
        </div>

    </div>

    <!-- banner section ends -->

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

            <div class="box" data-aos="fade-up" data-aos-delay="150">
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