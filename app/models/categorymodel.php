<?php 
    class categorymodel extends DModel{

        public function __construct(){
            parent::__construct();
        }

        /**
         * Backend ADMin 
         */
        public function category( $category ){
            $sql = "SELECT * FROM $category";
           return $this->db->select($sql);
        }

        public function categorybyid($category, $cond){
            $sql = "SELECT * FROM $category where $cond";
            return $this->db->select($sql);
        }

        public function insertcategory($category, $data){
            return $this->db->insert($category, $data);
            
        }

        public function updatecategory($category, $data, $cond){
            return $this->db->update($category, $data, $cond);
            
        }
        public function deletecategory($category, $cond){
            return $this->db->delete($category, $cond);
        }

        /**
         * FontEnd 
         */
        public function categoryFE( $category ){
            $sql = "SELECT * FROM $category";
           return $this->db->select($sql);
        }
        
    }
?>