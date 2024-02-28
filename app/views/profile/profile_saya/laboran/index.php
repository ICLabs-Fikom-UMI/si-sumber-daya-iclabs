<div class="container-fluid dibawah-topbar mb-4">
    <div class="text-end">
        <?php if ($_SESSION['role'] !== 'Admin') : ?>
            <a href="<?= BASEURL ?>/Profile_Laboran/ubah_password/<?= $data['asisten']['id_user'] ?>">
                <button type="button" class="btn btn-primary">Ubah Password</button>
            </a>
        <?php endif; ?>
    </div>
    <h3 class="fs-3 text-center mb-5">Profile Saya</h3>
    <form action="<?= BASEURL ?>/Profile_Laboran/edit_profile/ <?= $data['laboran']['id_user'] ?>" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="container-fluid mb-4">
                    <div class="text-center">
                        <?php Flasher::flash(); ?>
                        <img class="foto-profile rounded" id="previewFoto" src="../../<?= $data['laboran']['foto'] ?>" alt="profile-photo" />
                    </div>
                    <div class="container-fluid text-center mb-3 ms-5">
                        <input type="file" name="foto" id="foto" accept="image/*" onchange="previewImage(this);" />
                    </div>
                    <div class="col col-md-12 mb-4 d-flex ">
                        <div class="container-fluid">
                            <input type="hidden" name="id_user" value="<?= $data['laboran']['id_user'] ?>">
                            <input type="hidden" name="id_laboran" value="<?= $data['laboran']['id_laboran'] ?>">
                            <label class="fs-6" for="nama_laboran">Nama Lengkap</label><br />
                            <input type="text" name="nama_laboran" id="nama_laboran" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap Anda" value='<?= $data['laboran']['nama_laboran'] ?>' required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;" />
                        </div>

                        <div class="container-fluid">
                            <label class="fs-6" for="no_telp">No. Telepon</label><br />
                            <input type="text" name="no_telp" id="no_telp" class="input-text-profile rounded-3" placeholder="Ganti No. Telepon Anda" value="<?= $data['laboran']['no_telp'] ?>" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;" />
                        </div>
                    </div>
                    <div class=" col col-md-12 mb-4 d-flex px-">
                        <div class="container-fluid">
                            <label class="fs-6" for="lulusan">Lulusan</label><br />
                            <input type="text" name="lulusan" id="lulusan" class="input-text-profile rounded-3" placeholder="Instansi Lulusan Terakhir Anda" value="<?= $data['laboran']['lulusan'] ?>" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;" />
                        </div>

                        <div class="container-fluid">
                            <label class="fs-6" for="mulai_menjabat">Tahun Mulai Menjabat</label><br />
                            <input type="text" name="mulai_menjabat" id="mulai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Mulai Menjabat Anda" value="<?= $data['laboran']['mulai_menjabat'] ?>" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;" />
                        </div>
                    </div>
                    <div class="col col-md-12 mb-4 d-flex px-">
                        <div class="container-fluid">
                            <label class="fs-6" for="email">Email</label><br />
                            <input type="text" name="email" id="email" class="input-text-profile rounded-3" placeholder="Ganti Email Anda" value="<?= $data['laboran']['email'] ?>" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;" />
                        </div>

                        <div class="container-fluid">
                            <div class="d-flex">
                                <div class="container-fluid">
                                    <label class="fs-6" for="selesai_menjabat">Tahun Selesai Menjabat</label><br />
                                    <input type="text" name="selesai_menjabat" id="selesai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Selesai Menjabat Anda" value="<?= $data['laboran']['selesai_menjabat'] ?>" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12 mb-4 d-flex px-">
                        <div class="container-fluid">
                            <label class="fs-6" for="bidang_keahlian">Bidang Keahlian</label><br />
                            <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3" placeholder="Ganti Bidang Keahlian Anda" value="<?= $data['laboran']['bidang_keahlian'] ?>" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;" />
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
</div>