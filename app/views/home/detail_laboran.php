<div class="container-fluid">
    <div class="row dibawah-topbar gap-2 pe-5 ps-5 mb">
        <div class="col-md d-flex justify-content-center">
            <div class="card w-auto">
                <img src="../../<?= $data['laboran']['foto'] ?>" class="card-img-top object-fit-cover vh-100" style="object-position: center; min-height: 399px; max-height: 400px;" alt="Card Image">
                <div class="card-info-box">
                    <div class="center ms-2 fs-6">
                        <span>
                            <img src="<?= BASEURL ?>/asset/image/icon/email.png" class="me-1">
                            <?= $data['laboran']['email']; ?>
                        </span><br>
                        <span>
                            <img src="<?= BASEURL ?>/asset/image/icon/nidn.png" class="me-1">
                            <?= $data['laboran']['no_telp']; ?>
                        </span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-sm">
            <div class="container-fluid text-light d-flex justify-content-between align-items-center h-auto py-4 px-3" style="background-color: #2B4658;">
                <div class="container-fluid d-flex justify-content-between ">
                    <div>
                        <h4>
                            <?= $data['laboran']['nama_laboran']; ?> <br>
                        </h4>
                    </div>
                    <div>
                        <h5><?= $data['laboran']['mulai_menjabat']; ?> - <?= $data['laboran']['selesai_menjabat']; ?></h5>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-1 h-auto">
                <p style="text-align: justify;"><?= $data['laboran']['deskripsi']; ?></p>
            </div>
        </div>
    </div>
    <div class="row ps-5" style="margin-top: 90px;">
        <div class="col-md-12">
            <h5>Bidang Keahlian</h5>
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="row d-flex align-items-center justify-content-start">
            <?php foreach (explode(',', $data['laboran']['bidang_keahlian']) as $keahlian) : ?>
                <div class="col-md-4 ">
                    <div class="text-white text-center rounded mb-3" style="background-color: #2B4658; padding-top: .1px; padding-bottom: .1px">
                        <p class="fs-6"><?= $keahlian ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>