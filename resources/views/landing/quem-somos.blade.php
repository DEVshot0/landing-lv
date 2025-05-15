<!-- Seção Quem Somos -->
<section id="quem-somos" class="quem-somos d-flex align-items-center text-light" style="background-color: #0c1b33; min-height: 100vh; position: relative;">
    <div class="container py-5 position-relative z-2">
        <!-- Ícone de balança -->
        <div class="text-center mb-4">
            <i class="fas fa-scale-balanced fa-3x text-white"></i>
        </div>

        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold animate__animated animate__fadeInDown" style="color: #f8f9fa;">Nosso Escritório</h2>
        </div>

        <div class="row align-items-center justify-content-center">
            <!-- Texto descritivo -->
            <div class="col-md-6 order-1 order-md-1 fade-from-line-right">
                <div class="text-start" style="color: #f8f9fa;">
                    <p class="lead">
                        Mais do que um escritório de advocacia, somos parceiros estratégicos de nossos clientes. <br><br>
                        Simplificamos o complexo, antecipamos desafios e proporcionamos segurança para tomada de decisões confiantes. <br><br>
                        Atuamos com excelência em diversas áreas do Direito, oferecendo suporte jurídico de alto nível tanto para indivíduos quanto para empresas. <br><br>
                        Com sede em Itumbiara - GO, nosso escritório é liderado por Dr. Luciano Vieira e Uriângela Borges, e conta com uma equipe comprometida, dedicada e sempre pronta para oferecer soluções jurídicas inovadoras e diferenciadas.
                    </p>
                </div>
            </div>

            <!-- Linha divisória responsiva -->
            <div class="col-md-1 d-none d-md-flex justify-content-center order-md-2">
                <div class="divider-vertical"></div>
            </div>
            <div class="d-md-none w-100 my-4 order-2">
                <div class="divider-horizontal"></div>
            </div>

            <!-- Imagem ilustrativa da equipe -->
            <div class="col-md-5 order-3 order-md-3 fade-from-line-left text-center">
                <img src="{{ asset('images/luciano.png') }}" alt="Equipe jurídica" class="img-fluid rounded shadow" style="max-width: 85%;">
            </div>
        </div>
    </div>
</section>

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

        /* Quando entra na tela (adicionada via JS) */
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
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    } else {
                        entry.target.classList.remove('animate-in'); // Remove para permitir repetir animação
                    }
                });
            }, {
                threshold: 0.3 // ativa quando 30% visível
            });

            document.querySelectorAll('.fade-from-line-left, .fade-from-line-right').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
@endpush
