<html>
    <head>
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
        <title>Administrador</title>
        <link href="../css/Estilo.css" rel="stylesheet">
    </head>
    <body id="fundo">
        <div id="titulo">
            <h1 style="text-align:center;">
            <font size="30" color="blue" face="Verdana">Projeto de Cursos</font>
            </h1>
            <br />
        </div>
        <ul id="menu-bar">
            <li class="active"><a href="admin.php">Home</a></li>
            <li><a href="pesquisar.php">Pesquisar</a></li>
            <li><a href="alterar.php">Editar</a></li>
            <li><a href="incluir.php">Incluir</a></li>
            <li><a href="excluir.php">Deletar</a></li>
            <li><a href="../controller/logout.php">Sair</a></li>
        </ul>
        <div>
            <h2 style="text-align:center;">
            <br/>
            <font size="10" color="blue" face="Verdana">Administrador</font>
            </h2>
            <br />
        </div>
        <div>
            <img src="../view/meu.jpg" style="float:left;" alt="imagem" height="350" width="350">
            <div id="espacamento">
                <font face="Decorative" size="6px" >
                O diploma de um curso superior nem sempre é suficiente
                em um mercado de trabalho cada vez mais competitivo. Para conquistar maior destaque e oportunidades 
                na carreira, é importante investir em cursos para maior qualificação profissional, se aperfeiçoar e
                expandir seus conhecimentos.
                </font>
            </div>
        </div>
        
    </body>
</html>