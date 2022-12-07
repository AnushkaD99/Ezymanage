<?php
    class User {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        //Login User
        public function login($username, $password){
            $this->db->query('SELECT * FROM teacher WHERE username = :username');
            $this->db->bind(':username', $username);

            $row = $this->db->single();

            $hashed_password = $row->password;
            if(password_verify($password, $hashed_password)){
                return $row;
            } else {
                return false;
            }
        }

        // Find user by username
        public function findUserByUsername($username){
            $this->db->query('SELECT * FROM teacher WHERE username = :username');
            // Bind value
            $this->db->bind(':username', $username);

            $row = $this->db->single();

            // Check row
            if($this->db->rowCount() > 0){
                return true;
            } else {
                return false;
            }
        }

        //Get User by ID
        public function getUserById($id){
            $this->db->query('SELECT * FROM teacher WHERE id = :id');
            $this->db->bind(':id', $id);

            $row = $this->db->single();

            return $row;
        }
    }