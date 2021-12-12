<?php

include_once "includes/head.php";

include_once "includes/menu.php";

include_once "includes/db.php";

?>

<header class="masthead" style="background-image: url('assets/img/daltonismo3.png')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Baixa Visão e Daltonismo</h1>
                    <span class="subheading">Cartilha Digital dedicada à usabilidade</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php

            if (!empty($_GET["cid"])) {
                $categoriaId = $_GET["cid"];
                $sql = "SELECT * FROM posts WHERE CategoriaID = $categoriaId";     
            } else {
                $sql = "SELECT * FROM posts ORDER BY `Data` DESC";
            }
                   
            $resultado = mysqli_query($conn, $sql);

            if ($resultado) {
                while ($row = mysqli_fetch_array($resultado)) {

                    $titulo = $row['Titulo'];
                    $subtitulo = $row['Subtitulo'];
                    $autor = $row['Autor'];
                    $postId = $row['PostID'];
                    $data = date_create($row['Data']);
                    $data = date_format($data,"d/m/Y");
                    
                    ?>
                    <div class="post-preview">
                        <a href="post.php?pid=<?php echo $postId; ?>">
                            <h2 class="post-title"><?php echo $titulo; ?></h2>
                            <h3 class="post-subtitle"><?php echo $subtitulo; ?></h3>
                        </a>
                        <p class="post-meta">
                            Postado por
                            <a href="#!"><?php echo $autor; ?></a>
                            em <?php echo $data; ?>
                        </p>
                    </div>
                    <hr class="my-4" />
                    <?php
                }
            }

            ?>

            <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">MAIS ANTIGAS →</a></div> -->
        </div>
    </div>
</div>

<?php

include_once "includes/footer.php";

?>