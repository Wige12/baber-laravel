<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia</title>
    <!-- Inclua os estilos do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Adicione estilos personalizados aqui, se necessário */
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Barbearia</h1>
    <p class="text-center">Seja bem-vindo à nossa barbearia!</p>

    <div class="text-center">
        <button id="agendamentoBtn" class="btn btn-primary">Agendar</button>
    </div>
</div>

<!-- Inclua o Bootstrap JS e o Popper.js antes do jQuery -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
    // Adicione o script JS para o redirecionamento aqui
    document.getElementById("agendamentoBtn").addEventListener("click", function() {
        // Substitua 'URL_DO_SEU_FORMULARIO_DE_AGENDAMENTO' pela URL real do seu formulário de agendamento
        window.location.href = '/agendamento';
    });
</script>

</body>
</html>
