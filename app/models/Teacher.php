<?php
    class Teacher {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function submitLeaveForm($data){
            $this->db->query('INSERT INTO leave_details (reason, commensing_date, resuming_date, casual, medical, other, userId) VALUES (:reason, :commensing_date, :resuming_date, :casual, :medical, :other, :userId)');
            // Bind values
            $this->db->bind(':reson', $data['reason']);
            $this->db->bind(':commensing_date', $data['commensing_date']);
            $this->db->bind(':resuming_date', $data['resuming_date']);
            $this->db->bind(':casual', $data['casual']);
            $this->db->bind(':medical', $data['medical']);
            $this->db->bind(':other', $data['other']);
            $this->db->bind(':userId', $data['userId']);   

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }