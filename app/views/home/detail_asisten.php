<div class="row" style="margin-top: 8rem; padding: 0 10rem">
    <div class="col-md-4">
        <!-- Konten container pertama -->
        <div class="card">
            <img src="../../../public/asset/image/<?= $data['asisten']['foto_detail'] ?>" class="card-img-top object-fit-cover vh-100" style="object-position: center; height: 330.333px;" alt="Card Image">
            <div class="card-info-box">
                <div class="center ms-2 fs-6">
                    <span>
                        <img src="../../asset/image/icon/email.png" class="me-1">
                        <?= $data['asisten']['email']; ?>
                    </span><br>
                    <span>
                        <img src="../../asset/image/icon/nidn.png" class="me-1">
                        <?= $data['asisten']['nim']; ?>
                    </span><br>
                    <span>
                        <img src="../../asset/image/icon/phone.png" class="me-1">
                        <?= $data['asisten']['no_telp']; ?>
                    </span><br>
                    <span>
                        <img src="../../asset/image/icon/location.png" class="me-1">
                        <?= $data['asisten']['alamat']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 text-light pb-2" style="background-color: #2B4658; height: 21vh;">
        <div class="container-fluid">
            <div class="row px-2 pt-4">
                <div class="col-md-6 d-flex flex-column align-items-start">
                    <!-- Isi container kedua -->
                    <h4><?= $data['asisten']['nama_asisten']; ?></h4>
                    <p style="font-size: .8rem;"><?= $data['asisten']['prodi']; ?></p>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-end">
                    <!-- Isi container kedua -->
                    <h5>Angkatan <?= $data['asisten']['angkatan']; ?></h4>
                </div>
                <div class="col-md-12 d-flex flex-column align-items-start mt-5">
                    <p class="text-black" style="text-align: justify; margin-left: -1rem;">
                        <?= $data['asisten']['deskripsi']; ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-md-12" style="margin-top: 10rem;">
    <div class="container">
        <h5>Bidang Keahlian</h5>
    </div>

    <!-- Bidang Keahlian -->
    <div class="container mx-auto">
        <div class="row d-flex align-items-center justify-content-sm-start">
            <?php foreach (explode(',', $data['asisten']['bidang_keahlian']) as $keahlian) : ?>
                <div class="col-md-4 ">
                    <div class="text-white text-center py-3 rounded" style="background-color: #2B4658;">
                        <h5><?= $keahlian ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="col-md-12" style="margin-top: 10rem;">
    <div class="container">
        <h5>Asisten Praktikum</h5>
    </div>

    <!-- Matkul -->
    <div class="container mx-auto">
        <div class="row d-flex align-items-center justify-content-sm-start">
            <?php foreach (explode(',', $data['asisten']['riwayat_matkul']) as $keahlian) : ?>
                <div class="col-md-4 mb-4">
                    <div class="text-white text-center py-3 rounded" style="background-color: #2B4658;">
                        <h5><?= $keahlian ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>