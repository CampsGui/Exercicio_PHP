<?php
//1º incluir arquivo de conexão com banco de dados
include "database.php";
//o header é só pra carregar as config em HTML e CSS do site
include "header.php"; 

//2º Declarar uma variavel para receber o comando em SQL
$sql_listar = SELECT * FROM `sge_alunos`;

/*3º Utilizar a função mysqli_query conectar ao banco e executar o comando em SQL.
É necessário armazenar o resltado em uma váriavel*/
$consulta_bd = mysqli_query($conexao, $sql_listar);

?>

<!-- Tabela para listar os dados -->
<table>
    <!-- Cabeçalho da Tabela -->
    <thead>
        <!-- tr - table row - linha da tabela -->
        <tr>
            <!-- th - nome que vai no indice da coluna -->
            <th>Nome: </th>
            <th>Email: </th>
            <th>Telefone: </th>
            <th>Atualizar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <!-- Corpo da Tabela -->
    <tbody>
        <?php while($dados_bd = mysqli_fetch_array($consulta_bd)): ?>
        <tr>
            <!-- td - table data - campo que vai receber o valor -->
            <td><?php echo $dados_bd['nome_aluno']; ?></td>
            <td><?php echo $dados_bd['email_aluno']; ?></td>
            <td><?php echo $dados_bd['telefone_aluno']; ?></td>
            <td><a href=""><img src="./img/icons/update.png" alt="atualizar"></a></td>
            <td><a href=""><img src="./img/icons/delete.png" alt="deletar"></a></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include "footer.php"; ?>