<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4" aria-label="Third navbar example">
    <div class="container">
        <a class="navbar-brand" href="index.php">Login Form</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
                <?php if (isset($_SESSION['id_user'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controleur=Connect&action=logout">Déconnexion</a>
                    </li> <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Connexion</a>
                    </li> <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>