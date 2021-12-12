<?php

    include_once "../includes/db.php";

?>

<?php

if (isset($_GET['id']) || !empty($_GET['ID'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM categorias WHERE CategoriaID = ".$id;

    $resultado = mysqli_query($conn, $sql);

    $dados = mysqli_fetch_array($resultado);
} else {
    $id = "";
    $dados["Nome"] = "";
    $dados["Imagem"] = "";
    $dados["Descricao"] = "";
}

?>

<main>
    <h2>Administração das Categorias</h2>
    <a href="categoria-lista.php">Listagem</a>
    <hr>
    <form action="categoria-processa.php" method="post" enctype="multipart/form-data">
        <label for="acao">Ação:</label><br>
        <input type="text" value="salvar" name="acao" readonly><br>
        <label for="imagem">Nome da Imagem:</label><br>
        <input type="text" value="<?php echo $dados["Imagem"];?>" name="imagem"><br>
        <label for="id">ID da Categoria:</label><br>
        <input type="text" name="id" value="<?php echo $id;?>" readonly><br>
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $dados['Nome'];?>"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao"><?php echo $dados['Descricao'];?></textarea><br>
        <label for="imagem">Imagem:</label><br>
        <?php
        if (!empty($dados["Imagem"])) {
            ?>
                <img src="../assets/categorias/<?php echo $dados["Imagem"];?>" width="150"><br>
            <?php
        }
        ?>
        <input type="file" name="foto">
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>