<?php
class Director
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  /*public function updateprofile($data, $img_name)
  {
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
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }*/

  //get Appointments
  public function getAppointments()
  {
    $this->db->query('SELECT users_tbl.full_name as name,
        users_tbl.designation as designation,
        appointment_tbl.appointment_id as id,
        appointment_tbl.date as date,
        appointment_tbl.start_time as start_time,
        appointment_tbl.end_time as end_time,
        appointment_tbl.status as status,
        appointment_tbl.reason as reason
        FROM users_tbl INNER JOIN appointment_tbl ON appointment_tbl.emp_no = users_tbl.emp_no ORDER BY 
          CASE appointment_tbl.status 
          WHEN 0 THEN 0 
          WHEN 1 THEN 1 
          ELSE 2 
        END ASC ');

    $results = $this->db->resultSet();
    return $results;
  }

  //search appointments details
  public function getAppointmentsDetails()
  {
    $this->db->query('SELECT * FROM appointment_tbl');

    $results = $this->db->resultSet();

    return $results;
  }

  public function searchAppointments($data)
  {
    $this->db->query('SELECT * FROM appointment_tbl WHERE reason LIKE :reason');

    //bind values
    $this->db->bind(':reason', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }

  //get Projects
  public function getProjects()
  {
    $this->db->query('SELECT users_tbl.full_name as name,
        users_tbl.designation as designation,
        appointment_tbl.appointment_id as id,
        appointment_tbl.date as date,
        appointment_tbl.start_time as start_time,
        appointment_tbl.end_time as end_time,
        appointment_tbl.reason as reason
         FROM users_tbl INNER JOIN appointment_tbl ON appointment_tbl.emp_no = users_tbl.emp_no');

    $results = $this->db->resultSet();
    return $results;
  }

  public function searchPrincipals($data)
  {
    $this->db->query('SELECT * FROM appointment_tbl WHERE date LIKE :date OR emp_no LIKE :emp_no');

    //bind values
    $this->db->bind(':date', $data['search']);
    $this->db->bind(':emp_no', $data['search']);

    $results = $this->db->resultSet();

    return $results;
  }

  //school management
  public function getLeaves()
  {
    $this->db->query('SELECT users_tbl.name_with_initials as name,
      users_tbl.designation as designation,
      users_tbl.emp_no as emp_no,
      leaves_tbl.leave_id as leave_id,
      leaves_tbl.commencing_date as commencing_date,
      leaves_tbl.resuming_date as resuming_date,
      leaves_tbl.reason as reason,
      leaves_tbl.leave_type as leave_type
       FROM leaves_tbl INNER JOIN users_tbl ON leaves_tbl.emp_no = users_tbl.emp_no WHERE leaves_tbl.status = 0');

    $results = $this->db->resultSet();
    return $results;
  }

  //update status
  public function updateStatus($data)
  {
    $table = $data['title'];
    $id = '';
    if ($table == 'leave_tbl') {
      $id = 'leave_id';
    } else if ($table == 'karyasadana_tbl') {
      $id = 'karyasadana_id';
    } else if ($table == 'issue_tbl') {
      $id = 'issue_id';
    } else if ($table == 'appointment_tbl') {
      $id = 'appointment_id';
    } else if ($table == 'project_tbl') {
      $id = 'project_id';
    }

    $status = '';
    if ($data['status'] == 'Approve') {
      $status = 1;
    } else if ($data['status'] == 'Reject') {
      $status = -1;
    } else {
      // Set a default value for status
      $status = 0;
    }

    $this->db->query("UPDATE $table SET status = :status WHERE $id = :id");
    // Bind values
    $this->db->bind(':status', $status);
    $this->db->bind(':id', $data['form_id']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //Karyasadanaya
  public function getKaryasadana()
  {
    $this->db->query('SELECT users_tbl.name_with_initials as name,
    users_tbl.designation as designation,
    users_tbl.emp_no as emp_no,
    karyasadana_tbl.karyasadana_id as karyasadana_id,
    karyasadana_tbl.submitted_date as submitted_date
     FROM karyasadana_tbl INNER JOIN users_tbl ON karyasadana_tbl.emp_no = users_tbl.emp_no WHERE karyasadana_tbl.status = 0');

    $results = $this->db->resultSet();
    return $results;
  }

  //Issues
  public function getIssues()
  {
    $this->db->query('SELECT users_tbl.name_with_initials as name,
      users_tbl.designation as designation,
      users_tbl.emp_no as emp_no,
      issue_tbl.issue_id as issue_id,
      issue_tbl.submitted_date as submitted_date,
      issue_tbl.issue_cat as issue_cat,
      issue_tbl.issue as issue
      FROM issue_tbl INNER JOIN users_tbl ON issue_tbl.emp_no = users_tbl.emp_no WHERE issue_tbl.issue_type="School" && issue_tbl.status = 0');

    $results = $this->db->resultSet();
    return $results;
  }  

  //Profile
  public function getUser($id)
  {
    $this->db->query('SELECT * FROM users_tbl WHERE emp_no = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();
    return $row;
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

  
}
