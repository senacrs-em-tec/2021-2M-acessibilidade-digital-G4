<?php

session_start();

include_once "../includes/db.php";

$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'logoff':
        $_SESSION['LOGIN'] = '';

        unset($_SESSION['LOGIN']);

        header('location: ./index.php?msg=3');

    case 'login':
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE Email = '".$email."' AND Senha = '".$senha."'";

        $resultado = mysqli_query($conn, $sql);

        $dados = mysqli_fetch_array($resultado);

        if (!empty($dados)) {
            $_SESSION['LOGIN'] = array('Nome'=>$dados['Nome']);

            header('location: ./post-lista.php');
        }
        
        else {
            header('location: ./index.php?msg=1');
        }
}

?>
