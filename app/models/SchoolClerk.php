<?php
class Principal
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  //school clerk add project details
  public function addProject($data)
  {
    // Add current date to the form data
    $data['date_added'] = date('Y-m-d H:i:s');

    // Insert the form data into the database
    $this->db->query('INSERT INTO project_tbl
                        (name, description, drive_link, user_id estimate_date) 
                        VALUES (:name, :description, :drive_link, :user_id, :estimate_date)');
    // Bind values
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':description', $data['description']);
    //$this->db->bind(':date_added', $data['date_added']);
    $this->db->bind(':drive_link', $data['drive_link']);
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':estimate_date', $data['estimate_date']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

   //get project
   public function getSubmittedProjects()
   {
    $this->db->query('SELECT * FROM project_tbl WHERE user_id = :id');
    $this->db->bind(':id', $_SESSION['user_id']);

    $results = $this->db->resultSet();
    return $results;
   }

   //school profile
    public function getSchoolProfile()
    {
      $this->db->query('SELECT * FROM school_tbl WHERE user_id = :id');
      $this->db->bind(':id', $_SESSION['user_id']);
  
      $results = $this->db->resultSet();
      return $results;
    }

    //Profile
  public function getUser($id)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->resultSet();
    return $row;
  }
}