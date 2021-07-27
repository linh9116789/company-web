<?php
    class login extends DController{

        public function __construct()
        {
            $message= array();
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->login();
        }

        public function login(){
            Session::init();
            if(Session::get('login') == true){
                header("Location:".BASE_URL."/login/dasboard");
            }
            $this->load->view('admin/login');
        }

        public function dasboard(){
            Session::checkSession();
            $this->load->view('admin/header');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/footer');
        }

        public function authentication_login(){

            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $user = 'user';
            $loginmodel = $this->load->model('loginmodel');
            $count = $loginmodel->login($user, $username, $password);
            if($count == 0){
                $message['msg'] = "Dang nhap that bai";
                header("Location:".BASE_URL."/login");
            }else{
                $result = $loginmodel->getLogin($user, $username, $password);
                Session::init();
                Session::set('login',true);
                Session::set('username', $result[0]['username']);
                Session::set('userid', $result[0]['id']);
                header("Location:".BASE_URL."/login/dasboard");
            }
        }

        public function logout(){
            Session::init();
            Session::destroy();
            header("Location:".BASE_URL."/login");
        }

    }

?>