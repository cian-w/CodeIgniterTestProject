<?php
    class Model_users extends CI_Model{
        function __construct(){
            parent::__construct();//call model constructor
        }
        function getFirstNames(){
            $query = $this->db->query('SELECT * FROM users'); // returns object

            if($query->num_rows() > 0){
                return $query->result();
            }
            else{
                return NULL;
            }

        }
        function getUsers(){
            $query = $this->db->query('SELECT * FROM users');

            if($query->num_rows() > 0){
                return $query->result(); // returns array of objects
            }
            else{
                return NULL;
            }
        }

    }
