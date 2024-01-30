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
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = $this->model('User_model')->login($email, $password);

                if ($user) {
                    $role = $this->model('User_model')->getRoleByEmail($email);

                    // Set session user
                    $_SESSION['user'] = [
                        'id_user' => $user['id_user'],
                        'email' => $user['email'],
                        'role' => $role
                    ];

                    // var_dump($_SESSION);

                    // Redirect sesuai role
                    switch ($role) {
                        case 'Admin':
                            header("Location: http://localhost:8080/tubesmvc/public/Signup");
                            break;
                        case 'Kepala Lab':
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Asisten/detail_asisten");
                            break;
                        case 'Laboran':
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Asisten/detail_asisten");
                            break;
                        case 'Asisten Lab':
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Asisten/detail_asisten");
                            break;
                        default:
                            // Redirect ke halaman default jika role tidak dikenali
                            header("Location: http://localhost:8080/tubesmvc/public/Login");
                            break;
                    }
                } 
            }
        } catch (Throwable $th) {
            echo $th;
        }
        
    }

    // public function login()
    // {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     try {
    //         $role = $this->model('User_model')->getRoleByEmail($email);
    //         echo var_dump($_POST);
    //         echo "<br></br>";

    //         $id_user = $this->model('User_model')->validateLogin($email, $password);
    //     } catch (Throwable $e) {
    //         echo $e;
    //     }

    //     // $id_user = $this->model('User_model')->validateLogin($email, $password);

    //     // if ($id_user) {
    //     //     echo "Berhasil Login";
    //     // }
    // }
}
