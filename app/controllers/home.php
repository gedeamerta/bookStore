<?php 
class Home extends Controller 
{
    public function index()
    {
        $data['judul'] = 'Home - User'; // masuk ke parameter view yaitu $data
        $data['book'] = $this->model('Home_model')->getAllBook();
        $this->view('templates/header', $data); // ada 2 param pada $this->view yaitu 'templates/header' dan $data
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function book()
    {
        $data['judul'] = 'Book List - User'; // masuk ke parameter view yaitu $data
        $data['book'] = $this->model('Home_model')->getAllBook();
        $this->view('templates/header-book', $data); // ada 2 param pada $this->view yaitu 'templates/header' dan $data
        $this->view('home/book', $data);
        $this->view('templates/footer');
    }

    public function bookData($id)
    {
        $data['judul'] = 'Book - User'; // masuk ke parameter view yaitu $data
        $data['book'] = $this->model('Home_model')->getBookLimit();
        $data['book_single'] = $this->model('Home_model')->getBookId($id);
        $this->view('templates/header-book', $data); // ada 2 param pada $this->view yaitu 'templates/header' dan $data
        $this->view('home/bookData', $data);
        $this->view('templates/footer');
    }

    public function store()
    {
        $data['judul'] = 'Book Store - User'; // masuk ke parameter view yaitu $data
        $this->view('templates/header-bookStore', $data); // ada 2 param pada $this->view yaitu 'templates/header' dan $data
        $this->view('home/store');
        $this->view('templates/footer');
    }

    public function register()
    {
        if (!isset($_POST['register'])) {
            $data['judul'] = 'Home - User'; // masuk ke parameter view yaitu $data
            $this->view('templates/header', $data); // ada 2 param pada $this->view yaitu 'templates/header' dan $data
            $this->view('home/index');
            $this->view('templates/footer');
        }else{
            if ($this->model("Home_model")->registerUser($_POST) > 0) {
                var_dump("berhasil");
                header('Location: ' . baseurl . '/home');
            }else{
                var_dump("gagal");
                Flasher::setFailRegister('Anda gagal untuk registrasi');
                header('Location: '. baseurl .'/home');
            }
        } 
    }

    public function login()
    {
        if ($this->model("Home_model")->loginUser($_POST) > 0) {
            var_dump("berhasil");
            Flasher::setSuccessLogin('Login Berhasil');
            header('Location: ' . baseurl . '/dashboard');
        } else {
            var_dump("gagal");
            Flasher::setFailLogin('Login Gagal');
            header('Location: ' . baseurl . '/home');
            }
        }
    }