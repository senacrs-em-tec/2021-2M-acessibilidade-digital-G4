<?php

    include_once "../includes/db.php";

?>

<?php

if (isset($_GET['id']) || !empty($_GET['ID'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE PostID = ".$id;

    $resultado = mysqli_query($conn, $sql);

    $dados = mysqli_fetch_array($resultado);
} else {
    $id = "";
    $dados["Titulo"] = "";
    $dados["Subtitulo"] = "";
    $dados["CategoriaID"] = "";
    $dados["Imagem"] = "";
    $dados["Paragrafos"] = "";
    $dados["ImagemCONT"] = "";
    $dados["TextoImagemCONT"] = "";
    $dados["Autor"] = "";
    $dados["CategoriaID"] = "";
}

?>

<main>
    <h2>Administração de Posts</h2>
    <a href="post-lista.php">Listagem</a>
    <hr>
    <form action="post-processa.php" method="post" enctype="multipart/form-data">
        <label for="acao">Ação:</label><br>
        <input type="text" value="salvar" name="acao" readonly><br>
        <label for="id">ID do Post:</label><br>
        <input type="text" name="id" value="<?php echo $id;?>" readonly><br>
        <label for="titulo">Titulo:</label><br>
        <input type="text" name="titulo" id="titulo" value="<?php echo $dados['Titulo'];?>"><br>
        <label for="subtitulo">Subtitulo:</label><br>
        <input type="text" name="subtitulo" id="subtitulo" value="<?php echo $dados['Subtitulo'];?>"><br>
        <label for="autor">Autor:</label><br>
        <input type="text" name="autor" id="autor" value="<?php echo $dados['Autor'];?>"><br>
        <label for="categoriaid">Categoria ID do Post:</label><br>
        <input type="text" name="categoriaID" id="categoriaID" value="<?php echo $dados['CategoriaID'];?>"><br>
        <label for="paragrafos">Paragrafos:</label><br>
        <textarea name="paragrafos" id="paragrafos"><?php echo $dados['Paragrafos'];?></textarea><br>
        <label for="imagem">Imagem Topo:</label><br>
        <input type="text" value="<?php echo $dados["Imagem"];?>" name="imagem"><br>
        <label for="imagem">Imagem Topo:</label><br>
        <?php
        if (!empty($dados["Imagem"])) {
            ?>
                <img src="../assets/img/<?php echo $dados["Imagem"];?>" width="150"><br>
            <?php
        }
        ?>
        <input type="file" name="imagem"><br>

        <label for="imagemCONT">Imagem Conteudo:</label><br>
        <input type="text" value="<?php echo $dados["ImagemCONT"];?>" name="imagemCONT"><br>
        <label for="imagemCONT">Imagem Conteudo:</label><br>
        <?php
        if (!empty($dados["ImagemCONT"])) {
            ?>
                <img src="../assets/img/<?php echo $dados["ImagemCONT"];?>" width="150"><br>
            <?php
        }
        ?>
        <input type="file" name="imagemCONT"><br>
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>