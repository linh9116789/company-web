<?php 
    class productmodel extends DModel{

        public function __construct(){
            parent::__construct();
        }
        /**
         * Back End
         */

        public function product( $product, $category){
            $sql = "SELECT * FROM $product, $category WHERE $product.pro_category_id = $category.c_id ORDER BY $product.pro_id";
           return $this->db->select($sql);
        }

        public function productbyid($product, $cond){
            $sql = "SELECT * FROM $product where $cond";
            return $this->db->select($sql);
        }

        public function insertproduct($table, $data){
            return $this->db->insert($table, $data);
            
        }

        public function updateproduct($product, $data, $cond){
            return $this->db->update($product, $data, $cond);
            
        }
        public function deleteproduct($product, $cond){
            return $this->db->delete($product, $cond);
        }

        /**
         * Font end
         */

        public function productFE($table, $product, $id){
            $sql = "SELECT * FROM $product, $table WHERE $product.pro_category_id = $table.c_id AND $product.pro_category_id = '$id' ORDER BY $product.pro_id DESC";
            return $this->db->select($sql);
        }

        public function productFE_hot($product){
            $sql = "SELECT * FROM $product WHERE $product.pro_hot = 1 ORDER BY $product.pro_id DESC";
            return $this->db->select($sql);
        }

        public function allproduct($product,$cond){
            $sql = "SELECT * FROM $product ORDER BY $cond";
            return $this->db->select($sql);
        }

        public function detail_productFE($table,$product,$cond){
            $sql = "SELECT * FROM $table, $product WHERE $cond ";
            return $this->db->select($sql);
        }

        public function related_productFE($table,$product,$cond_related){
            $sql = "SELECT * FROM $table, $product WHERE $cond_related ";
            return $this->db->select($sql);
        }

        public function list_productFE($product){
            $sql = "SELECT * FROM $product ORDER BY $product.pro_id DESC LIMIT 5";
            return $this->db->select($sql);
        }

    }
?>