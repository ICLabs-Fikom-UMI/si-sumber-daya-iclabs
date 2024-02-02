<div class="container-fluid text-center dibawah-topbar mb-4">
    <img class="foto-profile rounded" src="../../<?= $data['asisten']['foto'] ?>" alt="profile-photo" />
</div>

<form action="http://localhost:8080/tubesmvc/public/Profile_Asisten/tambah/ <?= $_SESSION['id_user'] ?>" method="post">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-md-12 mb-4 d-flex ">
                <div class="container-fluid">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                    <label class="fs-6" for="nama_asisten">Nama Lengkap</label><br />
                    <input type="text" name="nama_asisten" id="nama_asisten" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap Anda" value='<?= $data['asisten']['nama_asisten'] ?>' required />
                </div>

                <div class="container-fluid">
                    <label class="fs-6" for="prodi">Prodi</label><br />
                    <input type="text" name="prodi" id="prodi" class="input-text-profile rounded-3" placeholder="Ubah Prodi Anda" value="<?= $data['asisten']['prodi'] ?>" required />
                </div>
            </div>
            <div class=" col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="nim">NIM</label><br />
                    <input type="text" name="nim" id="nim" class="input-text-profile rounded-3" placeholder="Ganti NIM Anda" value="<?= $data['asisten']['nim'] ?>" required />
                </div>

                <div class="container-fluid">
                    <label class="fs-6" for="kelas">Kelas</label><br />
                    <input type="text" name="kelas" id="kelas" class="input-text-profile rounded-3" placeholder="Ganti Kelas Anda" value="<?= $data['asisten']['kelas'] ?>" required />
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="angkatan">Angkatan</label><br />
                    <input type="text" name="angkatan" id="angkatan" class="input-text-profile rounded-3" placeholder="Ubah Angkatan Anda" value="<?= $data['asisten']['angkatan'] ?>" required />
                </div>
                <div class="container-fluid">
                    <label class="fs-6" for="no_telp">No. Telepon</label><br />
                    <input type="text" name="no_telp" id="no_telp" class="input-text-profile rounded-3" placeholder="Ganti No. Telepon Anda" value="<?= $data['asisten']['no_telp'] ?>" required />
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="bidang_keahlian">Bidang Keahlian</label><br />
                    <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3" placeholder="Ubah Bidang Keahlian Anda" value="<?= $data['asisten']['bidang_keahlian'] ?>" required />
                </div>
                <div class="container-fluid">
                    <label class="fs-6" for="riwayat_matkul">Riwayat Matkul</label><br />
                    <input type="text" name="riwayat_matkul" id="riwayat_matkul" class="input-text-profile rounded-3" placeholder="Ganti Riwayat Matkul Anda" value="<?= $data['asisten']['riwayat_matkul'] ?>" required />
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="email">Email</label><br />
                    <input type="text" name="email" id="email" class="input-text-profile rounded-3" placeholder="Ubah Bidang Keahlian Anda" value="<?= $data['asisten']['email'] ?>" required />
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex">
                <div class="container-fluid mb-4">
                    <label class="fs-6" for="deskripsi">Deskripsi</label><br>
                    <textarea name="deskripsi" id="deskripsi" cols="160%" rows="10" class="rounded-3" placeholder="Deskripsikan Diri Anda" required><?= $data['asisten']['deskripsi'] ?></textarea>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center gap-5">
            <button class="rounded-5 button-biru lebar-button-7rem" type="submit">UBAH</button>
            <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">CANCEL</button>
        </div>
</form>