<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Diga adeus às complicações na gestão financeira da sua empresa. Com o nosso Sistema de Recibos e Orçamentos, você pode simplificar todo o processo de criação e gerenciamento de recibos e orçamentos de forma eficiente e intuitiva.">
    <meta name="author" content="GJ desenvolvimento">
    <meta name="keywords"
        content="sistema, orçamento, recibo, financeiro, gestão, empresa, controle, automatização, simplificação, eficiência, intuitivo">
    <meta name="robots" content="index, follow">


    <!-- Website Title -->
    <title>ControlGJ - Automatize os Orçamentos e Recibos</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="{{ route('index') }}"><img class=" img-fluid"
                    src="{{ asset('../assets/images/logo_controlGJ-removebg-preview.png') }}" alt="alternative"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('index') }}">INICIAL <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">CARACTERÍSTICAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">DETALHES</a>
                    </li>
                    {{-- 
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">PRECIFICAÇÃO</a>
                    </li> --}}
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="{{ route('login') }}">Entrar</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    {{ $slot }}


    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        viewBox="0 0 1920 79">
        <defs>
            <style>
                .cls-2 {
                    fill: #5f4def;
                }
            </style>
        </defs>
        <title>footer-frame</title>
        <path class="cls-2"
            d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z"
            transform="translate(0 -0.188)" />
    </svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Sobre a GJ desenvolvimento</h4>
                        <p class="p-small">A Gj desenvolvimento é uma empresa focada em entregar o melhor e mais
                            tecnológico serviço para impulsionar a sua marca</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Links Importantes</h4>
                        <ul class="list-unstyled li-space-lg p-small">

                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Leia os nossos <a class="white"
                                        href="terms-conditions.html">Termos & Condições</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contato</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">720 Silvério Régis, Lageado Baixo, Guabiruba 88360-000, BRA
                                </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white"
                                        href="contatogj@gmail.com">contatogj@gmail.com</a> <i class="fas fa-globe">
                                    </i><a class="white"
                                        href="https://gjdesenvolvimento.com.br/">gjdesenvolvimento.com.br</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2024 <a href="https://gjdesenvolvimento.com.br/">GJ
                            DESENVOLVIMENTO</a><br>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('assets/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script> <!-- Custom scripts -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16666009050"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16666009050');
    </script>

    <!-- Event snippet for Purchase conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16666009050/wIV8CJix-MgZENq7_Io-',
            'value': 1.0,
            'currency': 'BRL',
            'transaction_id': ''
        });
    </script>
    <script>
        // Função para formatar CPF ou CNPJ
        function formatarCpf(cpf) {
            console.log(cpf, 'cpf')
            // Remove caracteres indesejados
            cpf = cpf.replace(/\D/g, '');

            if (cpf.length === 11) {
                // Formatar CPF (###.###.###-##)
                cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
            } else if (cpf.length === 14) {
                // Formatar CNPJ (##.###.###/####-##)
                cpf = cpf.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/, "$1.$2.$3/$4-$5");
            }

            return cpf;
        }

        function formatarValor(valor) {
            // Remove caracteres não numéricos
            valor = valor.replace(/[^\d]/g, '');

            // Formatar como valor monetário
            valor = (parseFloat(valor) / 100).toFixed(2).replace('.', ',');

            return valor;
        }

        function formatarTelefone(telefone) {
            // Remove todos os caracteres não numéricos
            telefone = telefone.replace(/\D/g, '');

            // Verifica o tamanho do número de telefone e aplica a formatação apropriada
            if (telefone.length === 11) {
                // Formato para números de celular (##) #####-####
                telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
            } else if (telefone.length === 10) {
                // Formato para números de telefone fixo (##) ####-####
                telefone = telefone.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
            } else {
                // Número de telefone inválido, retorna sem formatação
                return telefone;
            }

            return telefone;
        }



        document.addEventListener('DOMContentLoaded', function() {
            var camposCpf = document.querySelectorAll('[name="cpf"]');

            // Iterar sobre todos os campos de CPF
            camposCpf.forEach(function(campo) {
                // Adicionar evento de escuta ao campo de entrada
                campo.addEventListener('input', function(event) {
                    var valor = campo.value;
                    var novoValor = formatarCpf(valor);

                    // Atualizar valor do campo
                    campo.value = novoValor;
                });
            });

            var camposValor = document.querySelectorAll('[name="valor"]');

            camposValor.forEach(function(campo) {
                campo.addEventListener('input', function(event) {
                    var valor = campo.value;
                    var novoValor = formatarValor(valor);

                    campo.value = novoValor;
                });
            });

            var campoPhone = document.querySelectorAll('[name="phone"]');

            // Iterar sobre todos os campos de CPF
            campoPhone.forEach(function(campo) {
                // Adicionar evento de escuta ao campo de entrada
                campo.addEventListener('input', function(event) {
                    var valor = campo.value;
                    var novoValor = formatarTelefone(valor);

                    // Atualizar valor do campo
                    campo.value = novoValor;
                });
            });

        });
    </script>
</body>

</html>
