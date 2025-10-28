<!DOCTYPE html>

<?php 
include 'conexao_sala.php';

$sql = "SELECT nome,mensagem,data_postagem FROM grp_7_formatada ORDER BY id DESC";

$resultado = $conexao->query($sql);

$i = 0;
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/historias_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inder&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>História e Memórias Familiares de Avaré</title>
</head>

<body>
    <?php 

    if(isset($_GET['status']) && $_GET['status'] == 'sucesso'){
        echo '<script src="script.js"> </script>';
    } elseif (isset($_GET['status']) && $_GET['status'] == 'falha'){
        echo 'Erro ao inserir';
    };

    ?>
    <div class="container">
        <header>
        <div class="menu estrutura">
            <nav>
                <a href="./lendas.php">Lendas</a>
                <a href="#historia">Histórias</a>
                <a href="./conteasua.php">Conte a sua historia</a>
            </nav>
        </div>
        </header>
        <div class="assunto" id="home">
            <div class="inicio">
                <h1 id="titulo">História e Memórias Familiares de Avaré</h1>
                <p class="subtitulo">Preserve e compartilhe as histórias que fazem parte da nossa cidade</p>
</div>
            <div class="mais subtitulo">Desça a página e veja histórias familiares de Avaré</div>
        </div>
        <div class="contadas">
            <div id="historia">
            
                <?php
                if ($resultado->num_rows > 0){
                    while($linha = $resultado->fetch_assoc()){
                        if($i == 3){
                            break;
                        }
                        echo "<div class= 'mensagem'>";
                        echo "<div class='mensagem-header'>";
                        echo "<h2 id='titulo-Mensagem'>".$linha["nome"]."<h2>"."<h2 id='titulo-Mensagem'>".$linha["data_postagem"]."<h2>";
                        echo "</div>";
                        echo "<p class='subtitulo'>".$linha["mensagem"]."</p>";
                        echo "</div>";
                    
                        $i++;
                    }}
                else{
                    echo "<div class='mensagem'><p>Nenhum usuario encontrado</p></div>";
                }?>
  
                <details><summary>Mais histórias</summary>
                <?php
                include 'conexao_sala.php';

                $sql = "SELECT nome,mensagem,data_postagem FROM grp_7_formatada ORDER BY id DESC";

                $resultado = $conexao->query($sql);
                $i = 0;
                
                if ($resultado->num_rows > 0){
                    while($linha = $resultado->fetch_assoc()){
                        if($i < 3){
                            $i++;
                            continue;
                        }
                        echo "<div class= 'mensagem'>";
                        echo "<div class='mensagem-header'>";
                        echo "<h2 id='titulo-Mensagem'>".$linha["nome"]."<h2>"."<h2 id='titulo-Mensagem'>".$linha["data_postagem"]."<h2>";
                        echo "</div>";
                        echo "<p class='subtitulo'>".$linha["mensagem"]."</p>";
                        echo "</div>";
                    }}
                else{
                    echo "<div class='mensagem'><p>Nenhum usuario encontrado</p></div>";
                }?>
            </details>
                
            </div>
        </div>
        <footer>
            <div class="rodape">
            <img src="./assets/SENAI-SP.jpg" alt="logo sesi" class="img-rodape">
            <img src="./assets/Sesi-SP.jpg" alt="logo senai" class="img-rodape">
            </div>
        </footer>
    </div>

</body>
</html>