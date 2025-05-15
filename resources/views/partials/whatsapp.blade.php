<div class="whatsapp-float">
    <a href="https://wa.me/5564996665595?text=Olá,%20gostaria%20de%20agendar%20uma%20consulta" 
       target="_blank" 
       class="whatsapp-btn"
       data-bs-toggle="tooltip" 
       data-bs-placement="left"
       data-bs-custom-class="whatsapp-tooltip"
       title="Fale conosco pelo WhatsApp">
        <i class="bi bi-whatsapp"></i>
        <span class="pulse-effect"></span>
    </a>
</div>

<style>
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1000;
    }
    
    .whatsapp-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background-color: #0c1b33; /* Azul marinho */
        color: #b08b42; /* Dourado */
        border-radius: 50%;
        font-size: 28px;
        box-shadow: 0 4px 20px rgba(12, 27, 51, 0.3);
        position: relative;
        transition: all 0.3s ease;
        border: 2px solid #b08b42; /* Borda dourada */
    }
    
    .whatsapp-btn:hover {
        background-color: #0a1529; /* Azul mais escuro */
        color: #d4af37; /* Dourado mais claro */
        transform: scale(1.1);
        border-color: #d4af37;
    }
    
    /* Efeito de pulsação */
    .pulse-effect {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(176, 139, 66, 0.4); /* Dourado com transparência */
        border-radius: 50%;
        animation: pulse 2s infinite;
        z-index: -1;
    }
    
    @keyframes pulse {
        0% {
            transform: scale(0.8);
            opacity: 0.7;
        }
        70% {
            transform: scale(1.3);
            opacity: 0;
        }
        100% {
            transform: scale(0.8);
            opacity: 0;
        }
    }
    
    /* Tooltip personalizado */
    .whatsapp-tooltip .tooltip-inner {
        background-color: #0c1b33;
        color: #b08b42;
        border: 1px solid #b08b42;
        padding: 8px 12px;
    }
    
    .whatsapp-tooltip.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before, 
    .whatsapp-tooltip.bs-tooltip-start .tooltip-arrow::before {
        border-left-color: #b08b42;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializa o tooltip
        const whatsappBtn = document.querySelector('.whatsapp-btn');
        const tooltip = new bootstrap.Tooltip(whatsappBtn);
        
        // Efeito adicional ao passar o mouse
        whatsappBtn.addEventListener('mouseenter', function() {
            this.querySelector('.pulse-effect').style.animation = 'pulse 1s infinite';
        });
        
        whatsappBtn.addEventListener('mouseleave', function() {
            this.querySelector('.pulse-effect').style.animation = 'pulse 2s infinite';
        });
    });
</script>