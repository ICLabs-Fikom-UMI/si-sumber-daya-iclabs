<div class="container-fluid vw-100 d-flex align-items-center justify-content-center" style="height: 80vh;">
    <div class="position-relativekotak rounded-5 p-5 shadow-lg" style="background: rgb(43,70,88);background: linear-gradient(183deg, rgba(43,70,88,1) 0%, rgba(12,23,64,1) 92%); margin-top: 100px;">
        <h3 class="fs-3 mb-4 text-center text-white">Ubah Password</h3>
        <form action="<?= BASEURL ?>/Profile_Laboran/process_password/<?= $data['id_user']['id_user'] ?>" method="post" onsubmit="return validatePassword()">
            <div class="form-floating mb-3">
                <input type="hidden" name="id_user" value="<?= $data['id_user']['id_user'] ?>">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" style="width: 300px;">
                <label for="floatingPassword">Password Baru</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password" name="confirm_password" style="width: 300px;">
                <label for="confirmPassword">Konfirmasi Password Baru</label>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary" type="submit">SIMPAN</button>
            </div>
        </form>
    </div>
</div>