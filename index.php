<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inder&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>História e Memórias Familiares de Avaré</title>
</head>
<body>
    <div class="container">
        <header class="inicio">
            <h1 id="titulo">História e Memórias Familiares de Avaré</h1>
            <p class="subtitulo">Preserve e compartilhe as histórias que fazem parte da nossa cidade</p>
        </header>
        
        <main class="formulario">
            <form action="mensagens.php" method="POST">
                <h2>Compartilhe sua história</h2>
                <div class="campo-grupo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                </div>
                
                <div class="campo-grupo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
                </div>
                
                <div class="campo-grupo">
                    <label for="historia">Sua história</label>
                    <textarea id="historia" name="historia" cols="40" rows="6" placeholder="Conte-nos sua história familiar, memórias de Avaré, tradições ou momentos especiais que gostaria de compartilhar..." required></textarea>
                </div>
                
                <button type="submit" class="btn-enviar">
                    <span>Compartilhar História</span>
                </button>
            </form>
        </main>
    </div>
</body>
</html>