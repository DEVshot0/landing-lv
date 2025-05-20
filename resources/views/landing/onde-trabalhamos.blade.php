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
                        Rua Renato Alencar esquina com Av. Beira Rio, 85<br>
                        Itumbiara - GO, 75523-050<br><br>
                        <strong>Horário de funcionamento:</strong><br>
                        Segunda à Sexta — das 8h às 18h<br>
                        Sábados, domingos e feriados — fechado
                    </p>

                    <!-- Mapa Google atualizado -->
                    <div class="mt-4 rounded shadow overflow-hidden" style="height: 250px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.5426291010544!2d-49.215905513863326!3d-18.413655748160394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94a10d97292a3ceb%3A0x3227568a44b0a5aa!2sLuciano%20Vieira%20-%20Escrit%C3%B3rio%20de%20Advocacia!5e0!3m2!1spt-BR!2sbr!4v1747685511104!5m2!1spt-BR!2sbr"
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