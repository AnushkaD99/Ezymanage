<?php
class Common
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  //Common funtions for teacher and principal-------------------------------------------------------
  //calculate leave days
  public function getDateDifference($startDate, $endDate)
  {
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $difference = $start->diff($end);
    return $difference;
  }

  //submit leave form
  public function submitLeaveForm($data, $interval)
  {
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
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //get leave details
  public function getLeaveDeatail()
  {
    $this->db->query('SELECT * FROM leaves_tbl WHERE emp_no = :id ORDER BY leave_id DESC');
    $this->db->bind(':id', $_SESSION['user_id']);

    $results = $this->db->resultSet();
    return $results;
  }

  //add karyasadanaya
  public function addKaryasadanaya($data)
  {
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
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //get karyasadana details
  public function getKaryasadanaDeatail()
  {
    $this->db->query('SELECT * FROM karyasadana_tbl WHERE emp_no = :id ORDER BY karyasadana_id DESC LIMIT 5');
    $this->db->bind(':id', $_SESSION['user_id']);

    $results = $this->db->resultSet();
    return $results;
  }

  //get submitted issues
  public function getSubmittedIssues()
  {
    $this->db->query('SELECT * FROM issue_tbl WHERE emp_no = :id ORDER BY issue_id DESC LIMIT 5');
    $this->db->bind(':id', $_SESSION['user_id']);

    $results = $this->db->resultSet();
    return $results;
  }

  //add issues
  public function addIssue($data)
  {
    $this->db->query('INSERT INTO issue_tbl(emp_no, submitted_date, issue_type, issue_cat, issue) VALUES (:user_id, :submitted_date, :issue_type, :issue_cat, :issue)');
    // Bind values
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':submitted_date', $data['submitted_date']);
    $this->db->bind(':issue_type', $data['issue_type']);
    $this->db->bind(':issue_cat', $data['issue_cat']);
    $this->db->bind(':issue', $data['description']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //get school details
  public function getSchoolDetails($school_name)
  {
    $this->db->query('SELECT * FROM schools_tbl WHERE name = :school');
    $this->db->bind(':school', $school_name);

    $results = $this->db->single();

    return $results;
  }

  //add appointment
  public function addAppointment($data)
  {
    $this->db->query('INSERT INTO appointment_tbl(emp_no, date, start_time, end_time, reason, submitted_date) VALUES (:user_id, :date, :start_time, :end_time, :reason, :submitted_date)');
    // Bind values
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':date', $data['date']);
    $this->db->bind(':start_time', $data['start_time']);
    $this->db->bind(':end_time', $data['end_time']);
    $this->db->bind(':reason', $data['reason']);
    $this->db->bind(':submitted_date', $data['submitted_date']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //get school by user id
  public function getSchoolByUserId($userid, $userroleFromLeave)
  {
    if ($userroleFromLeave == 'Teacher') {
      $role = 'teacher_tbl';
    } else if ($userroleFromLeave == 'Principal') {
      $role = 'principal_tbl';
    }
    $this->db->query("SELECT school FROM $role WHERE emp_no = :id");
    // Bind values
    $this->db->bind(':id', $userid);

    $row = $this->db->single();
    return $row;
  }

  //Director, Clerks---------------------------------------------------------------------------------
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

  public function getTransferClerksDetail()
  {
    $this->db->query('SELECT * FROM clerk_transfer');

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

  //Profile
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

  //get Teachers Basic Salary
  public function getTeacher($id)
  {
    $this->db->query('SELECT * FROM teacher_tbl WHERE emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }

  public function getPrincipal($id)
  {
    $this->db->query('SELECT * FROM principal_tbl WHERE emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
  }


  public function getTeachersBasicSalary($grade, $step)
  {
    $this->db->query('SELECT basic_salary FROM teacher_salary_details_tbl WHERE class = :grade AND step = :step');

    //bind values
    if($grade == 'Third Class First Grade'){
      $grade = 'Class 3-i';
    }
    if($grade == 'Second Class Second Grade'){
      $grade = 'Class 2-ii';
    }
    if($grade == 'Second Class First Grade'){
      $grade = 'Class 2-i';
    }
    if($grade == 'First Class'){
      $grade = 'Class 1';
    }
    $this->db->bind(':grade', $grade);
    $this->db->bind(':step', $step);

    $row = $this->db->single();

    return $row;
  }

  public function getPrincipalrsBasicSalary($grade, $step)
  {
    $this->db->query('SELECT * FROM principal_salary_details_tbl WHERE grade = :grade AND step = :step');

    //bind values
    $this->db->bind(':grade', $grade);
    $this->db->bind(':step', $step);

    $row = $this->db->single();

    return $row;
  }

  public function getNecAll1()
  {
    $this->db->query('SELECT amount FROM allowance_tbl WHERE name = "INT ALL 3"');
    $row = $this->db->single();

    return $row;
  }

  public function getCOL()
  {
    $this->db->query('SELECT amount FROM allowance_tbl WHERE name = "Cost of Living"');
    $row = $this->db->single();

    return $row;
  }

  public function getTepAll()
  {
    $this->db->query('SELECT amount FROM allowance_tbl WHERE name = "Telephone Allowance"');
    $row = $this->db->single();

    return $row;
  }

  public function getExcAll()
  {
    $this->db->query('SELECT amount FROM allowance_tbl WHERE name = "Executive Allowance"');
    $row = $this->db->single();

    return $row;
  }

  public function getStampDed()
  {
    $this->db->query('SELECT amount FROM deduction_tbl WHERE name = "Stamp"');
    $row = $this->db->single();

    return $row;
  }

  public function getAgraharaDed($id)
  {
    $this->db->query('SELECT agrahara FROM teacher_tbl WHERE emp_no = :emp_no');

    //bind values
    $this->db->bind(':emp_no', $id);

    $row = $this->db->single();

    return $row;

  }

  public function getWANDOP()
  {
    $this->db->query('SELECT amount FROM deduction_tbl WHERE name = "W. & O. P."');
    $row = $this->db->single();

    return $row;
  }

  public function getAgraharaAmount($agrahara)
  {
    $this->db->query('SELECT amount FROM agrahara_tbl WHERE scheme = :name');
      //bind values
      $this->db->bind(':name', $agrahara);
      $row = $this->db->single();

      return $row;
  }

  public function getAllowances($id)
  {
    $this->db->query('SELECT allowance_id FROM user_allowances_tbl WHERE emp_no = :emp_no');
      //bind values
      $this->db->bind(':emp_no', $id);
      $results = $this->db->resultSet();

      return $results;
  }

  public function getAllowances_amount($all_id)
  {
    $this->db->query('SELECT amount FROM allowance_tbl WHERE id = :all_id');
      //bind values
      $this->db->bind(':all_id', $all_id);
      $row = $this->db->single();

      return $row;
  }

  public function getDeductions($id)
  {
    $this->db->query('SELECT deduction_id FROM user_deductions_tbl WHERE emp_no = :emp_no');
      //bind values
      $this->db->bind(':emp_no', $id);
      $results = $this->db->resultSet();

      return $results;
  }

  public function getDeductions_amount($ded_id)
  {
    $this->db->query('SELECT * FROM deduction_tbl WHERE id = :ded_id');
      //bind values
      $this->db->bind(':ded_id', $ded_id);
      $row = $this->db->single();
      return $row;
  }
}
