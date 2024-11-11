<?php
    $title = "Accueil";
    include_once "header.php"
?>
<body>
    <?php include_once "navbar.php" ?>
    <div id="books_container" class="container d-flex justify-content-arround gap-4">
        <?php foreach($books as $book) :?>
        <div class="card shadow-sm col-4">
                <img src="/upload/<?= $book["image"] ?>" class="img-fluid" alt="image">
            <div class="card-body">
            <p class="card-text">
                <strong>Titre</strong> : <?= $book["title"] ?> (<?= $book["numberOfPages"] ?> pages) <br />
                <strong>Auteur</strong>: <?= $book["author"] ?> <br />
                <strong>status</strong>: <?= $book["status"] ?> <br />
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="borrowing/<?= $book["id"] ?>" class="btn btn-outline-primary">Emprunter</a>
                    <a href="deliver/<?= $book["id"] ?>" class="btn btn-outline-primary">Rendre</a>
                </div>
                <small class="text-body-secondary"><?= $book["added_date"] ?></small>
            </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <?php include_once "footer.php" ?>
</body>

</html>