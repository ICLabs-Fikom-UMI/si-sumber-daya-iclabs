<div class="container-fluid d-flex justify-content-center form-lengkapi-profil flex-column">
    <h3 class="fs-3 text-center mb-5">Lengkapi Profile</h3>
    <form action="/tubesmvc/public/Profile/tambah" method="post">
        <div class="container mb-4">
            <label class="fs-6" for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="input-text-profile rounded-3" placeholder="Masukkan Nama Lengkap Anda" required>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="nim">NIM <span class="text-danger">*</span></label><br>
            <input type="number" name="nim" id="nim" class="input-text-profile rounded-3" placeholder="Masukkan NIM Anda" required>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="kelas">Kelas <span class="text-danger">*</span></label><br>
            <input type="text" name="kelas" id="kelas" class="input-text-profile rounded-3" placeholder="Masukkan Kelas Anda" required>
        </div>
        <div class="container mb-4">
            <p>Program Studi <span class="text-danger">*</span></p>
            <input type="radio" name="prodi" id="prodi" value="Teknik Informatika">
            <label for="prodi" class="me-4">Teknik Informatika</label>
            <input type="radio" name="prodi" id="prodi" value="Sistem Informasi">
            <label for="prodi">Sistem Informasi</label>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="email">Email <span class="text-danger">*</span></label><br>
            <input type="email" name="email" id="email" class="input-text-profile rounded-3" placeholder="Masukkan Email Anda" required>
        </div>
        <div class="container mb-4">
            <label class="fs-6" for="alamat">Alamat <span class="text-danger">*</span></label><br>
            <input type="text" name="alamat" id="alamat" class="input-text-profile rounded-3" placeholder="Masukkan Alamat Anda" required>
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
                    <label for="angkatan">Angkatan <span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="angkatan" id="angkatan" required>
                        <option selected>-- Pilih Tahun --</option>
                        <?php
                        for ($i = 2000; $i <= 2024; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="container mb-4">

            </div>
            <div class="container mb-4">
                <label class="fs-6" for="keahlian">Bidang Keahlian <span class="text-danger">*</span></label><br>
                <input type="text" name="keahlian" id="keahlian" class="input-text-profile rounded-3" placeholder="ex. Pemrograman Mobile, Desain Grafis, dll" required>
                <p>note: pisahkan menggunakan tanda koma (,)</p>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="matkul_praktikum">Praktikum Yang Diajar <span class="text-danger">*</span></label><br>
                <input type="text" name="matkul_praktikum" id="matkul_praktikum" class="input-text-profile rounded-3" placeholder="ex. Artificial Intellegnce, FrontEnd Web, dll" required>
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