<div class="container-fluid dibawah-topbar mb-4">
    <div class="text-end">
        <?php if ($_SESSION['role'] !== 'Admin') : ?>
            <a href="<?= BASEURL ?>/Profile_KepLab/ubah_password/<?= $data['asisten']['id_user'] ?>">
                <button type="button" class="btn btn-primary">Ubah Password</button>
            </a>
        <?php endif; ?>
    </div>
    <h3 class="fs-3 text-center mb-5">Profile Saya</h3>
    <form action="<?= BASEURL ?>/Profile_KepLab/edit_profile/<?= $data['kepala_lab']['id_user'] ?>" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="container-fluid mb-4">
                    <div class="text-center">
                        <?php Flasher::flash(); ?>
                        <img class="foto-profile rounded" id="previewFoto" src="../../<?= $data['kepala_lab']['foto'] ?>" alt="profile-photo" />
                    </div>
                    <div class="container-fluid text-center mb-3 ms-5">
                        <input type="file" name="foto" id="foto" accept="image/*" onchange="previewImage(this);" />
                    </div>
                    <div class="col col-md-12 mb-4 d-flex ">
                        <div class="container-fluid">
                            <input type="hidden" name="id_user" value="<?= $data['kepala_lab']['id_user'] ?>">
                            <input type="hidden" name="id_kepala_lab" value="<?= $data['kepala_lab']['id_kepala_lab'] ?>">
                            <label class="fs-6" for="nama_kepala_lab">Nama Lengkap</label><br />
                            <input type="text" name="nama_kepala_lab" id="nama_kepala_lab" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap Anda" value='<?= $data['kepala_lab']['nama_kepala_lab'] ?>' required />
                        </div>

                        <div class="container-fluid">
                            <label class="fs-6" for="no_telp">No. Telepon</label><br />
                            <input type="text" name="no_telp" id="no_telp" class="input-text-profile rounded-3" placeholder="Ganti No. Telepon Anda" value="<?= $data['kepala_lab']['no_telp'] ?>" required />
                        </div>
                    </div>
                    <div class=" col col-md-12 mb-4 d-flex px-">
                        <div class="container-fluid">
                            <label class="fs-6" for="prodi">Dosen Prodi</label><br />
                            <input type="text" name="prodi" id="prodi" class="input-text-profile rounded-3" placeholder="Ganti Status Dosen Prodi" value="<?= $data['kepala_lab']['dosen_prodi'] ?>" required />
                        </div>

                        <div class="container-fluid">
                            <label class="fs-6" for="bidang_kepala_lab">Bidang Kepala Lab</label><br />
                            <input type="text" name="bidang_kepala_lab" id="bidang_kepala_lab" class="input-text-profile rounded-3" placeholder="Ganti Tahun Mulai Menjabat Anda" value="<?= $data['kepala_lab']['bidang_kepala_lab'] ?>" required />
                        </div>
                    </div>
                    <div class=" col col-md-12 mb-4 d-flex px-">
                        <div class="container-fluid">
                            <label class="fs-6" for="nidn">NIDN</label><br />
                            <input type="text" name="nidn" id="nidn" class="input-text-profile rounded-3" placeholder="Ganti NIDN Anda" value="<?= $data['kepala_lab']['nidn'] ?>" required />
                        </div>

                        <div class="container-fluid">
                            <label class="fs-6" for="mulai_menjabat">Tahun Mulai Menjabat</label><br />
                            <input type="text" name="mulai_menjabat" id="mulai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Mulai Menjabat Anda" value="<?= $data['kepala_lab']['mulai_menjabat'] ?>" required />
                        </div>
                    </div>
                    <div class="col col-md-12 mb-4 d-flex px-">
                        <div class="container-fluid">
                            <label class="fs-6" for="email">Email</label><br />
                            <input type="text" name="email" id="email" class="input-text-profile rounded-3" placeholder="Ganti Email Anda" value="<?= $data['kepala_lab']['email'] ?>" required />
                        </div>

                        <div class="container-fluid">
                            <div class="d-flex">
                                <div class="container-fluid">
                                    <label class="fs-6" for="selesai_menjabat">Tahun Selesai Menjabat</label><br />
                                    <input type="text" name="selesai_menjabat" id="selesai_menjabat" class="input-text-profile rounded-3" placeholder="Ganti Tahun Selesai Menjabat Anda" value="<?= $data['kepala_lab']['selesai_menjabat'] ?>" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12 mb-4 d-flex px-">
                        <div class="container-fluid">
                            <label class="fs-6" for="bidang_keahlian">Bidang Keahlian</label><br />
                            <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3" placeholder="Ganti Bidang Keahlian Anda" value="<?= $data['kepala_lab']['bidang_keahlian'] ?>" required />
                        </div>
                    </div>
                </div>
                <div class="col col-md-12 mb-4 d-flex">
                    <div class="container-fluid mb-4">
                        <label class="fs-6" for="deskripsi">Deskripsi</label><br>
                        <textarea name="deskripsi" id="deskripsi" cols="160%" rows="10" class="rounded-3" placeholder="Deskripsikan Diri Anda" required><?= $data['kepala_lab']['deskripsi'] ?></textarea>
                    </div>

                </div>
            </div>
            <div class="container d-flex justify-content-center gap-5">
                <button class="rounded-5 button-biru lebar-button-7rem" type="submit">UBAH</button>
                <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">CANCEL</button>
            </div>
    </form>
</div>