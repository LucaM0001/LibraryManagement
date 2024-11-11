<?php
    $title = "Accueil";
    include_once "header.php"
?>
<body>
    <?php include_once "navbar.php" ?>
    <div class="container" id="add_form">
        <div class="w-50">
            <h2 class="text-warning fw-bold">Mise à jour Livre</h2>
            <hr />
        <form action="<?= base_url("update/" . $book["id"])?>" method="post">
            <div class="mb-3">
                <label for="title" class="form-label text-warning">Titre</label>
                <input type="text" id="title" class="form-control" placeholder="titre du livre" value="<?= $book["title"]?>" name="title">
            </div>

            <div class="mb-3">
                <label for="author" class="form-label text-warning">Auteur</label>
                <input type="text" id="author" class="form-control" placeholder="auteur du livre" value="<?= $book["author"]?>" name="author">
            </div>

            <div class="mb-3">
                <label for="numberOfPages" class="form-label text-warning">Nombre de pages</label>
                <input type="number" id="numberOfPages" class="form-control" placeholder="200" value="<?= $book["numberOfPages"]?>" name="numberOfPages">
            </div>

            <button type="submit" class="btn btn-warning">Appliquer</button>
        </div>
        </form>
    </div>
    <?php include_once "footer.php" ?>
</body>

</html>