<?php
    include_once 'validaCPF.php';
    include_once ('../controller/db_connect.php');//Faz a conexão com o Banco de dados
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'pass');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $sexo = filter_input(INPUT_POST, 'sexo');
    
    $cpfverfica = new validaCPF($cpf);
    
    if(!empty($nome) && !empty($email) && !empty($senha)){
        $result = mysqli_query($conecta,"SELECT * FROM usuarios WHERE email = '{$email}'") or print mysql_error();
        if (mysqli_num_rows($result)>0) {
            echo "<script>
                        alert('Email já cadastrado!');
                        window.location.href = '../login/index.php';
                        </script>";
        }
        else {
            if($cpfverfica==true){
                $sql = "INSERT INTO usuarios (sexo, nome, cpf, email, senha) VALUES ('$sexo', '$nome', '$cpf', '$email', '$senha')";
                if ($conecta->query($sql) === TRUE){
                    echo "<script>
                        alert('Usuário criado com SUCESSO!');
                        window.location.href = '../login/index.php';
                        </script>";
                }    
                else {
                    echo "<script>
                        alert('Não foi possivel cadastras o usuário!');
                        </script>";
                    echo "<p style='color:red;'>Erro: " . $sql . "<br>" . $conecta->error ."<br>";
                }
            }
        }
    }
    else{
        echo "<script>
            alert('Preencha os campos corretamente');
            window.location.href = '../cadastro/index.php';
            </script>";
    }
    $conecta->close();
?>