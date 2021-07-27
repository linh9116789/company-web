<?php
    class index extends DController{

        public function __construct(){
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->homepage();
        }

        public function homepage(){
            Session::init();
            $table = 'category';
            $product = "product";
            $post = "artisan";
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
            $artisanmodel = $this->load->model('artisanmodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            $data['list_productFE'] = $productmodel->list_productFE($product);

            $data['postFE'] = $artisanmodel->postFE($post);
            $this->load->view('header',$data);
            $this->load->view('slider',$data);
            $this->load->view('homepage',$data);
            $this->load->view('footer');
        }

        public function notfound(){
            $this->load->view('header');
            $this->load->view('404');
            $this->load->view('footer');
        }

    }

?>