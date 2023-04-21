<?php
class AdminClerk
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
    FROM users_tbl INNER JOIN school_clerk_tbl ON users_tbl.emp_no = school_clerk_tbl.emp_no WHERE designation = "Clerk School"');

    $results = $this->db->resultSet();

    return $results;
  }

  public function getZonalClerkDetail()
  {
    $this->db->query('SELECT * FROM users_tbl WHERE designation = "Clerk Salary" || designation = "Clerk Transfer"');

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

  public function getVolunteerDetail()
  {
    $this->db->query('SELECT * FROM volunteers_tbl');

    $results = $this->db->resultSet();

    return $results;
  }

  public function getVolunteerDetailsByID($id)
  {
    $this->db->query('SELECT * FROM volunteers_tbl WHERE id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }

  public function getUser($id)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }

  public function updateprofile($data, $img_name)
  {
    $this->db->query('UPDATE users_tbl
      SET full_name = :full_name,
      designation = :designation,
      email = :email,
      dp = :url,
      name_with_initials = :nameWithInitials,
      address = :address,
      birthday = :birthday,
      nic = :NIC,
      contact_num = :contact
      WHERE emp_no = :id');
    // Bind values
    //$this->db->bind(':userId', $data['userId']);
    $this->db->bind(':full_name', $data['full_name']);
    $this->db->bind(':designation', $data['designation']);
    $this->db->bind(':email', $data['email']);
    //$this->db->bind(':password', $data['password']);
    $this->db->bind(':url', $img_name);
    $this->db->bind(':nameWithInitials', $data['name_with_initials']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':birthday', $data['birthday']);
    //$this->db->bind(':zonal', $data['zonal']);
    $this->db->bind(':NIC', $data['NIC']);
    $this->db->bind(':contact', $data['contact']);
    $this->db->bind(':id', $_SESSION['user_id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //add_teacher
  public function addTeacher($data)
  {
    $this->db->query('INSERT INTO users_tbl(username, password, designation, full_name, name_with_initials, gender, birthday, nic, address, contact_num, email, dp)
      VALUES(:username, :password, :designation, :full_name, :name_with_initials, :gender, :birthday, :nic, :address, :contact_num, :email, :dp)');

    // Bind values
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':password', $data['hashed_password']);
    $this->db->bind(':designation', $data['designation']);
    $this->db->bind(':full_name', $data['full_name']);
    $this->db->bind(':name_with_initials', $data['name_with_initials']);
    $this->db->bind(':gender', $data['gender']);
    $this->db->bind(':birthday', $data['birthday']);
    $this->db->bind(':nic', $data['nic']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':contact_num', $data['contact']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':dp', $data['dp']);

    // Execute
    if ($this->db->execute()) {
      $this->db->query('SELECT emp_no FROM users_tbl WHERE username = :username');
      $this->db->bind(':username', $data['username']);
      $row = $this->db->single();
      $emp_no = $row->emp_no;

      $this->db->query('INSERT INTO teacher_tbl(emp_no, school, grade)
      VALUES(:emp_no, :school, :grade)');

      // Bind values
      $this->db->bind(':emp_no', $emp_no);
      $this->db->bind(':school', $data['school']);
      $this->db->bind(':grade', $data['grade']);

      // Execute second query
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }


  //add principal
  public function addPrincipal($data)
  {
    $this->db->query('INSERT INTO users_tbl(username, password, designation, full_name, name_with_initials, gender, birthday, nic, address, contact_num, email, dp)
      VALUES(:username, :password, :designation, :full_name, :name_with_initials, :gender, :birthday, :nic, :address, :contact_num, :email, :dp)');

    // Bind values
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':designation', $data['designation']);
    $this->db->bind(':full_name', $data['full_name']);
    $this->db->bind(':name_with_initials', $data['name_with_initials']);
    $this->db->bind(':gender', $data['gender']);
    $this->db->bind(':birthday', $data['birthday']);
    $this->db->bind(':nic', $data['nic']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':contact_num', $data['contact']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':dp', $data['dp']);

    // Execute
    if ($this->db->execute()) {
      $this->db->query('SELECT emp_no FROM users_tbl WHERE username = :username');
      $this->db->bind(':username', $data['username']);
      $row = $this->db->single();
      $emp_no = $row->emp_no;

      $this->db->query('INSERT INTO principal_tbl(emp_no, school, grade)
      VALUES(:emp_no, :school, :grade)');

      // Bind values
      $this->db->bind(':emp_no', $emp_no);
      $this->db->bind(':school', $data['school']);
      $this->db->bind(':grade', $data['grade']);

      // Execute second query
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  //add school_clerk
  public function addSchoolClerk($data)
  {
    $this->db->query('INSERT INTO users_tbl(username, password, designation, full_name, name_with_initials, gender, birthday, nic, address, contact_num, email, dp)
      VALUES(:username, :password, :designation, :full_name, :name_with_initials, :gender, :birthday, :nic, :address, :contact_num, :email, :dp)');

    // Bind values
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':designation', $data['designation']);
    $this->db->bind(':full_name', $data['full_name']);
    $this->db->bind(':name_with_initials', $data['name_with_initials']);
    $this->db->bind(':gender', $data['gender']);
    $this->db->bind(':birthday', $data['birthday']);
    $this->db->bind(':nic', $data['nic']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':contact_num', $data['contact']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':dp', $data['dp']);

    // Execute
    if ($this->db->execute()) {
      $this->db->query('SELECT emp_no FROM users_tbl WHERE username = :username');
      $this->db->bind(':username', $data['username']);
      $row = $this->db->single();
      $emp_no = $row->emp_no;

      $this->db->query('INSERT INTO principal_tbl(emp_no, school)
      VALUES(:emp_no, :school)');

      // Bind values
      $this->db->bind(':emp_no', $emp_no);
      $this->db->bind(':school', $data['school']);

      // Execute second query
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  //add school
  public function addSchool($data)
  {
    $this->db->query('INSERT INTO schools_tbl(name, address, contact_num, email, moto, vision, mission, principal, type, student_count, teacher_count)
      VALUES(:name, :address, :contact_num, :email, :moto, :vision, :mission, :principal, :school_type, :student_count, :teacher_count)');

    // Bind values
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':contact_num', $data['contact_num']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':moto', $data['moto']);
    $this->db->bind(':vision', $data['vision']);
    $this->db->bind(':mission', $data['mission']);
    $this->db->bind(':principal', $data['principal']);
    $this->db->bind(':school_type', $data['school_type']);
    $this->db->bind(':student_count', $data['student_count']);
    $this->db->bind(':teacher_count', $data['teacher_count']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //add zonal clerk
  public function addZonalClerk($data)
  {
    $this->db->query('INSERT INTO users_tbl(username, password, designation, full_name, name_with_initials, gender, birthday, nic, address, contact_num, email, dp)
      VALUES(:username, :password, :designation, :full_name, :name_with_initials, :gender, :birthday, :nic, :address, :contact_num, :email, :dp)');

    // Bind values
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':designation', $data['designation']);
    $this->db->bind(':full_name', $data['full_name']);
    $this->db->bind(':name_with_initials', $data['name_with_initials']);
    $this->db->bind(':gender', $data['gender']);
    $this->db->bind(':birthday', $data['birthday']);
    $this->db->bind(':nic', $data['nic']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':contact_num', $data['contact']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':dp', $data['dp']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
