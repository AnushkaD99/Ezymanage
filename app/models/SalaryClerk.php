<?php
class SalaryClerk
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  //Update clerks Profile
  public function updateProfile($data)
  {
    $this->db->query('UPDATE users_tbl
      SET username = :username,
      full_name = :full_name,
      name_with_initials = :nameWithInitials,
      birthday = :birthday,
      address = :address,
      contact_num = :contact,
      email = :email
      WHERE emp_no = :id');
    // Bind values
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':full_name', $data['full_name']);
    $this->db->bind(':nameWithInitials', $data['name_with_initials']);
    $this->db->bind(':birthday', $data['birthday']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':contact', $data['contact_num']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':id', $_SESSION['user_id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //Update clerks Profile
  public function updatePassword($data)
  {
    $this->db->query('UPDATE users_tbl SET password = :password WHERE emp_no = :id');
    // Bind values
    $this->db->bind(':password', $data['hashed_password']);
    $this->db->bind(':id', $_SESSION['user_id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //Update clerks Contact number
  public function updateContactNum($data)
  {
    $this->db->query('UPDATE users_tbl SET contact_num = :contact_num WHERE emp_no = :id');
    // Bind values
    $this->db->bind(':contact_num', $data['contact_num']);
    $this->db->bind(':id', $_SESSION['user_id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //Update Address
  public function updateAddress($data)
  {
    $this->db->query('UPDATE users_tbl SET address = :address WHERE emp_no = :id');
    // Bind values
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':id', $_SESSION['user_id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //check email already exists
  public function findUserByEmail($email)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE email = :email && emp_no != :id');
    //bind values
    $this->db->bind(':email', $email);
    $this->db->bind(':id', $_SESSION['user_id']);

    $row = $this->db->single();

    //check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function findUserByContact($contact)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE contact_num = :contact && emp_no != :id');
    //bind values
    $this->db->bind(':contact', $contact);
    $this->db->bind(':id', $_SESSION['user_id']);

    $row = $this->db->single();

    //check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
  
  public function findUserByUsername($username)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE username = :username && emp_no != :id');
    //bind values
    $this->db->bind(':username', $username);
    $this->db->bind(':id', $_SESSION['user_id']);

    $row = $this->db->single();

    //check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function getpaysheet()
  {
    $designation = 'Teacher' || 'Principal';
    $this->db->query("SELECT * FROM users_tbl WHERE designation = 'Teacher' || designation = 'Principal'");

    $results = $this->db->resultSet();
    return $results;
  }
}
