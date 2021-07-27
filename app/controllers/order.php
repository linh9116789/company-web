<?php
    class order extends DController{

        public function __construct()
        {
            $message = array();
            Session::checkSession();
            parent::__construct();
        }

        public function index(){
            $this->showOrder();
        }
        
        public function showOrder(){
            $this->load->view('admin/header');
            
            $ordermodel = $this->load->model('ordermodel');
            $order = 'tb_order';
            $data['orders'] = $ordermodel->order($order);

            $this->load->view('admin/order/index',$data);
            $this->load->view('admin/footer');
        }

        public function order_detail($od_code){
            $this->load->view('admin/header');
            
            $ordermodel = $this->load->model('ordermodel');
            $tb_order_detail = 'order_detail';
            $product = "product";
            $cond = "$product.pro_id = $tb_order_detail.od_pro_id AND $tb_order_detail.od_detail_code = '$od_code'";
            $cond_info = "$tb_order_detail.od_detail_code = '$od_code'";

            $data['order_details'] = $ordermodel->order_detail($product, $tb_order_detail, $cond);
            $data['order_info'] = $ordermodel->order_info($tb_order_detail, $cond_info);

            $this->load->view('admin/order/order_detail',$data);
            $this->load->view('admin/footer');
        }

        public function order_confirm($od_code){
            $ordermodel = $this->load->model('ordermodel');
            $order = 'tb_order';
            $cond  = "tb_order.od_code = '$od_code'";
            $data = array(
                'od_status' => 1,
            );
            $result = $ordermodel->order_confirm($order,$data, $cond);
            if($result == 1){
                $message['msg'] = "Cập nhật đơn hàng thành công !";
            header("Location:".BASE_URL."/order/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật đơn hàng thất bại !";
            header("Location:".BASE_URL."/order/index?msg=".urldecode(serialize($message)));
            }
        }
    }
?>