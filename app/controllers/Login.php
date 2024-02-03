<?php


class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header_loginSignup', $data);
        $this->view('templates/top_navbar_loginSIgnup');
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function login()
    {
        session_start();
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = $this->model('User_model')->login($email, $password);

                if ($user) {
                    $role = $this->model('User_model')->getRoleByEmail($email);


                    // Set session user
                    $_SESSION['role'] = $role['role'];
                    $_SESSION['id_user'] = $role['id_user'];


                    if ($role['role'] == 'Admin') {
                        header("Location: http://localhost:8080/tubesmvc/public/Dashboard");
                    } else if ($role['role'] == 'Kepala Lab') {
                        $idUser['kepala_lab'] = $this->model('KepalaLab_model')->checkIdUser($user['id_user']);

                        if ($idUser['kepala_lab'] == false) {
                            $this->model('KepalaLab_model')->insertIduser($user['id_user']);
                        }

                        $userData = $this->model('KepalaLab_model')->getDataKepalaLabByUserId($user['id_user']);

                        $isIdentitasComplete = true;
                        $identitasColumns = ['nama_kepala_lab', 'nidn', 'lulusan', 'dosen_prodi', 'mulai_menjabat', 'email', 'no_telp', 'deskripsi', 'bidang_keahlian'];

                        foreach ($identitasColumns as $column) {
                            if (empty($userData[$column])) {
                                $isIdentitasComplete = false;
                                break;
                            }
                        }

                        if ($isIdentitasComplete == true) {
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_KepLab/detail_profile/" . $user['id_user']);
                        } else {
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Keplab");
                        }
                    } else if ($role['role'] == 'Laboran') {
                        $idUser['laboran'] = $this->model('Laboran_model')->checkIdUser($user['id_user']);
                        var_dump($idUser);


                        if ($idUser['laboran'] == false) {
                            $this->model('Laboran_model')->insertIduser($user['id_user']);
                        }

                        $userData = $this->model('Laboran_model')->getDataLaboranByUserId($user['id_user']);

                        $isIdentitasComplete = true;
                        $identitasColumns = ['nama_laboran', 'lulusan', 'mulai_menjabat', 'email', 'no_telp', 'deskripsi', 'bidang_keahlian'];

                        foreach ($identitasColumns as $column) {
                            if (empty($userData[$column])) {
                                $isIdentitasComplete = false;
                                break;
                            }
                        }

                        if ($isIdentitasComplete == true) {
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Laboran/detail_profile/" . $user['id_user']);
                        } else {
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Laboran");
                        }
                    } else if ($role['role'] == 'Asisten Lab') {
                        $idUser['asisten'] = $this->model('Asisten_model')->checkIdUser($user['id_user']);

                        if ($idUser['asisten'] == false) {
                            $this->model('Asisten_model')->insertIduser($user['id_user']);
                        }

                        $userData = $this->model('Asisten_model')->getDataAsistenByUserId($user['id_user']);

                        $isIdentitasComplete = true;
                        $identitasColumns = ['nama_asisten', 'kelas', 'nim', 'prodi', 'angkatan', 'email', 'no_telp', 'alamat', 'deskripsi', 'bidang_keahlian', 'riwayat_matkul'];

                        foreach ($identitasColumns as $column) {
                            if (empty($userData[$column])) {
                                $isIdentitasComplete = false;
                                break;
                            }
                        }

                        if ($isIdentitasComplete == true) {
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Asisten/detail_profile/" . $user['id_user']);
                        } else {
                            header("Location: http://localhost:8080/tubesmvc/public/Profile_Asisten");
                        }
                    }
                }
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}
