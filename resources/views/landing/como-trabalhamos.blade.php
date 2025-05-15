<section id="como-trabalhamos" class="como-trabalhamos text-dark" style="background-color: #ffffff; min-height: 100vh;">
    <div class="container py-5">
        <!-- Ícone de balança -->
        <div class="text-center mb-4">
            <i class="fas fa-scale-balanced fa-3x" style="color: #0c1b33;"></i>
        </div>

        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold animate__animated animate__fadeInDown" style="color: #0c1b33;">Nossos Valores</h2>
        </div>

        <div class="row g-4">
            @php
                $valores = [
                    [
                        'titulo' => 'Ética',
                        'frases_azul' => [
                            'Burlamos processos para alcançar resultados mais rápidos.',
                            'Compartilhamos informações confidenciais sem autorização.',
                            'Ignoramos atitudes erradas dentro da equipe.'
                        ],
                        'frases_branco' => [
                            'Agimos com responsabilidade, mesmo quando ninguém está olhando.',
                            'Tomamos decisões baseadas no que é certo, não no que é mais fácil.',
                            'Respeitamos a confidencialidade de informações dos clientes e da empresa.'
                        ]
                    ],
                    [
                        'titulo' => 'Respeito',
                        'frases_azul' => [
                            'Interrompemos ou desconsideramos ideias dos outros.',
                            'Utilizamos um tom de voz agressivo ou debochado.',
                            'Ignoramos os limites ou necessidades individuais dos colegas.'
                        ],
                        'frases_branco' => [
                            'Ouvimos com atenção as opiniões dos colegas e clientes.',
                            'Evitamos julgamentos e tratamos todos com empatia.',
                            'Resolvemos conflitos com diálogo e maturidade.'
                        ]
                    ],
                    [
                        'titulo' => 'Trabalho em Equipe',
                        'frases_azul' => [
                            'Trabalhamos de forma isolada, competindo com os colegas.',
                            'Criticamos sem oferecer apoio ou solução.',
                            'Espalhamos fofocas, prejudicando a harmonia e a confiança na equipe.'
                        ],
                        'frases_branco' => [
                            'Compartilhamos conhecimentos e ajudamos os colegas.',
                            'Nos comunicamos de forma clara e respeitosa para evitar conflitos.',
                            'Trabalhamos juntos para atingir os objetivos da empresa.'
                        ]
                    ],
                    [
                        'titulo' => 'Honestidade',
                        'frases_azul' => [
                            'Escondemos falhas ou informações importantes para evitar cobranças.',
                            'Prometemos o que não conseguimos cumprir.',
                            'Manipulamos situações para benefício próprio.'
                        ],
                        'frases_branco' => [
                            'Agimos com transparência em todas as situações, mesmo diante de erros.',
                            'Mantemos um discurso alinhado com a realidade, sem promessas vazias.',
                            'Assumimos responsabilidades e buscamos soluções com integridade.'
                        ]
                    ],
                    [
                        'titulo' => 'Qualidade',
                        'frases_azul' => [
                            'Entregamos algo apenas para “cumprir tarefa”, sem preocupação com o resultado.',
                            'Deixamos passar erros por pressa ou descuido.',
                            'Evitamos buscar capacitação ou atualização.'
                        ],
                        'frases_branco' => [
                            'Entregamos serviços e soluções bem pensadas e completas.',
                            'Revisamos nosso trabalho antes de finalizar.',
                            'Estamos em constante busca de conhecimento para melhorar o que fazemos.'
                        ]
                    ],
                    [
                        'titulo' => 'Celeridade',
                        'frases_azul' => [
                            'Procrastinamos ou deixamos demandas se acumularem.',
                            'Esperamos ser cobrados para agir.',
                            'Agimos com pressa, mas entregamos algo incompleto ou incorreto.'
                        ],
                        'frases_branco' => [
                            'Organizamos prioridades para atender com agilidade e eficiência.',
                            'Comunicamos rapidamente imprevistos ou necessidades de ajustes.',
                            'Agimos com rapidez sem abrir mão da qualidade.'
                        ]
                    ]
                ];
            @endphp

            @foreach ($valores as $valor)
                <div class="col-12 col-md-6">
                    <div class="text-center mb-2">
                        <span style="font-size: 1.1rem; font-weight: bold; color: #c59d26;">{{ $valor['titulo'] }}</span>
                    </div>

                    <div class="position-relative border rounded shadow-sm overflow-hidden d-flex fade-from-line-left" style="border-color: #0c1b33; min-height: 350px;">
                        <!-- Lado azul (Como NÃO vivemos) -->
                        <div class="w-50 p-3 d-flex flex-column justify-content-start align-items-start" style="background-color: #0c1b33; color: white;">
                            <div class="mb-2">
                                <span style="font-size: 1.2rem; color: #ff4c4c;">Como NÃO vivemos</span>
                            </div>
                            <ul class="ps-3 mb-0" style="font-size: 0.9rem;">
                                @foreach ($valor['frases_azul'] as $frase)
                                    <li>{{ $frase }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Lado branco (Como vivemos) -->
                        <div class="w-50 p-3 d-flex flex-column justify-content-start align-items-start bg-white" style="color: #0c1b33;">
                            <div class="mb-2">
                                <span style="font-size: 1.2rem; color: #28a745;">Como vivemos</span>
                            </div>
                            <ul class="ps-3 mb-0" style="font-size: 0.9rem;">
                                @foreach ($valor['frases_branco'] as $frase)
                                    <li>{{ $frase }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
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
