<<<<<<< HEAD
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
        $email = $_POST['email'];
        $password = $_POST['password'];

        $role = $this->model('User_model')->getRoleByEmail($email);

        echo var_dump($_POST);
        echo "<br></br>";

        $id_user = $this->model('User_model')->validateLogin($email, $password);

        if ($id_user) {
            echo "Berhasil Login";

            $is_password_default = $this->model('User_model')->isDefaultPassword($password);
            // [PENTINGJ] hapus tanda (!) negasi untuk sementara untuk mengabaikan password default
            if (!$is_password_default) {
                // header('Location: change-default-password.php');
                echo "Password Default";
                exit();
            } else {
                $_SESSION['id_user'] = $id_user;
                $_SESSION['role_user'] = $role['role'];
                header('Location: ' . BASEURL . '/daftarNilai');
                exit;
            }
        } else {
            echo "Email Atau Password Salah";
        }
    }

}
