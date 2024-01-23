<div class="row" style="margin-top: 8rem; padding: 0 10rem">
    <div class="col-md-4">
        <!-- Konten container pertama -->
        <div class="container">
            <img src="../../../public/asset/image/<?= $data['asisten']['foto_detail'] ?>" alt="Gambar" style="width: 100%; object-fit: cover;">
        </div>
        <div class="container">
            <!-- Konten container pertama -->
            <div class="center fs-6 py-3 text-light ps-3" style="background-color: #2b4658;">
                <!-- Isi container pertama -->
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
    <div class="col-md-8 text-light pb-2" style="background-color: #2B4658; height: 16vh;">
        <div class="container-fluid">
            <div class="row px-2 pt-4">
                <div class="col-md-6 d-flex flex-column align-items-start">
                    <!-- Isi container kedua -->
                    <h6 class="fs-6"><?= $data['asisten']['nama_asisten']; ?></h6>
                    <p style="font-size: .7rem;"><?= $data['asisten']['prodi']; ?></p>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-end">
                    <!-- Isi container kedua -->
                    <h6 class="fs-6">Angkatan <?= $data['asisten']['angkatan']; ?></h6>
                </div>
                <p class="text-black mt-4 " style="margin-left: -1.6rem; text-align: justify;">
                    <?= $data['asisten']['angkatan']; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-11 m">
        <!-- Konten container ketiga -->
        <div class="container">
            <div class="row">
                <!-- Tiga container sejajar di sini -->
                <div class="col-md-4">
                    <div class="bg-danger text-white">
                        <!-- Isi container 1 -->
                        Container 1
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-warning text-white">
                        <!-- Isi container 2 -->
                        Container 2
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-success text-white">
                        <!-- Isi container 3 -->
                        Container 3
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>