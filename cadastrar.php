<?php
include 'conexao_sala.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $conexao->real_escape_string($_POST['nome']);
    $email = $conexao->real_escape_string($_POST['email']);
    $historia = $conexao->real_escape_string($_POST['historia']);


    if(empty($nome) || empty($email) || empty($historia)){
        echo "Por favor, preencher todos os campos.";
        exit;
    }

    $sql = 'INSERT INTO grp_7 (nome, email, mensagem) VALUE (?,?,?)';

    $stmt = $conexao->prepare($sql);

    if($stmt === false){
        die("Erro na preparação do comando: " .$conexao->error);
    }

    $stmt->bind_param("sss", $nome,$email,$historia);

    if($stmt->execute()){

        
        header("Location: index.php?status=sucesso");
        


    } else{
        if($conexao->error == 1062){
            echo "Mensagem já cadastrado";
                    header("Location: index.php?status=falha");

        } else {
            echo "Erro ao enviar:" . $stmt -> error;
        }
    }

    $stmt->close();
    $conexao->close();
}else{
    header("Location: index.php?sucesso=falha");
    exit();
}

?>
