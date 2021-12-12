<?php
    include_once "../includes/db.php";

    $acao = $_REQUEST['acao'];
    $id = $_REQUEST['id'];
?>

<?php

switch ($acao) {
    case 'excluir':
        $sql = "DELETE FROM categorias WHERE CategoriaID = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./categoria-lista.php');

        break;

    case 'salvar':
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if ($_FILES["foto"]["size"] > 0) {
            $uploaddir = "../assets/categorias/";

            $extensao = pathinfo($_FILES["foto"]["name"]);
            $nomearquivo = "categoria-".rand(0, 9999).".".$extensao["extension"];

            $uploadfile = $uploaddir.$nomearquivo;

            move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadfile);
        } else {
            $nomearquivo = $_POST["imagem"];
        }

        if (!isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `categorias`(`Nome`, `Descricao`, `Imagem`) VALUES ('".$nome."','".$descricao."','".$nomearquivo."')";
        } else {
            $sql = "UPDATE `categorias` SET `Nome`='".$nome."', `Descricao`='".$descricao."', `Imagem`='".$nomearquivo."' WHERE `CategoriaID`='".$id."'";
        }

        mysqli_query($conn, $sql);

        header('location: ./categoria-lista.php');
        
        break;
}

?>