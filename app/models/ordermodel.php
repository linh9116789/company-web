<?php 
    class ordermodel extends DModel{

        public function __construct(){
            parent::__construct();
        }

        public function order( $order ){
            $sql = "SELECT * FROM $order ORDER BY od_id DESC";
           return $this->db->select($sql);
        }

        public function insert_order($order,$data_oder){
            return $this->db->insert($order, $data_oder);
        }

        public function insert_order_detail($order_detail, $data_order_detail){
            return $this->db->insert($order_detail, $data_order_detail);
        }

        public function order_detail($product, $order_detail, $cond){
            $sql = "SELECT * FROM $product, $order_detail  WHERE $cond ";
            return $this->db->select($sql);
        }

        public function order_info($tb_order_detail, $cond_info){
            $sql = "SELECT * FROM $tb_order_detail  WHERE $cond_info LIMIT 1 ";
            return $this->db->select($sql);
        }

        public function order_confirm($order,$data, $cond){
            return $this->db->update($order, $data, $cond);
        }
    }
?>