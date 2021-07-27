<?php 
    class customermodel extends DModel{

        public function __construct(){
            parent::__construct();
        }

        public function insertcustomer($table, $data){
            return $this->db->insert($table, $data);
        }

        public function login( $customer, $username, $password){
            $sql = "SELECT * FROM $customer WHERE cus_email =? AND cus_password =? ";
           return $this->db->affectedRows( $sql, $username, $password );
        }

        public function getLogin($customer, $username, $password){
            $sql = "SELECT * FROM $customer WHERE cus_email =? AND cus_password =? ";
           return $this->db->selectUser( $sql, $username, $password );
        }


    }
?>