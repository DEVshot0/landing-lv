// Inicializa os tooltips
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
tooltipTriggerList.map(function (tooltipTriggerEl) {
    // Configuração especial para o botão do WhatsApp
    if (tooltipTriggerEl.classList.contains('whatsapp-btn')) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            customClass: 'whatsapp-tooltip'
        });
    }
    return new bootstrap.Tooltip(tooltipTriggerEl);
});