<?php
    $title = "Accueil";
    include_once "header.php"
?>
<body>
    <?php include_once "navbar.php" ?>

    <div id="admin_container" class="container">
        <a href="add" class="btn btn-primary"><i class="bi bi-plus"></i></a>

        <table class="table my-3 table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Nombre de pages</th>
                    <th>Image</th>
                    <th>Date d'ajout</th>
                    <th>Date d'emprunt</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= $book["id"] ?></td>
                    <td><?= $book["title"] ?></td>
                    <td><?= $book["author"] ?></td>
                    <td><?= $book["numberOfPages"] ?></td>
                    <td>
                        <img src="/upload/<?= $book["image"]?>" alt="image" class="bookImage"/>
                    </td>
                    <td><?= $book["added_date"] ?></td>
                    <td><?= $book["borrowing_date"] ?></td>
                    <td><?= $book["status"] ?></td>
                    <td class="d-flex gap-3 fs-5">
                        <a href="/update/<?= $book["id"] ?>" class="text-warning"><i class="bi bi-pen-fill"></i></a>
                        <a href="/delete/<?= $book["id"] ?>" class="text-danger"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <?php include_once "footer.php" ?>
</body>

</html>