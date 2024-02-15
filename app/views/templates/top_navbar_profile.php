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
                    <a class="nav-link text-white" href="<?= BASEURL ?>/#kepala_lab">Kepala Lab</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="<?= BASEURL ?>/#laboran">Laboran</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="<?= BASEURL ?>/#asisten">Asisten Laboratorium</a>
                </li>
            </ul>
        </div>
        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalLogout">LOGOUT</button>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-center">Anda Yakin Mau Keluar?</h6>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <a href="<?= BASEURL ?>/Logout/DestroySession" role="button" class="btn btn-success">Yakin</a>
            </div>
        </div>
          
    </div>
</div>