<?php
    class sanpham extends DController{

        public function __construct(){
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->danhmuc();
        }

        public function allProduct(){
            $product= 'product';
            $table = 'category';
            $cond = "$product.pro_id DESC";
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            $data['allproduct'] =  $productmodel->allproduct($product, $cond);
            $this->load->view('header',$data);
            $this->load->view('all_product',$data);
            $this->load->view('footer');
        }

        public function sanphamhot(){
            $product= 'product';
            $table = 'category';
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            $data['productFE_hot'] =  $productmodel->productFE_hot($product);
            $this->load->view('header',$data);
            $this->load->view('product_hot',$data);
            $this->load->view('footer');
        }

        public function danhmuc($id){
            $product= 'product';
            $table = 'category';
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            $data['productFE'] =  $productmodel->productFE($table, $product,$id);
            $this->load->view('header',$data);
            $this->load->view('categoryproduct',$data);
            $this->load->view('footer');
        }

        public function chitietsanpham($id){
            
            $product= 'product';
            $table = 'category';
            $cond = "$product.pro_category_id = $table.c_id AND $product.pro_id = '$id'";
            
            $productmodel = $this->load->model('productmodel');
            $categorymodel = $this->load->model('categorymodel');
            $data['categoryFE'] =  $categorymodel->categoryFE($table);
            $data['detail_product'] =  $productmodel->detail_productFE($table,$product,$cond);
            

            foreach($data['detail_product'] as $key =>$cate){
                $category_id = $cate['c_id'];
            }
            $cond_related = "$product.pro_category_id = $table.c_id AND $table.c_id = '$category_id' AND $product.pro_id NOT IN('$id')";
            $data['related_product'] =  $productmodel->related_productFE($table,$product,$cond_related);

            $this->load->view('header',$data);
            $this->load->view('detail_product',$data);
            $this->load->view('footer');
        }

    }

?>