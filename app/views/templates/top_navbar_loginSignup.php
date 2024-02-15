<nav class="navbar navbar-expand-lg top-navbar navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white me-5" href="<?= BASEURL ?>">
            <img src="<?= BASEURL ?>/asset/image/logo.png" alt="Logo" width="76" height="44" class="d-inline-block align-text-center">
            ICLABS
        </a>
        <button class="navbar-toggler navbar-toggler-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Menambahkan menu "Home" dan menu lainnya di ujung kanan -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="<?= BASEURL ?>/index.php#kepalaLab">Kepala Lab</a>
                </li>
                <li class=" nav-item me-4">
                    <a class="nav-link text-white" href="<?= BASEURL ?>/index.php#laboran">Laboran</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="<?= BASEURL ?>/index.php#asisten">Asisten Laboratorium</a>
                </li>
            </ul>
        </div>
    </div>
</nav>