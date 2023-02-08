<?php
  class AdminClerk {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    //without search
    public function getSchoolDeatail(){
      $this->db->query('SELECT * FROM schools');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getPrincipalDeatail(){
      $this->db->query('SELECT * FROM principal');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getTeacherDeatail(){
      $this->db->query('SELECT * FROM teacher');

      $results = $this->db->resultSet();

      return $results;
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

    public function getVolunteerDetail(){
      $this->db->query('SELECT * FROM volunteer');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getUser($id){
      $this->db->query('SELECT users.username as username,
      users.full_name as full_name,
      users.email as email,
      users.id as userId,
      users.designation as designation,
      users.dp as dp,
      admin.nameWithInitials as nameWithInitials,
      admin.address as address,
      admin.contact as contact,
      admin.birthday as birthday,
      admin.zonal as zonal,
      admin.NIC as NIC
      FROM users INNER JOIN admin ON users.username = admin.username WHERE users.id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();
      return $row;
    }

    public function updateprofile($data, $img_name){
      $this->db->query('UPDATE users INNER JOIN admin ON users.username = admin.username
      SET users.full_name = :full_name,
      users.designation = :designation,
      users.email = :email,
      users.password = :password,
      users.dp = :url,
      admin.nameWithInitials = :nameWithInitials,
      admin.address = :address,
      admin.birthDay = :birthday,
      admin.zonal = :zonal,
      admin.NIC = :NIC,
      admin.contact = :contact
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
  }