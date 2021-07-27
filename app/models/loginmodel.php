<?php 
    class loginmodel extends DModel{

        public function __construct(){
            parent::__construct();
        }

        public function login( $user, $username, $password){
            $sql = "SELECT * FROM $user WHERE username =? AND password =? ";
           return $this->db->affectedRows( $sql, $username, $password );
        }

        public function getLogin($user, $username, $password){
            $sql = "SELECT * FROM $user WHERE username =? AND password =? ";
           return $this->db->selectUser( $sql, $username, $password );
        }
    }
?>