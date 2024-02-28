<div class="container-fluid d-flex justify-content-center form-lengkapi-profil flex-column">
    <h3 class="fs-3 text-center mb-5">Lengkapi Profile</h3>
    <form action="<?= ($_SESSION['role'] === 'Admin') ? BASEURL . '/Profile_Laboran/tambah' : BASEURL . '/Profile_Laboran/tambah/' . $_SESSION['id_user'] ?>" method="post" enctype="multipart/form-data">
        <div class="container mb-4">
            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
            <?php if ($_SESSION['role'] == 'Admin') : ?>
                <input type="hidden" name="role" value="Laboran">
            <?php endif; ?>
            <label class="fs-6" for="nama_laboran">Nama Lengkap <span class="text-danger">*</span></label><br>
            <input type="text" name="nama_laboran" id="nama_laboran" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap Anda" style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
        </div>
        <div class=" container mb-4">
            <label class="fs-6" for="email">Email <span class="text-danger">*</span></label><br>
            <input type="text" name="email" id="email" class="input-text-profile rounded-3" placeholder="Masukkan Email Anda" style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="no_telp">No. Telepon <span class="text-danger">*</span></label><br>
            <input type="number" name="no_telp" id="no_telp" class="input-text-profile rounded-3" placeholder="Masukkan Nomor Telepon Anda" style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="foto">Foto Profil <span class="text-danger">*</span></label>
            <div class="container d-flex align-items-center mb-3">
                <input type="file" name="foto" id="foto" accept="image/*" placeholder="Pilih foto" />
            </div>
            <p>Ketentuan Foto:</p>
            <ul class="mb-4" style="list-style-type: circle; margin-top: -1rem;">
                <li>Maksimal 2 MB</li>
            </ul>
            <div class="container d-flex justify-content-start align-items-start gap-5 mb-4">
                <div class="d-flex flex-column">
                    <label for="mulai_menjabat">Tahun Mulai Menjabat <span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="mulai_menjabat" id="mulai_menjabat" required>
                        <option selected>-- Pilih Tahun --</option>
                        <?php
                        for ($i = 2000; $i <= 2024; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="selesai_menjabat">Tahun Selesai Menjabat <span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="selesai_menjabat" id="selesai_menjabat" required>
                        <option selected>-- Pilih Tahun --</option>
                        <option value="Sekarang">Sekarang</option>
                        </option>
                        <?php
                        for ($x = 2000; $x <= 2024; $x++) {
                            echo "<option value=\"$x\">$x</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="lulusan">Lulusan Universitas <span class="text-danger">*</span></label><br>
                <input type="text" name="lulusan" id="lulusan" class="input-text-profile rounded-3" placeholder="ex. Universitas Muslim Indonesia" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="bidang_keahlian">Bidang Keahlian <span class="text-danger">*</span></label><br>
                <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3" placeholder="ex. Java, Machine Learning, dll" required style="width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box;">
                <p>note: pisahkan menggunakan tanda koma (,)</p>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="deskripsi">Deskripsi <span class="text-danger">*</span></label><br>
                <div class="form-floating">
                    <textarea name="deskripsi" id="deskripsi" cols="100%" rows="10" class="rounded-3" placeholder="Deskripsikan Diri Anda" required></textarea>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center gap-5">
            <button class="rounded-5 button-biru lebar-button-7rem" type="submit">SIMPAN</button>
            <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">RESET</button>
        </div>
    </form>
</div>