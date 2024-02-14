<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/carousel.css">
    <title>Darwin • Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- 
<div class="container">
    <h1 class="text-center">Barbearia</h1>
    <p class="text-center">Seja bem-vindo à nossa barbearia!</p>

    <div class="text-center">
        <button id="agendamentoBtn" class="btn btn-primary">Agendar</button>
    </div>
</div>
 --}}
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrollTop show-scroll" id="scroll-top">
        <i class="bx bx-chevron-up scrollTop_icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="/" class="nav_logo">
                {{--  <img src="/img/logo.png" alt="" class="foods_img" /> --}}
                <div class="nav_header_title"><span class="name_barber">Darwin</span> <span
                        class="sub_barber">Barbearia</span></div>
            </a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">Sobre Nós</a>
                    </li>
                    <li class="nav_item">
                        <a href="#services" class="nav_link">Serviços</a>
                    </li>
                    {{-- <li class="nav_item">
                        <a href="#foods" class="nav_link">Comidas</a>
                    </li>
                    <li class="hidden_item">
                        <a href="#app" class="nav_link">App</a>
                    </li> --}}
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">Contate-nos</a>
                    </li>
                </ul>
            </div>

            <div class="nav_toggle" id="nav-toggle">
                <!--When clicked activate the class "opened"
            to the button tag as well to the 4 SVG lines-->
                <button class="menu" aria-label="Abrir Menu"
                    onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))">
                    <svg width="40" height="41" viewBox="0 0 100 100">
                        <path class="line line1"
                            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                        <path class="line line2" d="M 20,50 H 80" />
                        <path class="line line3"
                            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="carousel">
                <div class="carousel_inner">
                    <div class="carousel_item carousel_item__active">
                        <img src="/img/slide_1.png" alt="" class="carousel_img">
                        <div class="carousel_content_container">
                            <div class="carousel_caption">
                                <h1 class="carousel_title">Olá, seja bem vindo ao <span class="name">Darwin
                                        Barbearia!</span></h1>
                                <p class="carousel_description">Caro usuário, clique no botão abaixo para agendar o seu
                                    corte de cabelo agora. Estamos ansiosos para recebê-lo em nossa barbearia!</p>
                                <button class="btn_primary agendamentoBtn">Agendar</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <img src="/img/slide_2.png" alt="" class="carousel_img">
                        <div class="carousel_content_container">
                            <div class="carousel_caption">
                                <h1 class="carousel_title">Sobre <span class="name">Nós!</span></h1>
                                <p class="carousel_description">Explore mais sobre nós! Clique no botão abaixo para
                                    descobrir a essência da nossa barbearia.</p>
                                <a href="#about" class="btn_primary">Sobre Nós</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <img src="/img/slide_3.png" alt="" class="carousel_img">
                        <div class="carousel_content_container">
                            <div class="carousel_caption">
                                <h1 class="carousel_title">Nossos <span class="name">Serviços!</span></h1>
                                <p class="carousel_description"> Descubra a excelência em nossos serviços! Clique no
                                    botão abaixo para explorar uma variedade de cortes de cabelo, barbas impecáveis e
                                    tratamentos especiais que oferecemos.</p>
                                <a href="#services" class="btn_primary">Serviços</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_item">
                        <img src="/img/slide_4.png" alt="" class="carousel_img">
                        <div class="carousel_content_container">
                            <div class="carousel_caption">
                                <h1 class="carousel_title">Nosso <span class="name">Contato!</span></h1>
                                <p class="carousel_description">Para esclarecimentos, agendamentos ou qualquer dúvida,
                                    entre em contato conosco. Clique no botão abaixo para encontrar nossas informações
                                    de contato.</p>
                                <a href="#contact" class="btn_primary">Contate-nos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel_indicator">
                    <button class="carousel_dot carousel_dot__active"></button>
                    <button class="carousel_dot"></button>
                    <button class="carousel_dot"></button>
                    <button class="carousel_dot"></button>
                </div>

                <div class="carousel_control">
                    <button class="carousel_button carousel_button__prev">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button class="carousel_button carousel_button__next">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--========== ABOUT ==========-->
        <section class="about section" id="about">
            <div class="about_container">
                <div class="about_data ">
                    <div class="about_data_content">
                        <span class="section-subtitle about_initial">Sobre Nós</span>
                        <h2 class="section-title about_initial">
                            Experimente o melhor da sua região!
                        </h2>
                        <p class="about_description">
                            Bem-vindo à Darwin Barbearia, onde o levamos é sério quando o assunto é corte de cabelo
                            masculino e barba! Aqui, nossa equipe buscamos sempre ajudar e atender com qualidade as
                            necessidades dos nossos clientes, e com um clima sempre descontraído. Vamos além do visual -
                            é uma experiência completa, camarada. Se está a fim de um corte que faz a diferença e uma
                            barba que causa impacto, dá uma passada. Afinal, ser o melhor por aqui é com a gente
                            mesmo!💈
                        </p>
                        <p class="about_description">
                            Esperamos que sua última experiência conosco tenha sido satisfatória. Valorizamos sua
                            preferência pela nossa barbearia. Caso tenha apreciado o serviço, ficaríamos honrados em
                            agendar seu próximo corte de cabelo. Agende já o seu corte.
                        </p>

                        <button class="btn_primary agendamentoBtn">Agendamento</button>
                    </div>
                </div>

                <div class="about_image_container">
                    <img src="/img/Barbeiro-Longe-de-Casa_.png" alt="Ingredientes naturais" class="about_img" />
                </div>
            </div>
            <div class="address_container">
                <div class="address_map">
                    <div class="about_maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.662546248963!2d-38.644811399999995!3d-4.2856053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b8cd03299ca575%3A0x50d683d3352f865f!2sDarwin%20-%20Barbearia!5e0!3m2!1spt-BR!2sbr!4v1706857600225!5m2!1spt-BR!2sbr"
                            width="100%" height="350" style="border:0;border-radius: 5px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="address_content">
                    <span class="section-subtitle about_initial">Localização</span>
                    <h2 class="section-title about_initial">
                        Estamos localizados no seguinte endereço:
                    </h2>
                    <p class="address_text">R. Félix Pereira - Barreira, CE, 62795-000</p>
                    <p>Ficamos à disposição para qualquer dúvida ou para agendar um horário. Esperamos recebê-lo em
                        breve!</p></br>
                    <a href="#contact" class="btn_primary">Contate-nos</a>

                </div>
            </div>
        </section>

        <!--========== SERVICES ==========-->
        <section class="services section bd-container" id="services">
            <span class="section-subtitle">Oferecemos para ti</span>
            <h2 class="section-title">O que fazemos de melhor</h2>

            <div class="services_container bd-grid">
                <div class="services_cards">
                    <div class="services_card_item">
                        <div class="services_card_container">
                            <div class="services_card_image">
                                <img src="/img/cabelo.png" alt="" srcset="">
                            </div>
                            <div class="services_card_content">
                                <h3 class="services_card_title">Cabelos Masculinos</h3>
                                <p class="services_card_description">
                                    Cabelos masculinos demandam atenção especial, e na nossa barbearia, entendemos a
                                    importância de um corte que não apenas siga as últimas tendências, mas que também
                                    reflita a personalidade única de cada cliente.
                                </p>
                                <ul>
                                    <li>Cortes tradicionais</li>
                                    <li>Cortes modernos e estilizados</li>
                                    <li>Design de cortes exclusivos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="services_card_item">
                        <div class="services_card_container">
                            <div class="services_card_image">
                                <img src="/img/barba.png" alt="" srcset="">
                            </div>
                            <div class="services_card_content">
                                <h3 class="services_card_title">Barbas Masculinas</h3>
                                <p class="services_card_description">
                                    Na nossa barbearia, a barba é mais do que apenas pelos faciais; é uma expressão de
                                    estilo e personalidade. Oferecemos uma variedade de serviços especializados para
                                    cuidar da sua barba de maneira única:
                                </p>
                                <ul>
                                    <li>Cortes tradicionais</li>
                                    <li>Cortes modernos e estilizados</li>
                                    <li>Design de cortes exclusivos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact section " id="contact">
            <div class="contact_container bd-container bd-grid">
                <div class="contact_data">
                    <span class="section-subtitle contact_initial">Vamos conversar?</span>
                    <h2 class="section-title contact_initial">Contate-nos</h2>
                    <p class="contact_description">
                        Estamos sempre à disposição para atender às suas necessidades. Se tiver dúvidas, sugestões ou
                        quiser agendar um serviço, por favor, entre em contato conosco. Sua satisfação é a nossa
                        prioridade, e nossa equipe está pronta para oferecer assistência personalizada.😉
                    </p>
                </div>

                <div class="contact_button">
                    <a href="https://wa.me/5585994395035" class="btn_primary">Entrar em Contato</a>
                </div>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section">
        <div class="bd-container">
            {{--  <div class="footer_container bd-grid">
                <div class="footer_content">
                    <img src="/img/logo.png" width="150px"  alt="" >

                    <span class="footer_description">O melhor serviço, pra você. </span>

                    <div>
                        <a href="#" class="footer_social"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="footer_social"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="footer_social"><i class="bx bxl-twitter"></i></a>
                    </div>
                </div>

                <div class="footer_content">
                    <h3 class="footer_title">Informações</h3>
                    <ul>
                        <li><a href="#" class="footer_link">Eventos</a></li>
                        <li><a href="#" class="footer_link">Política de Privacidade</a></li>
                        <li><a href="#" class="footer_link">Termos de serviço</a></li>
                    </ul>
                </div>

                <div class="footer_content">
                    <h3 class="footer_title">Endereço</h3>
                    <ul>
                        <li>São Paulo - Brasil</li>
                        <li>R. Verbo Divino, 1207</li>
                        <li>Chácara Santo Antônio</li>
                    </ul>
                </div>

                <div class="footer_content">
                    <h3 class="footer_title">Navegação</h3>
                    <ul>
                        <li><a href="#contact" class="footer_link">Contate-nos</a></li>
                    </ul>
                </div>
            </div> --}}
            <p class="footer_copy">
                &#169; Feito por
                <a href="#" class="footer_link"
                    target="_blank">
                    <strong>@Wige</strong>
                </a>
            </p>
        </div>
    </footer>

    <!--========== SCROLL REVEAL LIBRARY ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="/js/script.js"></script>
    <script src="/js/carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        const buttons = document.querySelectorAll(".agendamentoBtn");
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener("click", function() {
                window.location.href = '/agendamento';
            });
        }
    </script>

</body>

</html>
