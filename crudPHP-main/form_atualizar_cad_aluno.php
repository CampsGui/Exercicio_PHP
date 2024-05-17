<?php
    //Incluir o cabeçalho do site
    include "header.php";

    //Incluir o arquivo de conexão com o banco de dados
    include "database.php";

    //Resgatar o Id via GET pelo link do listar alunos
    $id_aluno_update = $_GET['id_aluno'];

    //Declarar uma variavel e inserir o comando em Sql para consulta por id
    $sql_id = "SELECT * FROM sge_alunos WHERE sge_alunos.id_aluno = '$id_aluno_update'";

    //Utiliza a função msqli_query e armazena o resultado em uma variavel
    $consulta_id = mysqli_query($conexao, $sql_id);

    //Converter o resultado da consulta SQL para um array associativo
    $dados_aluno_id = mysqli_fetch_array($consulta_id);

?>
    <br>
    <div class="container mt-3">
        <h2>Atualização de Cadastro</h2>
        <p>Todos os campos devem estar preenchidos</p>
        <form action="atualizar_cadastro_aluno.php" method="post">
            <input type="hidden" name="id_aluno" value=<?php echo $dados_aluno_id['id_aluno'];?>
            <div class="mb-3 mt-3"> 
                <label for="nome_aluno">Nome Completo: </label>
                <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" value="<?php echo $dados_aluno_id['nome_aluno'];?>"
            </div>
            <div class="mb-3"> 
                <label for="email_aluno">E-mail: </label>
                <input type="text" name="email_aluno" id="email_aluno" class="form-control" value="<?php echo $dados_aluno_id['email_aluno'];?>"
            </div>
            <div class="mb-3> 
                <label for="telefone_aluno">Telefone: </label>
                <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control" value="<?php echo $dados_aluno_id['telefone_aluno'];?>"
                <br>  
            </div>
            <br>  
            <input type="submit" value="Atualizar Cadastro" class="btn btn-primary">
        </form>
    </div>
    <br><br>
    <a href="listar_aluno.php" class="back-button"><img src="seta.png"  width = "30px"  height ="30px" alt="img"></a>

    <?php include "footer.php"; ?>


