<?php
    session_start();
    include_once ('../controller/db_connect.php');
    $conNome = filter_input(INPUT_POST, 'nome');
    $conCPF = filter_input(INPUT_POST, 'cpf');
    if(empty($conNome) && empty($conCPF)){
        $sql ="SELECT * FROM usuarios";
        $resultado = mysqli_query($conecta, $sql);
        $numrow = mysqli_num_rows($resultado);
    }
    else{
        if(!empty($conNome) && empty($conCPF)){
            $sql ="SELECT * FROM usuarios WHERE nome LIKE '%$conNome%'";
            $resultado = mysqli_query($conecta, $sql);
            $numrow = mysqli_num_rows($resultado);
            if($numrow==0){
                echo "<script>
                alert('Nenhum aluno encontrado!');
                window.location.href = '../paginas/pesquisar.php';
                </script>";
            } 
        }
        if(empty($conNome) && !empty($conCPF)){
            $sql ="SELECT * FROM usuarios WHERE cpf LIKE '%$conCPF%'";
            $resultado = mysqli_query($conecta, $sql);
            $numrow = mysqli_num_rows($resultado);
            if($numrow==0){
                echo "<script>
                alert('Nenhum aluno encontrado!');
                window.location.href = '../paginas/pesquisar.php';
                </script>";
            } 
        }
        if(!empty($conNome) && !empty($conCPF)){
            $sql ="SELECT * FROM usuarios WHERE nome LIKE '%$conNome%' AND cpf LIKE '%$conCPF%'";
            $resultado = mysqli_query($conecta, $sql);
            $numrow = mysqli_num_rows($resultado);
            if($numrow==0){
                echo "<script>
                alert('Nenhum aluno encontrado!');
                window.location.href = '../paginas/pesquisar.php';
                </script>";
            } 
        }         
    }
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
            <li class="active"><a href="../paginas/admin.php">Home</a></li>
            <li><a href="../paginas/pesquisar.php">Pesquisar</a></li>
            <li><a href="../paginas/alterar.php">Editar</a></li>
            <li><a href="../paginas/incluir.php">Incluir</a></li>
            <li><a href="../paginas/excluir.php">Deletar</a></li>
        </ul>
        <br/><br/><br/>
        <div class="formulario">        
           <table width="100%" border="1">
                    <th align="center">Nome</th>
                    <th align="center">Sexo</th>
                    <th align="center">CPF</th>
                    <th align="center">E-mail</th>
                    <?php while ($dado = $resultado->fetch_array()){ ?>
                <tr>
                    <td align="center"><?php echo $dado["nome"] ?></td>
                    <td align="center"><?php echo $dado["sexo"] ?></td>
                    <td align="center"><?php echo $dado["cpf"] ?></td>
                    <td align="center"><?php echo $dado["email"] ?></td>
                </tr>
                    <?php }?>
            </table>
        </div>  
    </body>
</html>