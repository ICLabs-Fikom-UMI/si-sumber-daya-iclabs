<div class="container-fluid d-flex justify-content-center form-lengkapi-profil flex-column">
    <h3 class="fs-3 text-center mb-5">Lengkapi Profile</h3>
    <form action="/tubesmvc/public/Profile_KepLab/tambah/" method="post">
        <div class="container mb-4">
            <label class=" fs-6" for="nama_kepala_lab">Nama Lengkap <span class="text-danger">*</span></label><br>
            <input type="text" name="nama_kepala_lab" id="nama_kepala_lab" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap Anda" required>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="nidn">NIDN <span class="text-danger">*</span></label><br>
            <input type="text" name="nidn" id="nidn" class="input-text-profile rounded-3" placeholder="Masukkan NIDN Anda" required>
        </div>
        <div class="container mb-4">
            <p>Dosen Prodi <span class="text-danger">*</span></p>
            <input type="radio" name="prodi" id="prodi" value="Teknik Informatika">
            <label for="prodi" class="me-4">Teknik Informatika</label>
            <input type="radio" name="prodi" id="prodi" value="Sistem Informasi">
            <label for="prodi">Sistem Informasi</label>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="email">Email <span class="text-danger">*</span></label><br>
            <input type="text" name="email" id="email" class="input-text-profile rounded-3" placeholder="Masukkan Email Anda" required>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="no_telp">No. Telepon <span class="text-danger">*</span></label><br>
            <input type="text" name="no_telp" id="no_telp" class="input-text-profile rounded-3" placeholder="Masukkan Nomor Telepon Anda" required>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="foto_profil">Foto Profil <span class="text-danger">*</span></label>
            <div class="container d-flex align-items-center mb-3">
                <img src="" class="me-3"></img>
                <button class="rounded-3" style="display:block;width:120px; height:40px;" onclick="document.getElementById('foto_profil').click()">Pilih Foto</button>
                <input type='file' id="foto_profil" style="display:none" required>
            </div>
            <p>Ketentuan Foto:</p>
            <ul style="list-style-type: circle; margin-top: -1rem;">
                <li>Maksimal 2 MB</li>
                <li>Ukuran Foto</li>
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
                    <label for="selesai_menjabat">Tahun Selesai Menjabat</label>
                    <select class="form-select" aria-label="Default select example" name="selesai_menjabat" id="selesai_menjabat">
                        <option selected>-- Pilih Tahun --</option>
                        <?php
                        for ($i = 2000; $i <= 2024; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex align-items-center ">
                    <input class="me-2" type="checkbox" name="masih_menjabat" id="masih_menjabat">
                    <label for="masih_menjabat">Masih Menjabat
                </div>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="lulusan">Lulusan Universitas <span class="text-danger">*</span></label><br>
                <input type="text" name="lulusan" id="lulusan" class="input-text-profile rounded-3" placeholder="ex. Universitas Muslim Indonesia" required>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="bidang_keahlian">Bidang Keahlian <span class="text-danger">*</span></label><br>
                <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3" placeholder="ex. Java, Machine Learning, dll" required>
                <p>note: pisahkan menggunakan tanda koma (,)</p>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="deskripsi">Deskripsi <span class="text-danger">*</span></label><br>
                <div class="form-floating">
                    <textarea name="deskripsi" id="deskripsi" cols="100%" rows="30" class="rounded-3" placeholder="Deskripsikan Diri Anda" required></textarea>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center gap-5">
            <button class="rounded-5 button-biru lebar-button-7rem" type="submit">SIMPAN</button>
            <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">RESET</button>
        </div>
    </form>
</div>