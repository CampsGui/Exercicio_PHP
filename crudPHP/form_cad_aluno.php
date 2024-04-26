    <?php include "header.php"; ?>
    <hr><br>

    <form action="cadastro_aluno.php" method="post">
        <label for="nome_aluno">Nome Completo: </label>
        <input type="text" name="nome_aluno" id="nome_aluno">
        <label for="email_aluno">E-mail: </label>
        <input type="text" name="email_aluno" id="email_aluno">
        <label for="telefone_aluno">Telefone: </label>
        <input type="text" name="telefone_aluno" id="telefone_aluno">  <br>  <br>  <br>
        <input type="submit" value="Cadastrar aluno">
    </form>

    <br><br><hr>
    <?php include "footer.php"; ?>


