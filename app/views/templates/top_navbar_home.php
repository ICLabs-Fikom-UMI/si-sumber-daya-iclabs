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
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="#kepala_lab">Kepala Lab</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="#laboran">Laboran</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="#asisten">Asisten Laboratorium</a>
                </li>
            </ul>

            <!-- Form Pencarian dan Tombol Login -->
            <form class="ms-auto d-flex d-lg-none">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                    <input class="form-control me-4" placeholder="Siapa Yang Anda Cari?" aria-label="Search">
                </div>
            </form>

            <div class="ms-auto d-none d-lg-flex">
                <form class="d-flex">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-search"></i>
                        </span>
                        <input class="form-control me-4" placeholder="Siapa Yang Anda Cari?" aria-label="Search">
                    </div>
                </form>

                <a href="<?= BASEURL ?>/login/index">
                    <button class="btn btn-success" type="">LOGIN</button>
                </a>
            </div>
        </div>
    </div>
</nav>