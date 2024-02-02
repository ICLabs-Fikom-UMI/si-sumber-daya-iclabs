<div class="container-fluid text-center dibawah-topbar mb-4">
    <img class="foto-profile rounded" src="../../<?= $data['laboran']['foto'] ?>" alt="foto-profile" />
</div>

<form action="http://localhost:8080/tubesmvc/public/Profile_Laboran/tambah/ <?= $_SESSION['id_user'] ?>" method="post">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-md-12 mb-4 d-flex ">
                <div class="container-fluid">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                    <label class="fs-6" for="nama_laboran">Nama Lengkap</label><br />
                    <input type="text" name="nama_laboran" id="nama_laboran" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap Anda" value='<?= $data['laboran']['nama_laboran'] ?>' required />
                </div>

                <div class="container-fluid">
                    <label class="fs-6" for="no_telp">No. Telepon</label><br />
                    <input type="text" name="no_telp" id="no_telp" class="input-text-profile rounded-3" placeholder="Ganti No. Telepon Anda" value="<?= $data['laboran']['no_telp'] ?>" required />
                </div>
            </div>
            <div class=" col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="lulusan">Lulusan</label><br />
                    <input type="text" name="lulusan" id="lulusan" class="input-text-profile rounded-3" placeholder="Instansi Lulusan Terakhir Anda" value="<?= $data['laboran']['lulusan'] ?>" required />
                </div>

                <div class="container-fluid">
                    <label class="fs-6" for="mulai_menjabat">Tahun Mulai Menjabat</label><br />
                    <input type="text" name="mulai_menjabat" id="mulai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Mulai Menjabat Anda" value="<?= $data['laboran']['mulai_menjabat'] ?>" required />
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="email">Email</label><br />
                    <input type="text" name="email" id="email" class="input-text-profile rounded-3" placeholder="Ganti Email Anda" value="<?= $data['laboran']['email'] ?>" required />
                </div>

                <div class="container-fluid">
                    <div class="d-flex">
                        <div class="container-fluid">
                            <label class="fs-6" for="selesai_menjabat">Tahun Selesai Menjabat</label><br />
                            <input type="text" name="selesai_menjabat" id="selesai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Selesai Menjabat Anda" value="<?= $data['laboran']['selesai_menjabat'] ?>" required />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="bidang_keahlian">Bidang Keahlian</label><br />
                    <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3" placeholder="Ganti Bidang Keahlian Anda" value="<?= $data['laboran']['bidang_keahlian'] ?>" required />
                </div>
            </div>
        </div>
        <div class="col col-md-12 mb-4 d-flex">
            <div class="container-fluid mb-4">
                <label class="fs-6" for="deskripsi">Deskripsi</label><br>
                <textarea name="deskripsi" id="deskripsi" cols="160%" rows="10" class="rounded-3" placeholder="Deskripsikan Diri Anda" required><?= $data['laboran']['deskripsi'] ?></textarea>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center gap-5">
        <button class="rounded-5 button-biru lebar-button-7rem" type="submit">UBAH</button>
        <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">CANCEL</button>
    </div>
</form>