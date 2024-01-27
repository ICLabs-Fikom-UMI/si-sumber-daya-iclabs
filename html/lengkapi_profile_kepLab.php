<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman</title>

    <link rel="stylesheet" href="../public/asset/css/bootstrap.css" />

    <!-- <link rel="stylesheet" href="/tubesmvc/public/asset/css/bootstrap.css" /> -->
    <!-- <link
      rel="stylesheet"
      href="/tubesmvc/public/asset/css/personal_css/style.css"
      
    /> -->

    <!-- HAPUS INI NANTI -->
    <link rel="stylesheet" href="../public/asset/css/personal_css/style.css" />

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- poppins regular -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg top-navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white me-5" href="#">
                <img src="/tubesmvc/public/asset/image/logo.png" alt="Logo" width="76" height="44"
                    class="d-inline-block align-text-center">
                ICLABS
            </a>
            <a href="/tubesmvc/public/login/index">
                <button class="btn btn-danger" type="">LOGOUT</button>
            </a>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center form-lengkapi-profil flex-column">
        <h3 class="fs-3 text-center mb-5">Lengkapi Profile</h3>
        <form action="">
            <div class="container mb-4">
                <label class="fs-6" for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label><br>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="input-text-profile rounded-3"
                    placeholder="Masukkan Nama Lengkap Anda" required>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="nidn">NIDN <span class="text-danger">*</span></label><br>
                <input type="text" name="nidn" id="nidn" class="input-text-profile rounded-3"
                    placeholder="Masukkan NIDN Anda" required>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="email">Email <span class="text-danger">*</span></label><br>
                <input type="text" name="email" id="email" class="input-text-profile rounded-3"
                    placeholder="Masukkan Email Anda" required>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="no_telp">No. Telepon <span class="text-danger">*</span></label><br>
                <input type="text" name="no_telp" id="no_telp" class="input-text-profile rounded-3"
                    placeholder="Masukkan Nomor Telepon Anda" required>
            </div>
            <div class="container mb-4">
                <label class="fs-6" for="foto_profil">Foto Profil <span class="text-danger">*</span></label>
                <div class="container d-flex align-items-center mb-3">
                    <img src="" class="me-3"></img>
                    <button class="rounded-3" style="display:block;width:120px; height:40px;"
                        onclick="document.getElementById('foto_profil').click()">Pilih Foto</button>
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
                        <select class="form-select" aria-label="Default select example" name="mulai_menjabat"
                            id="mulai_menjabat" required>
                            <option selected>-- Pilih Tahun --</option>
                            <option value="2015">2015</option>
                            <option value="2016">2017</option>
                            <option value="">Three</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column">
                        <label for="selesai_menjabat">Tahun Selesai Menjabat</label>
                        <select class="form-select" aria-label="Default select example" name="selesai_menjabat"
                            id="selesai_menjabat" required>
                            <option selected>-- Pilih Tahun --</option>
                            <option value="2015">2015</option>
                            <option value="2016">2017</option>
                            <option value="">Three</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center ">
                        <input class="me-2" type="checkbox" name="masih_menjabat" id="masih_menjabat" required>
                        <label for="masih_menjabat">Masih Menjabat
                    </div>
                </div>
                <div class="container mb-4">
                    <label class="fs-6" for="bidang_keahlian">Bidang Keahlian <span class="text-danger">*</span></label><br>
                    <input type="text" name="bidang_keahlian" id="bidang_keahlian" class="input-text-profile rounded-3"
                        placeholder="ex. Java, Machine Learning, dll" required>
                    <p>note: pisahkan menggunakan tanda koma (,)</p>
                </div>
                <div class="container mb-4">
                    <label class="fs-6" for="deskripsi">Deskripsi <span class="text-danger">*</span></label><br>
                    <div class="form-floating">
                        <textarea name="deskripsi" id="deskripsi" cols="100%" rows="30" class="rounded-3"
                            placeholder="Deskripsikan Diri Anda" required></textarea>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center gap-5">
                <button class="rounded-5 button-biru lebar-button-7rem" type="submit">SIMPAN</button>
                <button class="btn btn-danger rounded-5 lebar-button-7rem" type="reset">RESET</button>
            </div>
        </form>
    </div>



    <script src="http://localhost:8080/tubesmvc/public/asset/js/bootstrap.js"></script>
</body>

</html>