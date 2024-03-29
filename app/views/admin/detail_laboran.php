<div class="dibawah-topbar mb-5 ps-4">
    <a href="<?= BASEURL ?>/Dashboard/data_asisten" class="text-decoration-none">
        <button class="rounded-5 btn lebar-button-7rem text-white" type="submit" style="background-color: #2b4658;">Kembali</button>
    </a>
</div>

<form action="<?= BASEURL ?>/Dashboard/edit_foto_laboran/<?= $data['laboran']['id_laboran'] ?>" method="post" enctype="multipart/form-data">
    <div class="container-fluid mb-4">
        <div class="text-center">
            <?php Flasher::flash(); ?>
            <input type="hidden" name="id_laboran" value="<?= $data['laboran']['id_laboran'] ?>">
            <img class="foto-profile rounded" id="previewFoto" src="../../<?= $data['laboran']['foto'] ?>" alt="profile-photo" />
        </div>
    </div>
    <div class="container-fluid text-center mb-3 ms-5">
        <input type="file" name="foto" id="foto" accept="image/*" onchange="previewImage(this);" />
    </div>
    <div class="container d-flex justify-content-center mt-4 mb-5 gap-5">
        <button class="rounded-5 button-biru lebar-button-7rem" type="submit">UBAH</button>
        <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">CANCEL</button>
    </div>
</form>

<form action="<?= BASEURL ?>/Dashboard/edit_data_laboran" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-md-12 mb-4 d-flex ">
                <div class="container-fluid">
                    <input type="hidden" name="id_laboran" value="<?= $data['laboran']['id_laboran'] ?>">
                    <label class="fs-6" for="nama_laboran">Nama Lengkap</label><br />
                    <input type="text" name="nama_laboran" id="nama_laboran" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap" value='<?= $data['laboran']['nama_laboran'] ?>' required />
                </div>

                <div class="container-fluid">
                    <label class="fs-6" for="no_telp">No. Telepon</label><br />
                    <input type="text" name="no_telp" id="no_telp" class="input-text-profile rounded-3" placeholder="Ganti No. Telepon" value="<?= $data['laboran']['no_telp'] ?>" required />
                </div>
            </div>
            <div class=" col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="lulusan">Lulusan</label><br />
                    <input type="text" name="lulusan" id="lulusan" class="input-text-profile rounded-3" placeholder="Instansi Lulusan Terakhir" value="<?= $data['laboran']['lulusan'] ?>" required />
                </div>

                <div class="container-fluid">
                    <label class="fs-6" for="mulai_menjabat">Tahun Mulai Menjabat</label><br />
                    <input type="text" name="mulai_menjabat" id="mulai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Mulai Menjabat" value="<?= $data['laboran']['mulai_menjabat'] ?>" required />
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="email">Email</label><br />
                    <input type="text" name="email" id="email" class="input-text-profile rounded-3" placeholder="Ganti Email" value="<?= $data['laboran']['email'] ?>" required />
                </div>

                <div class="container-fluid">
                    <div class="d-flex">
                        <div class="container-fluid">
                            <label class="fs-6" for="selesai_menjabat">Tahun Selesai Menjabat</label><br />
                            <input type="text" name="selesai_menjabat" id="selesai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Selesai Menjabat" value="<?= $data['laboran']['selesai_menjabat'] ?>" required />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-12 mb-4 d-flex px-">
                <div class="container-fluid">
                    <label class="fs-6" for="bidang_keahlian">Bidang Keahlian</label><br />
                    <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3" placeholder="Ganti Bidang Keahlian" value="<?= $data['laboran']['bidang_keahlian'] ?>" required />
                </div>
            </div>
        </div>
        <div class="col col-md-12 mb-4 d-flex">
            <div class="container-fluid mb-4">
                <label class="fs-6" for="deskripsi">Deskripsi</label><br>
                <textarea name="deskripsi" id="deskripsi" cols="160%" rows="10" class="rounded-3" placeholder="Deskripsikan Diri" required><?= $data['laboran']['deskripsi'] ?></textarea>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center gap-5 mb-5">
        <button class="rounded-5 button-biru lebar-button-7rem" type="submit">UBAH</button>
        <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">CANCEL</button>
    </div>
</form>