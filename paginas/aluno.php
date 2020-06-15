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
        <title>Aluno</title>
        <link href="../css/Estilo.css" rel="stylesheet">
    </head>
    <body id="fundo">
        <div id="titulo">
            <h1 style="text-align:center;">
            <font size="30" color="blue" face="Verdana">Projeto de Cursos</font>
            </h1>
            <h2 style="text-align:center;">
            <font size="10" color="red" face="Verdana">Aluno</font>
            </h2>
            <br/>
        </div>
        <ul id="menu-bar">
            <li class="active"><a href="aluno.php.php">Home</a></li>
            <li><a href="#java">Java</a></li>
            <li><a href="#mysql">Mysql</a></li>
            <li><a href="#c">C +</a></li>
            <li><a href="#python">Python</a></li>
            <li><a href="../controller/logout.php">Sair</a></li>
        </ul>
        <br/><br/><br/>
        <div class="aluno">
            <div id="java">
                <img src="../view/java.png" width="65" heigth="20">
                <h1>Linguagem de Programação Java - Básico</h1>

                <p>Em 2015, a linguagem Java completou 20 anos de existência.
                    Entre tantas linguagens de programação existentes, o Java é considerado uma linguagem moderna
                    e orientada a objetos, que se adaptou muito bem à internet e aos dispositivos móveis
                    (tablets e smartphones).
                    Na atualidade, a maior parte dos aplicativos desenvolvidos para dispositivos móveis é desenvolvido
                    em Java, o que faz com que os programadores que dominam essa linguagem sejam profissionais
                    bastante procurados e valorizados no mercado de trabalho.</p>
                    <hr />
            </div>
            <div id="mysql">
                <img src="../view/mysql.jpg" width="180" heigth="60" text-align="left">
                <h1>Mysql </h1>

                <p>O MySQL é um sistema gerenciador de banco de dados relacional de código aberto usado na
                    maioria das aplicações gratuitas para gerir suas bases de dados. O serviço utiliza a
                    linguagem SQL (Structure Query Language – Linguagem de Consulta Estruturada), que é a
                    linguagem mais popular para inserir, acessar e gerenciar o conteúdo armazenado num banco
                    de dados.</p>
                <p>Na criação de aplicações web abertas e gratuitas, o conjunto de aplicações mais usado
                    é o LAMP, um acrônimo para Linux, Apache, MySQL e Perl/PHP/Python. Nesse conjunto de
                    aplicações, inclui-se, respectivamente, um sistema operacional, um servidor web,
                    um sistema gerenciador de banco de dados e uma linguagem de programação. Assim, o
                    MySQL é um dos componentes centrais da maioria das aplicações públicas da Internet.</p>
                <hr />
            </div>
            <div id="c">
                <img src="../view/c.png" width="100" heigth="30">
                <h1>Liguagem C </h1>

                <p>Conceito de linguagem de programação, linguagens de alto e baixo nível, linguagens genéricas
                    e especificas.Um programa de computador é um conjunto instruções que representam um algoritmo
                    para a resolução de algum problema. Estas instruções são escritas através de um conjunto de códigos
                    (símbolos e palavras). Este conjunto de códigos possui regras de estruturação lógica e sintática
                    própria. Dizemos que este conjunto de símbolos e regras formam uma linguagem de programação.</p>
                <hr />
            </div>
            <div id="python">
                <img src="../view/python.jpg" width="150" heigth="50">           
                <h1>Python</h1>

                <p>O Python foi desenvolvido para ser focado no programador, visando priorizar o esforço do
                    homem em relação à máquina e tem como objetivo chave aumentar a produtividade.A Linguagem Python
                    foi criada no final da década de 80 por Guido Van Rossum, um importante programador e pesquisador
                    do Instituto Nacional de Matemática e Ciência da Computação da Holanda. O holandês é um grande
                    adepto da melhoria contínua, pois o Python só surgiu devido à necessidade do aprimoramento de
                    outro software de programação usado na instituição até então chamado de ABC (não confunda com
                    curva ABC). O processo de melhoria buscava torná-lo mais ágil e otimizar a sua capacidade
                    interação com um sistema operacional de interesse na época, com redução do tempo de execução
                    dos programas para garantir maior eficiência do conjunto.</p>
                <hr />
            </div>
        </div>
    </body>
</html>