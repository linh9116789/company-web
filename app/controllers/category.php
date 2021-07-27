<?php
    class category extends DController{

        public function __construct()
        {
            Session::checkSession();
            $message = array();
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->showCategory();
        }
        
        public function showCategory($data = NULL){
            $this->load->view('admin/header');
            $categorymodel = $this->load->model('categorymodel');
            $category = 'category';
            $data['category'] = $categorymodel->category($category);
            $this->load->view('admin/category/index',$data);
            $this->load->view('admin/footer');
        }

        public function add(){
            $this->load->view('admin/header');
            $this->load->view('admin/category/add');
            $this->load->view('admin/footer');
        }


        public function edit($id){

            $category = "category";
            $cond = "c_id = '$id'";
            $categorymodel = $this->load->model('categorymodel');

            $data['categorybyid'] = $categorymodel->categorybyid($category, $cond);

            $this->load->view('admin/header');
            $this->load->view('admin/category/edit',$data);
            $this->load->view('admin/footer');
        }

        public function insertcategory($data = NULL){
            
            $categorymodel = $this->load->model('categorymodel');

            $category = 'category';
            $name = $_POST['c_name'];
            $description = $_POST['c_description'];
            $data = array(
                'c_name'          => $name,
                'c_description'   => $description 
            );
            $result = $categorymodel->insertcategory($category, $data);
            if($result == 1){
                $message['msg'] = "Thêm dữ liệu thành công !";
            header("Location:".BASE_URL."/category/add?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Thêm dữ liệu thất bại !";
                header("Location:".BASE_URL."/category/add?msg=".urldecode(serialize($message)));
            }

        }

        public function updatecategory($id){

            $categorymodel = $this->load->model('categorymodel');

            $category = 'category';
            $cond = "c_id = '$id'";

            $name = $_POST['c_name'];
            $description = $_POST['c_description'];

            $data = array(
                'c_name'          => $name,
                'c_description'   => $description
            );
            $result = $categorymodel->updatecategory($category, $data, $cond);
            if($result == 1){
                $message['msg'] = "Thêm dữ liệu thành công !";
            header("Location:".BASE_URL."/category/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Thêm dữ liệu thất bại !";
                header("Location:".BASE_URL."/category/index?msg=".urldecode(serialize($message)));
            }
 
        }
        
        public function deletecategory($id){
            $categorymodel = $this->load->model('categorymodel');
            $category = 'category';
            $cond = "c_id = '$id'";
        
            $result = $categorymodel->deletecategory($category, $cond);
            if($result == 1){
                $message['msg'] = "Xóa dữ liệu thành công !";
            header("Location:".BASE_URL."/category/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Xóa dữ liệu thất bại !";
                header("Location:".BASE_URL."/category/index?msg=".urldecode(serialize($message)));
            }
        }
    }

?>