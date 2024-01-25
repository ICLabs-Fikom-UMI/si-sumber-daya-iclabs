<?php
class Login extends Controller
{

    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header_loginSignup');
        $this->view('templates/top_navbar_loginSIgnup');
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        // Ambil data dari form login
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Panggil model untuk validasi login
        $userModel = $this->model('user_model');
        $user = $userModel->getUserByEmail($email);

        // Verifikasi password
        if ($user && password_verify($password, $user['password'])) {
            // Login berhasil
            session_start();
            $_SESSION['user_id'] = $user['id'];

            // Cek peran (role) user
            if ($user['role'] == 'Admin') {
                // Redirect ke halaman admin
                echo 'Kamu admin';
                // header('Location: /admin/dashboard');
            } elseif ($user['role'] == 'Kepala Lab') {
                // Redirect ke halaman user
                echo 'Kamu kepala lab';
                // header('Location: /user/dashboard'); 
            } elseif ($user['role'] == 'Laboran') {
                // Redirect ke halaman user
                echo 'Kamu Laboran';
                // header('Location: /user/dashboard'); 
            } elseif ($user['role'] == 'Asisten') {
                // Redirect ke halaman user
                echo 'Kamu Asisten';
                // header('Location: /user/dashboard'); 
                exit();
            } else {
                // Login gagal, tampilkan pesan error atau redirect kembali ke halaman login
                echo "Email atau password salah.";
                // header('Location: /login'); // Jika ingin redirect kembali ke halaman login
            }
        }
    }
}
