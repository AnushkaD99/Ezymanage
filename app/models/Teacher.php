<?php
    class Teacher {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function submitLeaveForm($data, $interval){
            $this->db->query('INSERT INTO leaves_tbl (reason, commencing_date, resuming_date, leave_type, emp_no, submitted_date, days) VALUES (:reason, :commencing_date, :resuming_date, :leave_type, :userId, :submitted_date, :days)');
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
            $this->db->query('SELECT * FROM leaves_tbl WHERE emp_no = :id ORDER BY leave_id DESC');
            $this->db->bind(':id', $_SESSION['user_id']);

            $results = $this->db->resultSet();
            return $results;
        }

        public function getLeaveById($id){
            $this->db->query('SELECT * FROM leaves_tbl WHERE leave_id = :id');
            $this->db->bind(':id', $id);
      
            $row = $this->db->single();
            return $row;
        }

        public function addKaryasadanaya($data){
            $this->db->query('INSERT INTO karyasadana_tbl(emp_np , start_date, end_date, submitted_date, tasks1, indicators1, problems1, tasks2, indicators2, problems2, tasks3, indicators3, problems3, tasks4, indicators4, problems4, tasks5, indicators5, problems5)
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
            $this->db->query('SELECT * FROM karyasadana_tbl WHERE emp_no = :id ORDER BY karyasadana_id DESC LIMIT 5');
            $this->db->bind(':id', $_SESSION['user_id']);

            $results = $this->db->resultSet();
            return $results;
        }

        public function getKaryasadanaById($id){
            $this->db->query('SELECT * FROM karyasadana_tbl WHERE karyasadana_id = :id');
            $this->db->bind(':id', $id);
      
            $row = $this->db->single();
            return $row;
        }

        public function getUser($id){
            $this->db->query('SELECT users_tbl.username as username,
            users_tbl.full_name as full_name,
            users_tbl.email as email,
            users_tbl.emp_no as userId,
            users_tbl.designation as designation,
            users_tbl.dp as dp,
            users_tbl.name_with_initials as nameWithInitials,
            users_tbl.address as address,
            users_tbl.contact_num as contact,
            users_tbl.birthday as birthday,
            teacher_tbl.school as school,
            teacher_tbl.grade as currentGrade,
            users_tbl.nic as NIC
            FROM users_tbl INNER JOIN teacher_tbl ON users_tbl.emp_no = teacher_tbl.emp_no WHERE users_tbl.emp_no = :id');
            $this->db->bind(':id', $id);
      
            $row = $this->db->single();
            return $row;
        }

        public function updateprofile($data, $img_name){
            $this->db->query('UPDATE users_tbl INNER JOIN teacher_tbl ON users_tbl.emp_no = teacher_tbl.emp_no
            SET users_tbl.full_name = :full_name,
            users_tbl.designation = :designation,
            users_tbl.email = :email,
            users_tbl.dp = :url,
            users_tbl.name_with_initials = :nameWithInitials,
            users_tbl.address = :address,
            users_tbl.birthday = :birthday,
            teacher_tbl.school = :school,
            users_tbl.nic = :NIC,
            users_tbl.contact_num = :contact
            WHERE users_tbl.emp_no = :id');
            // Bind values
            //$this->db->bind(':userId', $data['userId']);
            $this->db->bind(':full_name', $data['full_name']);
            $this->db->bind(':designation', $data['designation']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':url', $img_name);
            $this->db->bind(':nameWithInitials', $data['name_with_initials']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':birthday', $data['birthday']);
            $this->db->bind(':school', $data['school']);
            $this->db->bind(':NIC', $data['NIC']);
            $this->db->bind(':contact', $data['contact']);
            $this->db->bind(':id', $_SESSION['user_id']);
            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }

        public function getSchoolDetails($school_name){
            $this->db->query('SELECT * FROM schools_tbl WHERE name = :school');
            $this->db->bind(':school', $school_name);
      
            $results = $this->db->single();
      
            return $results;
          }


        //ISSUES************************************
        public function addIssue($data){
            $this->db->query('INSERT INTO issue_tbl(emp_no, submitted_date, issue_type, issue_cat, issue) VALUES (:user_id, :submitted_date, :issue_type, :issue_cat, :issue)');
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
            $this->db->query('SELECT * FROM issue_tbl WHERE emp_no = :id ORDER BY issue_id DESC LIMIT 5');
            $this->db->bind(':id', $_SESSION['user_id']);

            $results = $this->db->resultSet();
            return $results;
        }

    //Appointment page**********************************************************************************************
        //add appointment
        public function addAppointment($data){
            $this->db->query('INSERT INTO appointment_tbl(emp_no, date, start_time, end_time, reason, submitted_date) VALUES (:user_id, :date, :start_time, :end_time, :reason, :submitted_date)');
            // Bind values
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':date', $data['date']);
            $this->db->bind(':start_time', $data['start_time']);
            $this->db->bind(':end_time', $data['end_time']);
            $this->db->bind(':reason', $data['reason']);
            $this->db->bind(':submitted_date', $data['submitted_date']);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        //get appointment details
        public function getSubmittedAppointments($data){
            $this->db->query('SELECT * FROM appointment_tbl WHERE emp_no = :id ORDER BY appointment_id');
            // Bind values
            $this->db->bind(':id', $_SESSION['user_id']);
            
            $results = $this->db->resultSet();
            return $results;
        }

        //get school by user id
        public function getSchoolByUserId(){
            $this->db->query('SELECT school FROM teacher_tbl WHERE emp_no = :id');
            // Bind values
            $this->db->bind(':id', $_SESSION['user_id']);
            
            $row = $this->db->single();
            return $row;
        }

    }