<div class="d-flex justify-content-center">
  <form action="http://localhost:8080/tubesmvc/public/Signup/register" method="post" class="form-signup">
    <div class="header">
      <h1>SIGN UP</h1>
    </div>
    <div class="form-group mb-3">
      <label for="email" class="form-label text-biru">Email</label>
      <div class="input-group">
        <span class="input-group-text formku"><i class="bi bi-envelope"></i></span>
        <input type="email" class="form-control formku" id="email" placeholder="Masukkan email Anda" name="email" required />
      </div>
    </div>

    <div class="form-group mb-4">
      <label for="password" class="form-label text-biru">Password</label>
      <div class="input-group">
        <span class="input-group-text formku"><i class="bi bi-lock"></i></span>
        <input type="password" class="form-control formku" id="password" placeholder="Masukkan password Anda" name="password" required />
      </div>
    </div>
    <div class="form-group mb-4">
      <label for="no_telp" class="form-label text-biru">No. Handphone</label>
      <div class="input-group">
        <span class="input-group-text formku"><i class="bi bi-telephone"></i></span>
        <input type="number" class="form-control formku" id="no_telp" placeholder="Masukkan No. Handphone" name="no_telp" required />
      </div>
    </div>
    <div class="form-group mb-4">
      <label for="kode_pendaftaran" class="form-label text-biru">Kode Pendaftaran</label>
      <div class="input-group">
        <span class="input-group-text formku"><i class="bi bi-puzzle"></i></span>
        <input type="text" class="form-control formku" id="kode_pendaftaran" placeholder="Masukkan Kode Pendaftaran" name="kode_pendaftaran" required />
      </div>
    </div>


    <div class="d-flex flex-column align-items-center mb-3">
      <button type="submit" class=" mb-3 formku w-50 button-biru">
        SIGN UP
      </button>
    </div>
  </form>
</div>