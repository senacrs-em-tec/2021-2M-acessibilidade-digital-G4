<?php

include_once "includes/db.php";

?>

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <?php

                $sql = "SELECT * FROM categorias";
                $resultado = mysqli_query($conn, $sql);

                if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                        ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?cid=<?php echo $row['CategoriaID']; ?>"><?php echo $row['Nome']; ?></a></li>
                        <?php
                    }
                }

                ?>

                <?php

                $ultimoPost = 0;
                $sql = "SELECT * FROM posts";
                $resultado = mysqli_query($conn, $sql);

                if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                        $ultimoPost++;
                    }
                }

                ?>

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.php?pid=<?php echo $ultimoPost ?>">Ultima Postagem</a></li>
            </ul>
        </div>
    </div>
</nav>