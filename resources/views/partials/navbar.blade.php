<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container d-flex justify-content-center">
        <a class="navbar-brand" href="#home">
            <img src="{{ asset('images/logo-lv.png') }}" alt="Logo LV" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#quem-somos">Quem somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#como-trabalhamos">Como trabalhamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#onde-trabalhamos">Onde trabalhamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#areas-atuacao">Areas de atuação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#instagram">Instagram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#contato">Contato</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-outline-dark" href="tel:+5564996665595">
                        <i class="bi bi-telephone"></i> (64) 99666-5595
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Botão flutuante voltar ao topo (somente mobile, fixo no TOPO DIREITO) -->
<a href="#home" id="back-to-top" class="btn btn-dark rounded-circle shadow d-lg-none">
    <i class="fas fa-chevron-up"></i>
</a>

<style>
    .navbar {
        background-color: rgba(255, 255, 255, 0.95) !important;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        padding: 15px 0;
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        padding: 10px 0;
        background-color: rgba(255, 255, 255, 0.98) !important;
    }

    .nav-link {
        position: relative;
        font-weight: 500;
        color: #0c1b33 !important;
    }

    .nav-link:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #b08b42;
        transition: width 0.3s ease;
    }

    .nav-link:hover:after {
        width: 100%;
    }

    .navbar-nav .active {
        color: #b08b42 !important;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    html {
        scroll-behavior: smooth;
    }

    section {
        scroll-margin-top: 80px;
    }

    /* Estilo da seta flutuante fixada no TOPO DIREITO */
    #back-to-top {
        position: fixed;
        top: 15px;
        right: 15px;
        display: none;
        z-index: 1050;
        width: 45px;
        height: 45px;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        padding: 0;
    }

    @media (min-width: 992px) {
        #back-to-top {
            display: none !important;
        }
    }
</style>

<script>
    // Efeito de scroll na navbar
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Mostrar ou ocultar seta
        const backToTopBtn = document.getElementById('back-to-top');
        if (window.scrollY > 200) {
            backToTopBtn.style.display = 'flex';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });

    // Scroll suave para seções
    const scrollLinks = document.querySelectorAll('.scroll-link');

    scrollLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Scroll suave ao clicar na seta flutuante
    document.getElementById('back-to-top').addEventListener('click', function (event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
