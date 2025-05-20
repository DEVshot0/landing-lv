<!-- Seção Contato -->
<section id="contato" class="contato d-flex align-items-center text-light" style="background-color: #0c1b33; min-height: 100vh; position: relative;">
    <div class="container py-5 position-relative z-2">
        <div class="text-center mb-5">
            <i class="fas fa-envelope fa-3x text-white mb-3"></i>
            <h2 class="display-5 fw-bold animate__animated animate__fadeInDown" style="color: #f8f9fa;">Fale Conosco</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 fade-from-line-right">
                <form id="form-contato" class="text-light">
                    <div class="mb-3">
                        <label for="contato-nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="contato-nome" placeholder="Seu nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="contato-telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="contato-telefone" placeholder="(00) 00000-0000">
                    </div>
                    <div class="mb-3">
                        <label for="contato-email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="contato-email" placeholder="exemplo@email.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="contato-mensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="contato-mensagem" rows="4" placeholder="Digite sua mensagem..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-light w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("form-contato");

            form.addEventListener("submit", async function (e) {
                e.preventDefault();

                const data = {
                    nome: document.getElementById("contato-nome").value,
                    telefone: document.getElementById("contato-telefone").value,
                    email: document.getElementById("contato-email").value,
                    mensagem: document.getElementById("contato-mensagem").value
                };

                try {
                    const response = await fetch("/formulario.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify(data)
                    });

                    const result = await response.json();

                    if (result.success) {
                        alert("Mensagem enviada com sucesso!");
                        form.reset();
                    } else {
                        alert("Erro ao enviar: " + (result.error || "verifique os dados."));
                    }

                } catch (error) {
                    console.error("Erro ao enviar:", error);
                    alert("Erro inesperado ao enviar o formulário.");
                }
            });
        });
    </script>
</section>
