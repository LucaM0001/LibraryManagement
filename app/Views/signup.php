<?php
    $title = "Gestion de livres";
    include_once "header.php"
?>
<body>
    <div class="container" id="signup_container">
        <div id="signup" class="w-50">
            <h2 class="text-primary fw-bold">Inscription</h2>
            <hr />

            <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label text-primary">Adrèsse e-mail</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                        <input required type="email" placeholder="email@gmail.com" class="form-control" name="email">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-primary">Mot(s) de passe</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-key-fill"></i>
                        </span>
                        <input required type="password" placeholder="******" class="form-control" name="password">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mb-3">S'inscrire</button>
            </form>
            <p class="text-secondary">Déja inscrit ? <a href="/">Se connecter</a></p>
        </div>
    </div>
</body>
</html>