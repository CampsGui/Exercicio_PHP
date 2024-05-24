<!-- <link rel="stylesheet" href="./css/style.css"> -->
    <?php include "header.php"; ?>
    <br>
    <div class="container mt-3">
        <form action="cadastro_aluno.php" method="post">
            <div class="mb-3 mt-3"> 
                <label for="nome_aluno">Nome Completo: </label>
                <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" placeholder="Informe seu nome completo">
            </div>

            <div class="mb-3"> 
                <label for="email_aluno">E-mail: </label>
                <input type="text" name="email_aluno" id="email_aluno" class="form-control" placeholder="Informe seu email">
            </div>
            <div class="mb-3> 
                <label for="telefone_aluno">Telefone: </label>
                <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control" placeholder="Informe seu telefone">  <br>  
            </div>
            <input type="submit" value="Cadastrar aluno" class="btn btn-primary">
        </form>
    </div>
    <br><br>
    <a href="index.php" class="back-button"><img src="seta.png"  width = "30px"  height ="30px" alt="img"></a>

    <?php include "footer.php"; ?>