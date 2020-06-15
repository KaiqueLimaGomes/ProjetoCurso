<?php
    session_start();
    include_once ('../controller/db_connect.php');
    $cpf = filter_input(INPUT_POST, 'cpf');;
    $verificacpf = mysqli_query($conecta,"SELECT * FROM usuarios WHERE cpf='$cpf'"); //verifica se existe algum usuario com esse CPF
    if(!empty($cpf)){
        if(mysqli_num_rows($verificacpf)>0){    
            $resultado = "DELETE FROM usuarios WHERE cpf='$cpf'";
            $executa = mysqli_query($conecta,$resultado);
            echo "<script>
                alert('Registro deletado com sucesso!');
                window.location.href = '../paginas/excluir.php';
                </script>";
        }
        else{
            echo "<script>
                alert('CPF não encontrado!');
                window.location.href = '../paginas/excluir.php';
                </script>";
        }    
    }
    else{
        echo "<script>
                alert('Digite algum CPF!');
                window.location.href = '../paginas/excluir.php';
                </script>";
    $conecta->close();
    }
?>
