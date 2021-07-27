<?php
    class product extends DController{

        public function __construct()
        {
            Session::checkSession();
            $message = array();
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->showProduct();
        }
        
        public function showProduct(){
            $this->load->view('admin/header');
            
            $productmodel = $this->load->model('productmodel');
            $category = 'category';
            $product = 'product';
            $data['product'] = $productmodel->product($product, $category);

            $this->load->view('admin/product/index',$data);
            $this->load->view('admin/footer');
        }

        public function add(){
            $this->load->view('admin/header');
            $categorymodel = $this->load->model('categorymodel');
            $category = 'category';
            $data['category'] = $categorymodel->category($category);
            $this->load->view('admin/product/add',$data);
            $this->load->view('admin/footer');
        }


        public function edit($id){

            $product = "product";
            $category = 'category';
            $cond = "pro_id = '$id'";

            $productmodel = $this->load->model('productmodel');
            $categorymodel = $this->load->model('categorymodel');
            
            $data['category'] = $categorymodel->category($category);
            $data['productbyid'] = $productmodel->productbyid($product, $cond);

            $this->load->view('admin/header');
            $this->load->view('admin/product/edit',$data);
            $this->load->view('admin/footer');
        }

        public function insertproduct(){
            
            $productmodel = $this->load->model('productmodel');

            $table = 'product';

            $name = $_POST['pro_name'];
            $description = $_POST['pro_description'];
            $pro_category_id = $_POST['pro_category_id'];
            $price = $_POST['pro_price'];
            $sale = $_POST['pro_sale'];
            $hot = $_POST['pro_hot'];

            $images= $_FILES['pro_avatar']['name'];
            $tmp_image =  $_FILES['pro_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/uploads/product/".$unique_image;

            $qty = $_POST['pro_qty'];

            $data = array(
                'pro_name'          => $name,
                'pro_description'   => $description,
                'pro_category_id'   => $pro_category_id,
                'pro_price'         => $price,
                'pro_sale'          => $sale,
                'pro_avatar'        => $unique_image,
                'pro_qty'           => $qty,
                'pro_hot'           => $hot

            );
            $result = $productmodel->insertproduct($table, $data);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Thêm dữ liệu thành công !";
            header("Location:".BASE_URL."/product/add?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Thêm dữ liệu thất bại !";
                header("Location:".BASE_URL."/product/add?msg=".urldecode(serialize($message)));
            }

        }

        public function updateproduct($id){

            $productmodel = $this->load->model('productmodel');

            $product = 'product';
            $cond = "pro_id = '$id'";

            $name = $_POST['pro_name'];
            $description = $_POST['pro_description'];
            $pro_category_id = $_POST['pro_category_id'];
            $price = $_POST['pro_price'];
            $sale = $_POST['pro_sale'];
            $hot = $_POST['pro_hot'];
            $images= $_FILES['pro_avatar']['name'];
            $tmp_image =  $_FILES['pro_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/uploads/product/".$unique_image;
            $qty = $_POST['pro_qty'];

            if($images){
                $data['productbyid'] = $productmodel->productbyid($product, $cond);
                foreach($data['productbyid'] as $key =>$value){
                    $path_unlink = "public/uploads/product/";
                    unlink($path_unlink.$value['pro_avatar']);
                }
                move_uploaded_file($tmp_image, $path_uploads);
                $data = array(
                    'pro_name'          => $name,
                    'pro_description'   => $description,
                    'pro_category_id'   => $pro_category_id,
                    'pro_price'         => $price,
                    'pro_sale'          => $sale,
                    'pro_avatar'        => $unique_image,
                    'pro_qty'           => $qty,
                    'pro_hot'           => $hot
                );
            }else{
                $data = array(
                    'pro_name'          => $name,
                    'pro_description'   => $description,
                    'pro_category_id'   => $pro_category_id,
                    'pro_price'         => $price,
                    'pro_sale'          => $sale,
                    // 'pro_avatar'        => $unique_image,
                    'pro_qty'           => $qty,
                    'pro_hot'           => $hot
                );
            }
            $result = $productmodel->updateproduct($product, $data, $cond);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Cập nhật dữ liệu thành công !";
            header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhập dữ liệu thất bại !";
                header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }
 
        }
        
        public function deleteproduct($id){
            $productmodel = $this->load->model('productmodel');
            $product = 'product';
            $cond = "pro_id = '$id'";
        
            $result = $productmodel->deleteproduct($product, $cond);
            if($result == 1){
                $message['msg'] = "Xóa dữ liệu thành công !";
            header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Xóa dữ liệu thất bại !";
                header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }
        }
    }

?>