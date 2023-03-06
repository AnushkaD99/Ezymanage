<?php
class TransferClerk
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  //without search
  public function getSchoolDeatail()
  {
    $this->db->query('SELECT * FROM schools_tbl');

    $results = $this->db->resultSet();

    return $results;
  }

  public function findUserByUsername($username)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE username = :username');
    //bind values
    $this->db->bind(':username', $username);

    $row = $this->db->single();

    //check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function findUserByEmail($email)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE email = :email');
    //bind values
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    //check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function findUserByNIC($nic)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE nic = :nic');
    //bind values
    $this->db->bind(':nic', $nic);

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
    $this->db->query('SELECT * FROM users_tbl WHERE contact_num = :contact');
    //bind values
    $this->db->bind(':contact', $contact);

    $row = $this->db->single();

    //check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function getPrincipalDeatail()
  {
    $this->db->query('SELECT * FROM users_tbl WHERE designation = "Principal"');

    $results = $this->db->resultSet();

    return $results;
  }

  public function getTeacherDeatail()
  {
    $this->db->query('SELECT * FROM users_tbl INNER JOIN teacher_tbl ON users_tbl.emp_no = teacher_tbl.emp_no');

    $results = $this->db->resultSet();

    return $results;
  }

  public function getDirectorDeatail()
  {
    $this->db->query('SELECT * FROM users_tbl WHERE designation = "Director"');

    $results = $this->db->resultSet();

    return $results;
  }

  public function getSchoolClerksDetail()
  {
    $this->db->query('SELECT users_tbl.emp_no as emp_no,
    users_tbl.name_with_initials as name_with_initials,
    users_tbl.address as address,
    users_tbl.contact_num as contact_num,
    users_tbl.birthday as birthday,
    users_tbl.nic as nic,
    school_clerk_tbl.school as school
    FROM users_tbl INNER JOIN school_clerk_tbl ON users_tbl.emp_no = school_clerk_tbl.emp_no WHERE designation = "School Clerk"');

    $results = $this->db->resultSet();

    return $results;
  }

  public function getTransferClerksDetail()
  {
    $this->db->query('SELECT * FROM clerk_transfer');

    $results = $this->db->resultSet();

    return $results;
  }

  public function getZonalClerkDetail()
  {
    $this->db->query('SELECT * FROM users_tbl WHERE designation = "Salary Clerk" || designation = "Transfer Clerk"');

    $results = $this->db->resultSet();

    return $results;
  }


  //with search
  public function searchSchools($data)
  {
    $this->db->query('SELECT * FROM schools_tbl WHERE school_id LIKE :id OR name LIKE :name');
    //bind values
    $this->db->bind(':id', $data['search']);
    $this->db->bind(':name', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }

  public function searchPrincipals($data)
  {
    $this->db->query('SELECT * FROM principal WHERE id LIKE :id OR fullName LIKE :name');

    //bind values
    $this->db->bind(':id', $data['search']);
    $this->db->bind(':name', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }

  public function searchTeachers($data)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE emp_no LIKE :id OR full_name LIKE :name');

    //bind values
    $this->db->bind(':id', $data['search']);
    $this->db->bind(':name', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }

  public function searchDirectors($data)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE emp_no LIKE :id OR full_name LIKE :name');

    //bind values
    $this->db->bind(':id', $data['search']);
    $this->db->bind(':name', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }

  public function searchSchoolClerks($data)
  {
    $this->db->query('SELECT * FROM clerk_school WHERE id LIKE :id OR nameWithInitials LIKE :name');

    //bind values
    $this->db->bind(':id', $data['search']);
    $this->db->bind(':name', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }

  public function searchSalaryClerks($data)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE emp_no LIKE :id OR name_with_initials LIKE :name OR designation LIKE :designation');

    //bind values
    $this->db->bind(':id', $data['search']);
    $this->db->bind(':name', $data['search']);
    $this->db->bind(':designation', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }


  //get by id
  public function getSchoolById($id)
  {
    $this->db->query('SELECT * FROM schools_tbl WHERE school_id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }

  public function getPrincipalById($id)
  {
    $this->db->query('SELECT users_tbl.full_name as full_name,
    users_tbl.name_with_initials as name_with_initials,
    users_tbl.emp_no as emp_no,
    users_tbl.nic as nic,
    users_tbl.address as address,
    users_tbl.birthday as birthday,
    principal_tbl.school as school,
    users_tbl.designation as designation,
    principal_tbl.grade as grade,
    users_tbl.email as email,
    users_tbl.contact_num as contact_num
    FROM users_tbl INNER JOIN principal_tbl ON users_tbl.emp_no = principal_tbl.emp_no WHERE users_tbl.emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }

  public function getTeacherById($id)
  {
    $this->db->query('SELECT users_tbl.full_name as full_name,
    users_tbl.name_with_initials as name_with_initials,
    users_tbl.emp_no as emp_no,
    users_tbl.nic as nic,
    users_tbl.address as address,
    users_tbl.birthday as birthday,
    teacher_tbl.school as school,
    users_tbl.designation as designation,
    teacher_tbl.grade as grade,
    users_tbl.email as email,
    users_tbl.contact_num as contact_num
    FROM users_tbl INNER JOIN teacher_tbl ON users_tbl.emp_no = teacher_tbl.emp_no WHERE users_tbl.emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }

  public function getDirectorById($id)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }
}
