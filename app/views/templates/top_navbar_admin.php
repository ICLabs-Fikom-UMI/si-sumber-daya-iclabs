<nav class="navbar navbar-expand-lg top-navbar navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white me-auto" href="<?= BASEURL ?>/Dashboard">
            <img src="<?= BASEURL ?>/asset/image/logo.png" alt="Logo" width="76" height="44" class="d-inline-block align-text-center">
            ICLABS
        </a>
        <div class="d-flex align-items-center">
            <h6 class="text-white admin-name mt-1 me-4">Admin</h6>

            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalLogout">LOGOUT</button>

        </div>
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