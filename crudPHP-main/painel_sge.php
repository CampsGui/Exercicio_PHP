    <?php include "header.php"; 

    session_start();

    $usuario = $_SESSION['usuario'];

    if($usuario['perfil'] != "admin"){ ?>
    <!-- Conteudo em HTML - Perfil Aluno -->
    <br>
    <div class="d-grid">
        <a href="listar_aluno.php" class="btn btn-primary btn-block">Listar Alunos</a><br>
    </div>
    <br
    <!-- Fim do Conteudo em HTML - Perfil Aluno -->
    <?php    
    }
    else{ ?>
    <!-- Conteudo em HTML - Perdil ADMIN -->
    <br>
    <h2>Painel Administrativo - SGE</h2>
    <hr>
    <h6>Você tem a permissão de acesso: <?php echo $usuario['perfil'] ?></h6><br>
    <div class="d-grid">
        <a href="form_cad_aluno.php" class="btn btn-primary btn-block">Cadastrar Aluno</a><br> <br>
        <a href="listar_aluno.php" class="btn btn-primary btn-block">Listar Alunos</a><br>
    </div>
    <?php
    }   
    ?>
    <?php include "footer.php"; ?>
    
