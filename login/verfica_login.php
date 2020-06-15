<?php
    session_start();
    include_once ('../controller/db_connect.php');//Faz a conexão com o Banco de dados
    $login = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'pass');
    $valida = "SELECT * FROM usuarios WHERE email='$login' AND senha='$senha'" ;
    $resultado = $conecta->query($valida);
    if($login!="admin@admin.com"){
        if ($resultado->num_rows > 0) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location: ../paginas/aluno.php');//redireciona para a página de acesso
        }
        else{
            session_unset();//remove todas as variáveis de sessão
            session_destroy();//destroi a sessão
            echo "<script> 
                    alert('Login ou senha incorreto1');
                    window.location.href = 'index.php';
                </script>";
        }
    }
    else{
        if ($resultado->num_rows > 0) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location: ../paginas/admin.php');//redireciona para a página de acesso
        }
        else{
            session_unset();//remove todas as variáveis de sessão
            session_destroy();//destroi a sessão
            echo "<script> 
                    alert('Login ou senha incorreto2');
                    window.location.href = 'index.php';
                </script>";
        }
    }   
?>
