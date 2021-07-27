<?php
    class khachhang extends DController{

        public function __construct(){
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->dangnhap();
        }

        public function dangnhap(){
            $table = 'category';
            $product = "product";
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            $data['list_productFE'] = $productmodel->list_productFE($product);
            Session::init();
            $this->load->view('header',$data);
            $this->load->view('dangnhap');
            $this->load->view('footer');
        }

        public function insert_dangky(){
            $customermodel = $this->load->model('customermodel');

            $table = 'customers';

            $name       = $_POST['cus_name'];
            $phone      = $_POST['cus_phone'];
            $email      = $_POST['cus_email'];
            $password   = $_POST['cus_password'];
            $address    = $_POST['cus_address'];
            


            $data = array(
                'cus_name'     => $name,
                'cus_phone'    => $phone,
                'cus_email'    => $email,
                'cus_password' => md5($password),
                'cus_address'  => $address

            );
            $result = $customermodel->insertcustomer($table, $data);
            if($result == 1){
                $message['msg'] = "Đăng ký tài khoản thành công !";
            header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Đăng ký tài khoản thất bại !";
                header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urldecode(serialize($message)));
            }
        }

        public function login_customer(){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $customer = 'customers';
            $customermodel = $this->load->model('customermodel');
            $count = $customermodel->login($customer, $username, $password);
            if($count == 0){
            $message['msg'] = "Đăng nhap that bai !";
            header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urldecode(serialize($message)));
            }else{
                $result = $customermodel->getLogin($customer, $username, $password);
                Session::init();
                Session::set('customer',true);
                Session::set('cus_name', $result[0]['cus_name']);
                Session::set('cus_id', $result[0]['cus_id']);
                $message['msg'] = "thanh cong  !";
                header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urldecode(serialize($message)));
            }
        }

        public function dangxuat(){
            Session::init();
			Session::unset('customer');
            $message['msg'] = "Đăng xuất tài khoản thành công !";
                header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urldecode(serialize($message)));
        }

        public function notfound(){
            $this->load->view('header');
            $this->load->view('404');
            $this->load->view('footer');
        }

    }

?>