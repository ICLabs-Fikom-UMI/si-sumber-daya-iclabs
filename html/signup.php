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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- poppins regular -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
  </head>

  <body style="background-image: url(../public/asset/image/background/startUp.png); background-position: 0px -300px;
  background-repeat: no-repeat;">

<nav class="navbar navbar-expand-lg top-navbar navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white me-5" href="#">
            <img src="/tubesmvc/public/asset/image/logo.png" alt="Logo" width="76" height="44" class="d-inline-block align-text-center">
            ICLABS
        </a>
        <button class="navbar-toggler navbar-toggler-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Menambahkan menu "Home" dan menu lainnya di ujung kanan -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="../../index.php#asisten">Kepala Lab</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="../../index.php#laboran">Laboran</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-white" href="../../index.php#asisten">Asisten Laboratorium</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="d-flex justify-content-center">
      <form
        action="/tubesmvc/public/Login/login"
        method="post"
        class="form-signup"
      >
        <div class="header">
          <h1>SIGN UP</h1>
        </div>
        <div class="form-group mb-3">
          <label for="email" class="form-label text-biru">Email</label>
          <div class="input-group">
            <span class="input-group-text formku"
              ><i class="bi bi-envelope"></i
            ></span>
            <input
              type="email"
              class="form-control formku"
              id="email"
              placeholder="Masukkan email Anda"
              name="email"
              required
            />
          </div>
        </div>

        <div class="form-group mb-4">
          <label for="password" class="form-label text-biru">Password</label>
          <div class="input-group">
            <span class="input-group-text formku"
              ><i class="bi bi-lock"></i
            ></span>
            <input
              type="password"
              class="form-control formku"
              id="password"
              placeholder="Masukkan password Anda"
              name="password"
              required
            />
          </div>
        </div>
        <div class="form-group mb-4">
          <label for="no_telp" class="form-label text-biru">No. Handphone</label>
          <div class="input-group">
            <span class="input-group-text formku"
              ><i class="bi bi-telephone"></i></span>
            <input
              type="number"
              class="form-control formku"
              id="no_telp"
              placeholder="Masukkan No. Handphone"
              name="no_telp"
              required
            />
          </div>
        </div>
        <div class="form-group mb-4">
          <label for="kode_pendaftaran" class="form-label text-biru">Kode Pendaftaran</label>
          <div class="input-group">
            <span class="input-group-text formku"
              ><i class="bi bi-puzzle"></i></span>
            <input
              type="number"
              class="form-control formku"
              id="kode_pendaftaran"
              placeholder="Masukkan Kode Pendaftaran" 
              name="kode_pendaftaran"
              required
            />
          </div>
        </div>
        

        <div class="d-flex flex-column align-items-center mb-3">
          <button type="submit" class=" mb-3 formku w-50 button-biru">
            SIGN UP
          </button>
        </div>
      </form>
    </div>
    <script src="http://localhost:8080/tubesmvc/public/asset/js/bootstrap.js"></script>
  </body>
</html>
