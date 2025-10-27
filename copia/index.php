<!DOCTYPE html>

<?php 
include 'conexao_sala.php';

$sql = "SELECT nome,mensagem FROM grp_7 ORDER BY id DESC";

$resultado = $conexao->query($sql);
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/historias_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inder&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>História e Memórias Familiares de Avaré</title>
</head>

<body>
    <div class="container">
        <div class="menu estrutura">
            <nav>
                <a href="#historia">Histórias</a>
                <a href="#home">Home</a>
                <a href="./conteasua.php">Conte a sua historia</a>
            </nav>
        </div>
        <div class="assunto" id="home">
            <header class="inicio">
                <h1 id="titulo">História e Memórias Familiares de Avaré</h1>
                <p class="subtitulo">Preserve e compartilhe as histórias que fazem parte da nossa cidade</p>
            </header>
            <div class="mais subtitulo">Desça a página e veja histórias familiares de Avaré</div>
        </div>
        <div class="contadas">
            <div id="historia">
                <?php
                if ($resultado->num_rows > 0){
                    while($linha = $resultado->fetch_assoc()){
                        echo "<div class= 'mensagem'>";
                        echo "<h2 id='titulo-Mensagem'>".$linha["nome"]."<h2>";
                        echo "<p class='subtitulo'>".$linha["mensagem"]."</p>";
                        echo "</div>";
                    }}
                else{
                    echo "<div class='mensagem'><p>Nenhum usuario encontrado</p></div>";
                }?>
            </div>
        </div>
        <footer>
            <img src="" alt="">
        </footer>
    </div>

</body>
</html>