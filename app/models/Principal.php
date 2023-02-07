<?php
  class Principal {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getSchoolDeatail(){
      $this->db->query('SELECT * FROM schools ORDER BY id DESC');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getPrincipalDeatail(){
      $this->db->query('SELECT * FROM principal ORDER BY id DESC');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getTeacherDeatail(){
      $this->db->query('SELECT * FROM teacher ORDER BY id DESC');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getSchoolById($id){
        $this->db->query('SELECT * FROM schools WHERE id = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
        return $row;
    }

    public function getPrincipalById($id){
        $this->db->query('SELECT * FROM principal WHERE id = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
        return $row;
    }

    public function getTeacherById($id){
        $this->db->query('SELECT * FROM teacher WHERE id = :id');
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
        principal.nameWithInitials as nameWithInitials,
        principal.address as address,
        principal.contactNumber as contact,
        principal.bday as birthday,
        principal.school as zonal,
        principal.NIC as NIC
        FROM users INNER JOIN principal ON users.username = principal.username WHERE users.id = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
        return $row;
      }
  
      public function updateprofile($id){
        $this->db->query('SELECT users.username as username,
        users.full_name as full_name,
        users.email as email,
        users.id as userId,
        users.designation as designation,
        users.dp as dp,
        principal.nameWithInitials as nameWithInitials,
        principal.address as address,
        principal.contactNumber as contact,
        principal.bday as birthday,
        principal.school as zonal,
        principal.NIC as NIC
        FROM users INNER JOIN principal ON users.username = principal.username WHERE users.id = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
        return $row;
      }

      public function submitLeaveForm($data){
        $this->db->query('INSERT INTO leave_details (reason, commencing_date, resuming_date, leave_type, userId, submitted_date) VALUES (:reason, :commencing_date, :resuming_date, :leave_type, :userId, :submitted_date)');
        // Bind values
        $this->db->bind(':reason', $data['reason']);
        $this->db->bind(':commencing_date', $data['commencing_date']);
        $this->db->bind(':resuming_date', $data['resuming_date']);
        $this->db->bind(':leave_type', $data['leave_type']);
        $this->db->bind(':userId', $data['userId']);
        $this->db->bind(':submitted_date', $data['submitted_date']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
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

    //School mangement
    //Leave management
    public function getLeaves(){
        $this->db->query('SELECT teacher.nameWithInitials as name,
        teacher.designation as designation,
        teacher.school as school,
        leave_details.id as leave_id,
        leave_details.commencing_date as commencing_date,
        leave_details.resuming_date as resuming_date,
        leave_details.reason as reason,
        leave_details.leave_type as leave_type
         FROM leave_details INNER JOIN teacher ON leave_details.userId = teacher.id WHERE leave_details.status = "Pending"');

        $results = $this->db->resultSet();
        return $results;
    }

    public function updateStatus($data){
      $table = $data['title'];
      $this->db->query("UPDATE $table SET status = :status WHERE id = :id");
      // Bind values
      $this->db->bind(':status', $data['status']);
      $this->db->bind(':id', $data['form_id']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
          return false;
      }
    }

    //Karyasadanaya
    public function getKaryasadana(){
      $this->db->query('SELECT teacher.nameWithInitials as name,
      teacher.designation as designation,
      teacher.school as school,
      karyasadana.id as karyasadana_id,
      karyasadana.submittedDate as submitted_date
       FROM karyasadana INNER JOIN teacher ON karyasadana.userId = teacher.id WHERE karyasadana.status = "Pending"');

      $results = $this->db->resultSet();
      return $results;
    }

    //Issues
    public function getIssues(){
      $this->db->query('SELECT teacher.nameWithInitials as name,
      teacher.designation as designation,
      teacher.school as school,
      issues.id as issue_id,
      issues.submitted_date as submitted_date,
      issues.issue_cat as issue_cat,
      issues.issue as issue
       FROM issues INNER JOIN teacher ON issues.user_id = teacher.id WHERE issues.issue_type="School" && issues.status = "Pending"');

      $results = $this->db->resultSet();
      return $results;
    }
    
  }