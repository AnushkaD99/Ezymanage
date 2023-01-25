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
  
      public function updateprofile($id){
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
    
  }