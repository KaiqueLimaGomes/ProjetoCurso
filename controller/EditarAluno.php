<?php
    session_start();
    include_once ('../controller/db_connect.php');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');
    $sexo = filter_input(INPUT_POST, 'sexo');
    
    $verificaCpf = mysqli_query($conecta,"SELECT * FROM usuarios WHERE cpf='$cpf'");
    
    if(!empty($cpf)){
        if(mysqli_num_rows($verificaCpf)>0){    
            $resultado = "UPDATE usuarios SET nome='$nome', sexo='$sexo', email='$email', senha='$senha' WHERE cpf='$cpf'";
            $executa = mysqli_query($conecta,$resultado);
            echo "<script>
                    alert('Registro alterado com sucesso!');
                    window.location.href = '../paginas/alterar.php';
                    </script>";
        }
        else{
            echo "<script>
                    alert('CPF do aluno não foi encontrado!');
                    window.location.href = '../paginas/alterar.php';
                    </script>";
        }    
    }
    else{
        echo "<script>
                    alert('Digite o CPF do aluno para editar.');
                    window.location.href = '../paginas/alterar.php';
                    </script>";
    }

