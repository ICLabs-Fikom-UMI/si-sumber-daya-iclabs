<div class="d-flex justify-content-center mt-5" style="margin-bottom: 175px;">
    <form action="<?= BASEURL ?>/Lupa_Pass/process" method="post" class="form-login" target="_blank">
        <div class="header text-center text-biru mb-4">
            <?php Flasher::flashLoginSignup(); ?>
            <h2>Forget Password</h2>
        </div>
        <div class="form-group mb-4">
            <div class="form-floating">
                <input type="hidden" name="nomor_admin" value="6285824549295">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email Terdaftar</label>
            </div>
        </div>

        <div class="d-flex flex-column align-items-center mb-3">
            <button type="submit" name="submit" class="signin mb-3 formku w-50 button-biru">Submit</button>
        </div>

    </form>
</div>