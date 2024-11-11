<?php
    $title = "Accueil";
    include_once "header.php"
?>
<body>
    <?php include_once "navbar.php" ?>
    <div class="container" id="add_form">
        <div class="w-50">
            <h2 class="text-success fw-bold">Ajout Livre</h2>
            <hr />
        <form method="post">
            <div class="mb-3">
                <label for="title" class="form-label text-success">Titre</label>
                <input required type="text" id="title" class="form-control" placeholder="titre du livre" name="title">
            </div>

            <div class="mb-3">
                <label for="author" class="form-label text-success">Auteur</label>
                <input required type="text" id="author" class="form-control" placeholder="auteur du livre" name="author">
            </div>

            <div class="mb-3">
                <label for="numberOfPages" class="form-label text-success">Nombre de pages</label>
                <input required type="number" id="numberOfPages" class="form-control" placeholder="200" name="numberOfPages">
            </div>

            <button type="submit" class="btn btn-success">Ajouter</button>
        </div>
        </form>
    </div>
    <?php include_once "footer.php" ?>
</body>

</html>