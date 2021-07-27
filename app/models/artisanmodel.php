<?php 
    class artisanmodel extends DModel{

        public function __construct(){
            parent::__construct();
        }


        /**
         * Back End
         */
        public function artisan( $artisan ){
            $sql = "SELECT * FROM $artisan";
           return $this->db->select($sql);
        }

        public function artisanbyid($artisan, $cond){
            $sql = "SELECT * FROM $artisan where $cond";
            return $this->db->select($sql);
        }

        public function insertartisan($table, $data){
            return $this->db->insert($table, $data);
            
        }

        public function updateartisan($artisan, $data, $cond){
            return $this->db->update($artisan, $data, $cond);
            
        }
        public function deleteartisan($artisan, $cond){
            return $this->db->delete($artisan, $cond);
        }

        /**
         * Font End
         */

        public function artisanFE( $artisan ){
            $sql = "SELECT * FROM $artisan";
           return $this->db->select($sql);
        }

        public function artisan_detailFE($artisan,$cond){
            $sql = "SELECT * FROM $artisan WHERE $cond ORDER BY $artisan.a_id DESC";
           return $this->db->select($sql);
        }

        public function postFE($post){
            $sql = "SELECT * FROM $post  ORDER BY $post.a_id DESC LIMIT 4";
            return $this->db->select($sql);
        }
    }
?>