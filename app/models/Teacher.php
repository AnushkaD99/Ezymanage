<?php
    class Teacher {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function submitLeaveForm($data, $interval){
            $this->db->query('INSERT INTO leave_details (reason, commencing_date, resuming_date, leave_type, userId, submitted_date, days) VALUES (:reason, :commencing_date, :resuming_date, :leave_type, :userId, :submitted_date, :days)');
            // Bind values
            $this->db->bind(':reason', $data['reason']);
            $this->db->bind(':commencing_date', $data['commencing_date']);
            $this->db->bind(':resuming_date', $data['resuming_date']);
            $this->db->bind(':leave_type', $data['leave_type']);
            $this->db->bind(':userId', $data['userId']);
            $this->db->bind(':submitted_date', $data['submitted_date']);
            $this->db->bind(':days', $interval);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        //calculate leave days
        public function getDateDifference($startDate, $endDate) {
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);
            $difference = $start->diff($end);
            return $difference;
        }

        public function getLeaveDeatail(){
            $this->db->query('SELECT * FROM leave_details WHERE userId = :id ORDER BY id DESC LIMIT 5');
            $this->db->bind(':id', $_SESSION['user_id']);

            $results = $this->db->resultSet();
            return $results;
        }

        public function getLeaveById($id){
            $this->db->query('SELECT * FROM leave_details WHERE id = :id');
            $this->db->bind(':id', $id);
      
            $row = $this->db->single();
            return $row;
        }

        public function addKaryasadanaya($data){
            $this->db->query('INSERT INTO karyasadana(userId , start_date, end_date, submittedDate, tasks1, Indicators1, Problems1, tasks2, Indicators2, Problems2, tasks3, Indicators3, Problems3, tasks4, Indicators4, Problems4, tasks5, Indicators5, Problems5)
            VALUES (:userId, :start_date, :end_date, :submittedDate, :tasks1, :Indicators1, :Problems1, :tasks2, :Indicators2, :Problems2, :tasks3, :Indicators3, :Problems3, :tasks4, :Indicators4, :Problems4, :tasks5, :Indicators5, :Problems5)');
            // Bind values
            $this->db->bind(':userId', $data['userId']);
            $this->db->bind(':start_date', $data['start_date']);
            $this->db->bind(':end_date', $data['end_date']);
            $this->db->bind(':submittedDate', $data['submittedDate']);
            $this->db->bind(':tasks1', $data['tasks1']);
            $this->db->bind(':Indicators1', $data['Indicators1']);
            $this->db->bind(':Problems1', $data['Problems1']);
            $this->db->bind(':tasks2', $data['tasks2']);
            $this->db->bind(':Indicators2', $data['Indicators2']);
            $this->db->bind(':Problems2', $data['Problems2']);
            $this->db->bind(':tasks3', $data['tasks3']);
            $this->db->bind(':Indicators3', $data['Indicators3']);
            $this->db->bind(':Problems3', $data['Problems3']);
            $this->db->bind(':tasks4', $data['tasks4']);
            $this->db->bind(':Indicators4', $data['Indicators4']);
            $this->db->bind(':Problems4', $data['Problems4']);
            $this->db->bind(':tasks5', $data['tasks5']);
            $this->db->bind(':Indicators5', $data['Indicators5']);
            $this->db->bind(':Problems5', $data['Problems5']);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getKaryasadanaDeatail(){
            $this->db->query('SELECT * FROM karyasadana WHERE userId = :id ORDER BY id DESC LIMIT 5');
            $this->db->bind(':id', $_SESSION['user_id']);

            $results = $this->db->resultSet();
            return $results;
        }

        public function getKaryasadanaById($id){
            $this->db->query('SELECT * FROM karyasadana WHERE id = :id');
            $this->db->bind(':id', $id);
      
            $row = $this->db->single();
            return $row;
        }




        public function getUser($id){
            $this->db->query('SELECT users.username as username,
            users.full_name as full_name,
            users.email as email,
            users.id as userId,
            users.designation as designation,
            users.dp as dp,
            teacher.nameWithInitials as nameWithInitials,
            teacher.address as address,
            teacher.contactNumber as contact,
            teacher.bday as birthday,
            teacher.school as school,
            teacher.currentGrade as currentGrade,
            teacher.NIC as NIC
            FROM users INNER JOIN teacher ON users.username = teacher.username WHERE users.id = :id');
            $this->db->bind(':id', $id);
      
            $row = $this->db->single();
            return $row;
        }

        // public function getSchoolDeatail($school){
        //     $this->db->query('SELECT * FROM schools WHERE school = :school');
        //     $this->db->bind(':school', $school);
      
        //     $results = $this->db->resultSet();
      
        //     return $results;
        //   }


        //ISSUES************************************
        public function addIssue($data){
            $this->db->query('INSERT INTO issues(user_id, submitted_date, issue_type, issue_cat, issue) VALUES (:user_id, :submitted_date, :issue_type, :issue_cat, :issue)');
            // Bind values
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':submitted_date', $data['submitted_date']);
            $this->db->bind(':issue_type', $data['issue_type']);
            $this->db->bind(':issue_cat', $data['issue_cat']);
            $this->db->bind(':issue', $data['description']);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getSubmittedIssues(){
            $this->db->query('SELECT * FROM issues WHERE user_id = :id ORDER BY id DESC LIMIT 5');
            $this->db->bind(':id', $_SESSION['user_id']);

            $results = $this->db->resultSet();
            return $results;
        }

    }