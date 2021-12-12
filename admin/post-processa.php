<?php
    include_once "../includes/db.php";

    $acao = $_REQUEST['acao'];
    $id = $_REQUEST['id'];
?>

<?php

switch ($acao) {
    case 'excluir':
        $sql = "DELETE FROM posts WHERE PostID = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./post-lista.php');

        break;

    case 'salvar':
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $autor = $_POST['autor'];
        $categoriaID = $_POST['categoriaID'];
        $imagem = $_POST['imagem'];
        $data = date("Y/m/d");
        $paragrafos = $_POST['paragrafos'];
        $imagemCONT = $_POST['imagemCONT'];
        $textoImagemCONT = $_POST['textoImagemCONT'];

        if ($_FILES["foto"]["size"] > 0) {
            $uploaddir = "../assets/img/";

            $extensao = pathinfo($_FILES["foto"]["name"]);
            $nomearquivo = "post-".rand(0, 9999).".".$extensao["extension"];

            $uploadfile = $uploaddir.$nomearquivo;

            move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadfile);
        } else {
            $nomearquivo = $_POST["imagem"];
        }

        if (!isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `posts`(`Titulo`, `Subtitulo`, `Autor`, `CategoriaID`, `Imagem`, `Data`, `Paragrafos`, `ImagemCONT`, `TextoImagemCONT`) VALUES ('".$titulo."','".$subtitulo."','".$autor."','".$categoriaID."','".$imagem."','".$data."','".$paragrafos."','".$imagemCONT."','".$textoImagemCONT."')";
        } else {
            $sql = "UPDATE `posts` SET `Titulo`='".$titulo."', `Subtitulo`='".$subtitulo."', `Autor`='".$autor."', `CategoriaID`='".$categoriaID."', `Imagem`='".$imagem."', `Data`='".$data."', `Paragrafos`='".$paragrafos."', `ImagemCONT`='".$imagemCONT."', `TextoImagemCONT`='".$textoImagemCONT."' WHERE `PostID`='".$id."'";
        }

        mysqli_query($conn, $sql);

        header('location: ./post-lista.php');
        
        break;
}

?>