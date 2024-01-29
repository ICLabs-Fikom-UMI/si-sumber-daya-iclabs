<div class="d-flex justify-content-center">
    <form action="/tubesmvc/public/Login/login" method="post" class="form-login">
        <div class="header">
            <h1>LOGIN</h1>
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label text-biru">Email</label>
            <div class="input-group">
                <span class="input-group-text formku"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control formku" id="email" placeholder="Masukkan email Anda" name="email">
            </div>
        </div>

        <div class="form-group mb-4">
            <label for="password" class="form-label text-biru">Password</label>
            <div class="input-group">
                <span class="input-group-text formku"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control formku" id="password" placeholder="Masukkan password Anda" name="password">
            </div>
        </div>

        <div class="d-flex flex-column align-items-center mb-3">
            <button type="submit" class="signin mb-3 formku w-50 button-biru">Masuk</button>
            <span class="text-white">Don’t have an account?<a href="/tubesmvc/public/signup/index" class="text-decoration-none text-biru fw-bolder">
                    SIGNUP</a></span>

        </div>

    </form>
    <div class="container" style="margin-top: 5rem;">
        <a href="/tubesmvc/public/Profile/">
            <button type="submit" class="signin mb-3 formku w-100 button-biru">Profile Utama</button>
        </a>
        <a href="/tubesmvc/public/Lengkapi_ProfileKepLab">
            <button type="submit" class="signin mb-3 formku w-100 button-biru">Lengkapi profile keplab</button>
        </a>
        <a href="/tubesmvc/public/Lengkapi_ProfileLaboran">
            <button type="submit" class="signin mb-3 formku w-100 button-biru">Lengkapi profile laboran</button>
        </a>
        <a href="/tubesmvc/public/Lengkapi_ProfileAsisten">
            <button type="submit" class="signin mb-3 formku w-100 button-biru">Lengkapi profile asisten</button>
        </a>
    </div>

</div>