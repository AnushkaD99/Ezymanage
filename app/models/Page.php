<?php
    class Page {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Register Volunteer
        public function register($data){
            $this->db->query('INSERT INTO volunteers_tbl(first_name, last_name, nic, birthday, address, contact_num, email, subjects, qualifications, other)
            VALUES(:first_name, :last_name, :nic, :birthday, :address, :contact_num, :email, :subjects, :qualifications, :other)');
            // Bind values
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':nic', $data['nic']);
            $this->db->bind(':birthday', $data['birthday']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':contact_num', $data['contact_num']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':subjects', $data['subjects']);
            $this->db->bind(':qualifications', $data['qualifications']);
            $this->db->bind(':other', $data['other']);

            //execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }