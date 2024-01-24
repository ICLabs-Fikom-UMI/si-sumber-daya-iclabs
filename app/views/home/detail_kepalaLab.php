<div class="row mb-5" style="margin-top: 8rem; padding: 0 10rem">
    <div class="col-md-4">
        <!-- Konten container pertama -->
        <div class="card">
            <img src="../../../public/asset/image/<?= $data['kepala_lab']['foto_detail'] ?>" class="card-img-top object-fit-cover vh-100" style="object-position: center; height: 330.333px;" alt="Card Image">
            <div class="card-info-box">
                <div class="center ms-2 fs-6">
                    <span>
                        <img src="../../asset/image/icon/email.png" class="me-1">
                        <?= $data['kepala_lab']['email']; ?>
                    </span><br>
                    <span>
                        <img src="../../asset/image/icon/nidn.png" class="me-1">
                        <?= $data['kepala_lab']['nidn']; ?>
                    </span><br>
                    <span>
                        <img src="../../asset/image/icon/phone.png" class="me-1">
                        <?= $data['kepala_lab']['no_telp']; ?>
                    </span><br>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 text-light pb-2" style="background-color: #2B4658; height: 19vh;">
        <div class="container-fluid">
            <div class="row px-2 pt-3">
                <div class="col-md-6 d-flex flex-column align-items-start">
                    <!-- Isi container kedua -->
                    <h4><?= $data['kepala_lab']['nama_kepala_lab']; ?></h4>
                    <p style="font-size: .8rem;"><?= $data['kepala_lab']['dosen_prodi']; ?></p>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-end">
                    <!-- Isi container kedua -->
                    <h5><?= $data['kepala_lab']['mulai_menjabat']; ?> - <?= $data['kepala_lab']['selesai_menjabat']; ?></h5>
                </div>
                <div class="col-md-12 d-flex flex-column align-items-start mt-4">
                    <p class="text-black" style="text-align: justify; margin-left: -1rem;">
                        <?= $data['kepala_lab']['deskripsi']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-4 ">
        <div class="container">
            <h5>Bidang Keahlian</h5>
        </div>

        <!-- Bidang Keahlian -->
        <div class="container mx-auto">
            <div class="row d-flex align-items-center justify-content-sm-start">
                <?php foreach (explode(',', $data['kepala_lab']['bidang_keahlian']) as $keahlian) : ?>
                    <div class="col-md-4 ">
                        <div class="text-white text-center py-3 rounded" style="background-color: #2B4658;">
                            <h5><?= $keahlian ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>