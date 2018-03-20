<?php
    class User_model extends CI_Model{
        public function login($username, $password){

            // Validate login information
            $this->db->where('UserName', $username);
            $this->db->where('Password', $password);

            $result = $this->db->get('users');

            if($result->num_rows() == 1){
                return $result->row(0)->UserID;
            } else {
                return false;
            }
        }
    }