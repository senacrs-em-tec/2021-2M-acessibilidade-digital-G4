<?php

include_once "includes/head.php";

include_once "includes/menu.php";

include_once "includes/db.php";

$postId = $_GET["pid"];

?>

<?php

$sql = "SELECT * FROM posts WHERE PostID = $postId";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {

        $titulo = $row['Titulo'];
        $subtitulo = $row['Subtitulo'];
        $autor = $row['Autor'];
        $imagem = $row['Imagem'];
        $data = date_create($row['Data']);
        $data = date_format($data,"d/m/Y");
        $imagemCONT = $row['ImagemCONT'];
        $textoImagemCONT = $row['TextoImagemCONT'];
        $paragrafos = $row['Paragrafos'];

        $formatado = "<p>";
        $formatado .= str_replace("%p%", "</p><p>", $paragrafos);
        $formatado = str_replace("%t%", "</p><h2 class=\"section-heading\">", $formatado);
        $formatado = str_replace("%t/%", "</h2><p>", $formatado);
        $formatado = str_replace("%ul%", "</p><ul>", $formatado);
        $formatado = str_replace("%ul/%", "</ul><p>", $formatado);
        $formatado = str_replace("%li%", "<li>", $formatado);
        $formatado = str_replace("%li/%", "</li>", $formatado);
        $formatado = str_replace("%str%", "<strong>", $formatado);
        $formatado = str_replace("%str/%", "</strong>", $formatado);
        $formatado = str_replace("%img%", "</p><a href=\"#!\"><img class=\"img-fluid\" src=\"assets/img/$imagemCONT\" alt=\"$textoImagemCONT\" /></a> <span class=\"caption text-muted\">$textoImagemCONT</span>", $formatado);
        $formatado .= "</p>";

        ?>
        <header class="masthead" style="background-image: url('assets/img/<?php echo $imagem; ?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $titulo; ?></h1>
                            <h2 class="subheading"><?php echo $subtitulo; ?></h2>
                            <span class="meta">
                                Postado por
                                <a href="#"><?php echo $autor; ?></a>
                                em <?php echo $data; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php
    }
}

?>

<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7"> 

                <?php
                    echo $formatado;
                ?>

                <p>
                    Texto escrito por
                    <a href="http://spaceipsum.com/"> <?php echo $autor; ?></a>
                    &middot; Imagens de 
                    <a href="https://www.tuasaude.com/daltonismo/">Tua Saúde</a>
                </p>
            </div>
        </div>
    </div>
</article>

<?php

include_once "includes/footer.php";

?>