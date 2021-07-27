<?php
    class giohang extends DController{

        public function __construct(){
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->giohang();
        }

        public function giohang(){
            Session::init();
            $table = 'category';
            $categorymodel = $this->load->model('categorymodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            
            $this->load->view('header',$data);
            $this->load->view('cart');
            $this->load->view('footer');
        }

        public function dathang(){
            Session::init();
            $tb_order = "tb_order";
            $order_detail = "order_detail";
            $ordermodel = $this->load->model('ordermodel');
            $name = $_POST['name'];
            $sodienthoai = $_POST['sodienthoai'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $noidung = $_POST['noidung'];
            $order_code = rand(0,9999);

            date_default_timezone_set('asia/ho_chi_minh');
            $date = date("d/m/Y");
            $hour = date("h:i:sa");
            $order_date = $date.$hour;

            $data_oder = array(
                'od_status' => 0,
                'od_code'   => $order_code ,
                'od_date'   => $date.' '.$hour,
            );
            $result_order = $ordermodel->insert_order($tb_order, $data_oder);
            if(Session::get('shopping_cart')== true){
                foreach(Session::get("shopping_cart") as $key =>$value){
                    $data_order_detail = array(
                        'od_detail_code' => $order_code,
                        'od_pro_id' => $value['pro_id'],
                        'od_pro_qty' => $value['pro_quantity'],
                        'name' => $name,
                        'sodienthoai' => $sodienthoai,
                        'email' => $email,
                        'diachi' => $diachi,
                        'noidung' => $noidung
                    );
                    $result_order_detail = $ordermodel->insert_order_detail($order_detail, $data_order_detail);
                }
                unset($_SESSION['shopping_cart']);
            }
            header("Location:".BASE_URL.'/giohang');
        }

        public function themgiohang(){
            Session::init();

            if(isset($_SESSION["shopping_cart"])){
                $avalable = 0;
                foreach($_SESSION["shopping_cart"] as $key =>$value){
                    if($_SESSION["shopping_cart"][$key]['pro_id']==$_POST['pro_id']){
                        $avalable ++;
                        $_SESSION["shopping_cart"][$key]['pro_quantity'] += $_POST['pro_quantity'];
                    }
                }
                if($avalable == 0){
                    $item = array(
                        'pro_id'        =>  $_POST['pro_id'],
                        'pro_name'      =>  $_POST['pro_name'],
                        'pro_avatar'    =>  $_POST['pro_avatar'],
                        'pro_price'     =>  $_POST['pro_price'],
                        'pro_quantity'  =>  $_POST['pro_quantity']
                    );
                    $_SESSION["shopping_cart"][]=$item;
                }
                header("Location:".BASE_URL.'/giohang');
            }else{
                $item = array(
                    'pro_id'        =>  $_POST['pro_id'],
                    'pro_name'      =>  $_POST['pro_name'],
                    'pro_avatar'    =>  $_POST['pro_avatar'],
                    'pro_price'     =>  $_POST['pro_price'],
                    'pro_quantity'  =>  $_POST['pro_quantity']
                );
                $_SESSION["shopping_cart"][]=$item;
            }
            header("Location:".BASE_URL.'/giohang');
        }

        public function updategiohang(){
            Session::init();
            if(isset($_POST['delete_cart'])){
                if(isset($_SESSION["shopping_cart"])){
                    foreach($_SESSION["shopping_cart"] as $key =>$values){

                        if($_SESSION["shopping_cart"][$key]['pro_id'] == $_POST['delete_cart']){
                            
                          unset($_SESSION["shopping_cart"][$key]);
                        }
                    }
                    header("Location:".BASE_URL.'/giohang');
                }else{
                    header("Location:".BASE_URL);
                }
            }
            else{
                foreach($_POST['pro_quantity'] as $key => $pro_quantity){
                    foreach($_SESSION["shopping_cart"] as $session =>$values){
                        if($values['pro_id'] == $key){
                            $_SESSION['shopping_cart'][$session]['pro_quantity'] = $pro_quantity;
                        }
                    }
                }
                header("Location:".BASE_URL.'/giohang');
                // if(isset($_SESSION["shopping_cart"])){
                //     foreach($_SESSION["shopping_cart"] as $key =>$values){
                //         if($_SESSION["shopping_cart"][$key]['pro_id']==$_POST['delete_id']){
                            
                //           unset($_SESSION["shopping_cart"][$key]);
                //         }
                //     }
                //     header("Location:".BASE_URL.'/giohang');
                // }else{
                //     header("Location:".BASE_URL);
                // }
            }
            
        }
    }

?>