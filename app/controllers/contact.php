<?php
    class contact extends DController{

        public function __construct(){
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->lienhe();
        }

        public function lienhe(){
            $table = 'category';
            $categorymodel = $this->load->model('categorymodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            $this->load->view('header',$data);
            $this->load->view('lienhe');
            $this->load->view('footer');
        }

    }

?>