<?php
  class Director {
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
        director.nameWithInitials as nameWithInitials,
        director.address as address,
        director.contact as contact,
        director.birthday as birthday,
        director.zonal as zonal,
        director.NIC as NIC
        FROM users INNER JOIN director ON users.username = director.username WHERE users.id = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
        return $row;
      }
  
      public function updateprofile($data, $img_name){
        $this->db->query('UPDATE users INNER JOIN director ON users.username = director.username
        SET users.full_name = :full_name,
        users.designation = :designation,
        users.email = :email,
        users.password = :password,
        users.dp = :url,
        director.nameWithInitials = :nameWithInitials,
        director.address = :address,
        director.birthDay = :birthday,
        director.zonal = :zonal,
        director.NIC = :NIC,
        director.contact = :contact
        WHERE users.id = :id');
        // Bind values
        //$this->db->bind(':userId', $data['userId']);
        $this->db->bind(':full_name', $data['full_name']);
        $this->db->bind(':designation', $data['designation']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':url', $img_name);
        $this->db->bind(':nameWithInitials', $data['name_with_initials']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':birthday', $data['birthday']);
        $this->db->bind(':zonal', $data['zonal']);
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

      //get Appointments
      public function getAppointments(){
        $this->db->query('SELECT users.full_name as name,
        users.designation as designation,
        appointment.id as id,
        appointment.date as date,
        appointment.start_time as start_time,
        appointment.end_time as end_time,
        appointment.reason as reason
         FROM users INNER JOIN appointment ON appointment.userId = users.id WHERE appointment.status = "Pending"');
  
        $results = $this->db->resultSet();
        return $results;
      }
  
      //update status
      public function updateStatus($data){
        $this->db->query("UPDATE appointment SET status = :status WHERE id = :id");
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

      //with search
    public function searchSchools($data){
      $this->db->query('SELECT * FROM schools WHERE id LIKE :id OR name LIKE :name');
      //bind values
      $this->db->bind(':id', $data['search']);
      $this->db->bind(':name', $data['search']);

      $results = $this->db->resultSet();

      return $results;
    }

    public function searchPrincipals($data){
      $this->db->query('SELECT * FROM principal WHERE id LIKE :id OR fullName LIKE :name');

      //bind values
      $this->db->bind(':id', $data['search']);
      $this->db->bind(':name', $data['search']);

      $results = $this->db->resultSet();

      return $results;
    }

    public function searchTeachers($data){
      $this->db->query('SELECT * FROM teacher WHERE id LIKE :id OR fullName LIKE :name');

      //bind values
      $this->db->bind(':id', $data['search']);
      $this->db->bind(':name', $data['search']);

      $results = $this->db->resultSet();

      return $results;
    }
    
  }