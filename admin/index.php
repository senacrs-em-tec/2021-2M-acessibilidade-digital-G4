<?php

    include_once "../includes/db.php";

?>


<main>
    <h2>Administração de Login</h2>

    <?php

    $mensagem = array(
        1=>'Usuário ou senha inválidos!',
        2=>'Voce precisa ter um usuário válido para acessar!',
        3=>'Você saiu, volte sempre.'
    );

    if (isset($_GET['msg']) || is_numeric($_GET)) {
        $cod = $_GET['msg'];
    ?>

    <h3><?php echo $mensagem[$cod];?></h3>

    <?php
    }
    ?>

    <form action="login-processa.php" method="post">
        <input type="hidden" value="login" name="acao"><br>
        <label for="email">E-mail:</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha"><br>
        <hr>
        <input type="submit" value="Login">
    </form>
</main>