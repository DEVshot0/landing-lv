@extends('layouts.app')

@section('content')

<!-- Seção Inicial -->
<section class="inicio d-flex align-items-center justify-content-center" style="background-color: #fdfaf5; min-height: 100vh;">
    <div class="container">
        <div id="inicio" class="row align-items-center justify-content-center flex-column-reverse flex-lg-row">
            
            <!-- Coluna Esquerda (logo, nome e botão) -->
            <div class="col-lg-4 d-flex flex-column align-items-center order-2 order-lg-1 mt-5 mt-lg-0 fade-from-line-left" id="inicio-left">
                <div class="mb-4 text-center" style="width: 100%;">
                    <!-- Logo adicionada aqui -->
                    <img src="{{ asset('/images/logo-lv.png') }}" alt="Logo Luciano Vieira" class="mb-4" style="max-height: 120px;">
                    <h2 class="fw-bold mb-2" style="font-size: 2.8rem; color: #0c1b33;">Luciano Vieira</h2>
                    <h4 class="fw-normal" style="font-size: 1.8rem; color: #a17a41;">escritório de advocacia</h4>
                </div>

                <div class="text-center" style="width: 100%;">
                    <a href="#contato" class="btn px-5 py-3 d-inline-block" style="background-color: #0c1b33; color: white; font-weight: 600; font-size: 1.2rem; border-radius: 8px; box-shadow: 0 4px 8px rgba(12, 27, 51, 0.2);">
                        FALE CONOSCO
                    </a>
                </div>

                <div class="d-lg-none w-100 my-4">
                    <div style="width: 100%; height: 1px; background-color: rgba(0, 0, 0, 0.1);"></div>
                </div>
            </div>

            <!-- Linha Divisória Vertical -->
            <div class="col-lg-1 d-none d-lg-flex justify-content-center order-lg-2">
                <div style="width: 2px; height: 380px; background-color: rgba(0, 0, 0, 0.1);"></div>
            </div>

            <!-- Coluna Direita (título âncora e texto descritivo) -->
            <div class="col-lg-7 d-flex flex-column align-items-center align-items-lg-start text-center text-lg-start mb-5 mb-lg-0 order-1 order-lg-3 fade-from-line-right" id="inicio-right">
                <!-- Título âncora adicionado aqui -->
                <a href="#como-trabalhamos" class="text-decoration-none mb-4" style="display: inline-block;">
                    <h3 style="color: #a17a41; font-size: 1.8rem; font-weight: 500; margin-bottom: 1rem;">
                        <span class="title-with-underline" style="position: relative; display: inline-block;">
                            Missão, visão e valores
                            <span class="underline"></span>
                        </span>
                    </h3>
                </a>
                
                <p class="mb-0" style="font-size: 2rem; color: #333; max-width: 100%; line-height: 1.5; font-weight: 400;">
                    <span style="font-weight: 500;">Oferecemos soluções jurídicas eficientes</span>, com Ética, Excelência e Celeridade. Buscamos ser referência em advocacia, unindo Inovação, Responsabilidade Social e Compromisso com a segurança jurídica.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- INCLUINDO O QUEM SOMOS -->
@include('landing.quem-somos')

@include('landing.como-trabalhamos')

@include('landing.onde-trabalhamos')

@include('landing.areas-atuacao')

@include('landing.instagram')

@include('landing.contato')

@include('landing.footer')

@endsection

@push('styles')
    <!-- Animate.css e Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <style>
        .divider-vertical {
            width: 2px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .divider-horizontal {
            width: 100%;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Estado inicial: invisível */
        .fade-from-line-left,
        .fade-from-line-right {
            opacity: 0;
            transform: translateX(0);
        }

        /* Quando entra na tela */
        .fade-from-line-left.animate-in {
            animation: fadeInFromLeft 1s ease-out forwards;
            animation-delay: 0.3s;
        }

        .fade-from-line-right.animate-in {
            animation: fadeInFromRight 1s ease-out forwards;
            animation-delay: 0.5s;
        }

        @keyframes fadeInFromLeft {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInFromRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .title-with-underline {
            transition: transform 0.3s ease;
        }

        .title-with-underline .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #0c1b33;
            transition: width 0.3s ease;
        }

        .title-with-underline:hover {
            transform: scale(1.05);
        }

        .title-with-underline:hover .underline {
            width: 100%;
        }

        .title-with-underline.underline-active .underline {
            
            width: 100%;
        }
    </style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Animações de entrada
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                } else {
                    entry.target.classList.remove('animate-in');
                }
            });
        }, {
            threshold: 0.3
        });

        document.querySelectorAll('.fade-from-line-left, .fade-from-line-right').forEach(el => {
            observer.observe(el);
        });

        // Função de sublinhado com controle de scroll manual
        const title = document.querySelector('.title-with-underline');
        const LOWER_ACTIVATION_PERCENT = 0.30; // 30% da altura da tela
        const UPPER_ACTIVATION_PERCENT = 0.60; // 60% da altura da tela
        let alreadyActivated = false;

        function checkTitlePosition() {
            if (!title) return;

            const rect = title.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const percentFromTop = rect.top / windowHeight;

            // Console log para ver a posição
            //console.log(`Top do elemento em relação à janela: ${(percentFromTop * 100).toFixed(2)}%`);

            // Aplica o efeito somente quando estiver entre 30% e 60% da altura da tela
            if (percentFromTop >= LOWER_ACTIVATION_PERCENT && percentFromTop <= UPPER_ACTIVATION_PERCENT) {
                if (!alreadyActivated) {
                    console.log('fui ativado');
                    title.classList.add('underline-active');
                    title.style.transform = 'scale(1.1)'; // Aumenta o título em 10%
                    alreadyActivated = true; // Evita múltiplas ativações
                }
            } else {
                // Remove a transformação e o sublinhado caso o título saia da área
                if (alreadyActivated) {
                    title.classList.remove('underline-active');
                    title.style.transform = 'scale(1)'; // Retorna ao tamanho original
                    alreadyActivated = false; // Permite a reativação quando voltar
                }
            }
        }

        window.addEventListener('scroll', checkTitlePosition);
        window.addEventListener('resize', checkTitlePosition);
        checkTitlePosition(); // Checa já no carregamento
    });
</script>
@endpush




