<?php 
        session_start();//Inicia uma nova sessão ou resume uma sessão existente
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();//remove todas as variáveis de sessão
            echo "<script>
                alert('Esta página só pode ser acessada por um usuário logado');
                window.location.href = 'index.php';
                </script>";
        }
        $logado = $_SESSION['login'];
?>
<html>
    <head>
        <title>Administrador</title>
        <link href="../css/Estilo.css" rel="stylesheet">
    </head>
    <body id="fundo">
        <div id="titulo">
            <h1 style="text-align:center;">
            <font size="30" color="blue" face="Verdana">Projeto de Cursos</font>
            </h1>
            <h2 style="text-align:center;">
            <font size="10" color="red" face="Verdana">Administrador</font>
            </h2>
            <br/>
        </div>
        <ul id="menu-bar">
            <li class="active"><a href="admin.php">Home</a></li>
            <li><a href="pesquisar.php">Pesquisar</a></li>
            <li><a href="alterar.php">Editar</a></li>
            <li><a href="incluir.php">Incluir</a></li>
            <li><a href="excluir.php">Deletar</a></li>
            <li><a href="../controller/logout.php">Sair</a></li>
        </ul>
        <br/><br/><br/>
        <div class="formulario2">
            <h2>Incluir Aluno</h2>
            <form action="../controller/IncluirAluno.php" method="POST">
                <label >Nome:</label>
                <input type="text"  name="nome" placeholder="Nome do Aluno"><br/>
                <input type="radio" name="sexo" value="Masculino" checked>
                <label >Masculino</label>
                <input type="radio" name="sexo" value="Feminino">
                <label >Feminino</label><br/><br/>
                <label >CPF:</label>
                <input type="text"  name="cpf" placeholder="CPF do aluno"><br/>
                <label >Email:</label>
                <input type="email"  name="email" placeholder="Novo Email " required><br/>
                <label >Senha:</label>
                <input type="text"  name="pass" placeholder="Nova Senha" required><br/>
                <input type="submit" value="Adicionar">
            </form>
        </div>  
    </body>
</html>