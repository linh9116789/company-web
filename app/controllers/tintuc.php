<?php
    class tintuc extends DController{

        public function __construct(){
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->danhmuc();
        }

        public function danhmuc(){

            $table = 'category';
            $categorymodel = $this->load->model('categorymodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);

            $artisan = 'artisan';
            $artisanmodel = $this->load->model('artisanmodel');
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            $this->load->view('header',$data);
            $this->load->view('categorypost',$data);
            $this->load->view('footer');
        }

        public function chitiettintuc($id){
            $table = 'category';
            $categorymodel = $this->load->model('categorymodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);

            $product= 'product';
            $cond = "$product.pro_id DESC LIMIT 4";
            $productmodel = $this->load->model('productmodel');
            $data['allproduct'] =  $productmodel->allproduct($product,$cond);

            $artisan = 'artisan';
            $cond = "artisan.a_id='$id'";
            $artisanmodel = $this->load->model('artisanmodel');
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);

            $data['artisan_detailFE'] = $artisanmodel->artisan_detailFE($artisan,$cond);
            $this->load->view('header',$data);
            $this->load->view('detail_post',$data);
            $this->load->view('footer');
        }


    }

?>