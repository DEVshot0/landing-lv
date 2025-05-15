<!-- Seção Onde Trabalhamos -->
<section id="onde-trabalhamos" class="onde-trabalhamos d-flex align-items-center text-light" style="background-color: #0c1b33; min-height: 100vh; position: relative;">
    <div class="container py-5 position-relative z-2">
        <!-- Ícone de localização -->
        <div class="text-center mb-4">
            <i class="fas fa-map-marker-alt fa-3x text-white"></i>
        </div>

        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold animate__animated animate__fadeInDown" style="color: #f8f9fa;">Onde Trabalhamos</h2>
        </div>

        <div class="row align-items-center justify-content-center">
            <!-- Texto descritivo + mapa -->
            <div class="col-md-6 order-1 order-md-1 fade-from-line-right">
                <div class="text-start" style="color: #f8f9fa;">
                    <p class="lead" style="font-size: 1.1rem;">
                        <strong>Nos localizamos em:</strong><br>
                        Itumbiara - GO<br><br>
                        <strong>Endereço:</strong><br>
                        Av. Beira Rio, 131 - Village Imperial<br>
                        Itumbiara - GO, 75523-070<br><br>
                        <strong>Horário de funcionamento:</strong><br>
                        Segunda à Sexta — das 8h às 18h<br>
                        Sábados, domingos e feriados — fechado
                    </p>

                    <!-- Mapa Google -->
                    <div class="mt-4 rounded shadow overflow-hidden" style="height: 250px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.8992111157423!2d-49.22646822510896!3d-18.416510742741246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94a6a8106d9b3b29%3A0x846ae5c6a4d3bb95!2sAv.%20Beira%20Rio%2C%20131%20-%20Village%20Imperial%2C%20Itumbiara%20-%20GO%2C%2075523-070!5e0!3m2!1spt-BR!2sbr!4v1715533400000!5m2!1spt-BR!2sbr"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
            </div>

            <!-- Linha divisória responsiva -->
            <div class="col-md-1 d-none d-md-flex justify-content-center order-md-2">
                <div class="divider-vertical"></div>
            </div>
            <div class="d-md-none w-100 my-4 order-2">
                <div class="divider-horizontal"></div>
            </div>

            <!-- Imagem ilustrativa -->
            <div class="col-md-5 order-3 order-md-3 fade-from-line-left text-center">
                <img src="{{ asset('images/predio-lv.png') }}" alt="Nosso prédio" class="img-fluid rounded shadow" style="max-width: 85%;">
            </div>
        </div>
    </div>
</section>
