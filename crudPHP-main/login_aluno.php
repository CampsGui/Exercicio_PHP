<?php include "header.php"; ?>
    <br>
    <div class="container mt-3">
        <form action="valida_login_aluno.php" method="post">
        <h2>Login</h2>
            <div class="mb-3 mt-3"> 
                <label for="nome_aluno">Nome de usuário: </label>
                <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" placeholder="Informe seu nome de login">
            </div>
            <div class="mb-3"> 
                <label for="email_aluno">E-mail: </label>
                <input type="text" name="email_aluno" id="email_aluno" class="form-control" placeholder="Informe seu email">
            </div>

            <div class="mb-3"> 
                <label for="email_aluno">Senha: </label>
                <input type="password" name="email_aluno" id="email_aluno" class="form-control" placeholder="Informe sua senha">
            </div>
            <input type="submit" value="Login" class="btn btn-primary">
        </form>
    </div>
    <br><br>
    <a href="index.php" class="back-button"><img src="seta.png"  width = "30px"  height ="30px" alt="img"></a>

    <?php include "footer.php"; ?>