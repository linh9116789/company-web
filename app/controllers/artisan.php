<?php
    class artisan extends DController{

        public function __construct()
        {
            Session::checkSession();
            $message = array();
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->showArtisan();
        }
        
        public function showArtisan($data = NULL){
            $this->load->view('admin/header');
            $artisanmodel = $this->load->model('artisanmodel');
            $artisan = 'artisan';
            $data['artisan'] = $artisanmodel->artisan($artisan);
            $this->load->view('admin/artisan/index',$data);
            $this->load->view('admin/footer');
        }

        public function add(){
            $this->load->view('admin/header');
            $this->load->view('admin/artisan/add');
            $this->load->view('admin/footer');
        }


        public function edit($id){

            $artisan = 'artisan';
            $cond = "a_id = '$id'";
            $artisanmodel = $this->load->model('artisanmodel');

            $data['artisanbyid'] = $artisanmodel->artisanbyid($artisan, $cond);

            $this->load->view('admin/header');
            $this->load->view('admin/artisan/edit',$data);
            $this->load->view('admin/footer');
        }

        public function insertartisan(){
            
            $artisanmodel = $this->load->model('artisanmodel');

            $table = 'artisan';
            $name = $_POST['a_name'];
            $description = $_POST['a_description'];
            $title = $_POST['a_title'];
            $images= $_FILES['a_avatar']['name'];
            $tmp_image =  $_FILES['a_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/uploads/post/".$unique_image;

            $data = array(
                'a_name'          => $name,
                'a_description'   => $description,
                'a_title'         => $title,
                'a_avatar'        => $unique_image
            );
            $result = $artisanmodel->insertartisan($table, $data);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Thêm dữ liệu thành công !";
            header("Location:".BASE_URL."/artisan/add?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Thêm dữ liệu thất bại !";
                header("Location:".BASE_URL."/artisan/add?msg=".urldecode(serialize($message)));
            }

        }

        public function updateartisan($id){

            $artisanmodel = $this->load->model('artisanmodel');

            $artisan = 'artisan';
            $cond = "a_id = '$id'";

            $name = $_POST['a_name'];
            $title = $_POST['a_title'];
            $description = $_POST['a_description'];
            
            $images= $_FILES['a_avatar']['name'];
            $tmp_image =  $_FILES['a_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/uploads/post/".$unique_image;

            if($images){
                $data['productbyid'] = $artisanmodel->artisanbyid($artisan, $cond);
                foreach($data['productbyid'] as $key =>$value){
                    $path_unlink = "public/uploads/post/";
                    unlink($path_unlink.$value['a_avatar']);
                }
                move_uploaded_file($tmp_image, $path_uploads);
                $data = array(
                    'a_name'          => $name,
                    'a_title'         => $title,
                    'a_description'   => $description,
                    'a_avatar'        => $unique_image
                );
            }else{
                $data = array(
                    'a_name'          => $name,
                    'a_title'         => $title,
                    'a_description'   => $description
                    // 'a_avatar'        => $unique_image
                );
            }
            $result = $artisanmodel->updateartisan($artisan, $data, $cond);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Cập nhật dữ liệu thành công !";
            header("Location:".BASE_URL."/artisan/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhập dữ liệu thất bại !";
                header("Location:".BASE_URL."/artisan/index?msg=".urldecode(serialize($message)));
            }
 
        }
        
        public function deleteartisan($id){
            $artisanmodel = $this->load->model('artisanmodel');
            $artisan = 'artisan';
            $cond = "a_id = '$id'";
        
            $result = $artisanmodel->deleteartisan($artisan, $cond);
            if($result == 1){
                $message['msg'] = "Xóa dữ liệu thành công !";
            header("Location:".BASE_URL."/artisan/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Xóa dữ liệu thất bại !";
                header("Location:".BASE_URL."/artisan/index?msg=".urldecode(serialize($message)));
            }
        }
    }

?>