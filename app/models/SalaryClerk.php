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

  //update dp
  public function updateProfilePicture($img_name)
  {
    $this->db->query('UPDATE users_tbl SET dp = :path WHERE emp_no = :id');

    $this->db->bind(':path', $img_name);
    $this->db->bind(':id', $_SESSION['user_id']);


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

  public function submitStep($data)
  {
    $this->db->query('INSERT INTO teacher_salary_details_tbl (class, step, basic_salary) VALUES (:class, :step, :b_salary)');
    // Bind values
    $this->db->bind(':class', $data['class']);
    $this->db->bind(':step', $data['step']);
    $this->db->bind(':b_salary', $data['b_salary']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function getBasicSalary()
  {
    $this->db->query('SELECT * FROM teacher_salary_details_tbl');

    $results = $this->db->resultSet();
    return $results;
  }

  public function getPBasicSalary()
  {
    $this->db->query('SELECT * FROM principal_salary_details_tbl');

    $results = $this->db->resultSet();
    return $results;
  }

  public function updateClass_1($data)
  {
    for ($i = 18; $i <= 45; $i++) {
      $basic_salary = 0;
      $st_basic_1 = $data['st_basic_1'];
      $increment_1 = $data['increment_1'];
      $basic_salary = ($st_basic_1 + ($increment_1 * ($i - 18)));
      $this->db->query('UPDATE teacher_salary_details_tbl SET basic_salary = :basic_salary WHERE step = :step && class = :class');
      // Bind values
      $this->db->bind(':basic_salary', $basic_salary);
      $this->db->bind(':step', $i);
      $this->db->bind(':class', 'Class 1');
      // Execute
      if (!$this->db->execute()) {
        return false;
      }
    }
    return true;
  }

  public function updateClass_2i($data)
  {
    for ($i = 11; $i <= 23; $i++) {
      $basic_salary = 0;
      $st_basic_2i = $data['st_basic_2-i'];
      $increment_2i = $data['increment_2-i'];
      $basic_salary = ($st_basic_2i + ($increment_2i * ($i - 11)));
      $this->db->query('UPDATE teacher_salary_details_tbl SET basic_salary = :basic_salary WHERE step = :step && class = :class');
      // Bind values
      $this->db->bind(':basic_salary', $basic_salary);
      $this->db->bind(':step', $i);
      $this->db->bind(':class', 'Class 2-i');
      // Execute
      if (!$this->db->execute()) {
        return false;
      }
    }
    return true;
  }

  public function updateClass_2ii($data)
  {
    for ($i = 1; $i <= 16; $i++) {
      $basic_salary = 0;
      $st_basic_2ii = $data['st_basic_2-ii'];
      $increment_2ii = $data['increment_2-ii'];
      $basic_salary = ($st_basic_2ii + ($increment_2ii * ($i - 1)));
      $this->db->query('UPDATE teacher_salary_details_tbl SET basic_salary = :basic_salary WHERE step = :step && class = :class');
      // Bind values
      $this->db->bind(':basic_salary', $basic_salary);
      $this->db->bind(':step', $i);
      $this->db->bind(':class', 'Class 2-ii');
      // Execute
      if (!$this->db->execute()) {
        return false;
      }
    }
    return true;
  }

  public function updateClass_3i($data)
  {
    for ($i = 7; $i <= 23; $i++) {
      $basic_salary = 0;
      $st_basic_3i = $data['st_basic_3-i'];
      $increment_3i = $data['increment_3-i'];
      $basic_salary = ($st_basic_3i + ($increment_3i * ($i - 7)));
      $this->db->query('UPDATE teacher_salary_details_tbl SET basic_salary = :basic_salary WHERE step = :step && class = :class');
      // Bind values
      $this->db->bind(':basic_salary', $basic_salary);
      $this->db->bind(':step', $i);
      $this->db->bind(':class', 'Class 3-i');
      // Execute
      if (!$this->db->execute()) {
        return false;
      }
    }
    return true;
  }

  public function getallowance()
  {
    $this->db->query('SELECT * FROM allowance_tbl');

    $results = $this->db->resultSet();
    return $results;
  }

  public function add_allowance()
  {
    $this->db->query('INSERT INTO allowance_tbl (name, amount) VALUES (:allowance_name, :allowance_amount)');
    // Bind values
    $this->db->bind(':allowance_name', $_POST['name']);
    $this->db->bind(':allowance_amount', $_POST['amount']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function update_allowanace($data)
  {
    $this->db->query('UPDATE allowance_tbl SET name = :allowance_name, amount = :allowance_amount WHERE id = :id');
    // Bind values
    $this->db->bind(':allowance_name', $data['name']);
    $this->db->bind(':allowance_amount', $data['amount']);
    $this->db->bind(':id', $data['id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function update_deduction($data)
  {
    $this->db->query('UPDATE deduction_tbl SET name = :deduction_name, amount = :deduction_amount WHERE id = :id');
    // Bind values
    $this->db->bind(':deduction_name', $data['name']);
    $this->db->bind(':deduction_amount', $data['amount']);
    $this->db->bind(':id', $data['id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function getdeductions()
  {
    $this->db->query('SELECT * FROM deduction_tbl');

    $results = $this->db->resultSet();
    return $results;
  }

  public function add_deduction()
  {
    $this->db->query('INSERT INTO deduction_tbl (name, amount) VALUES (:deduction_name, :deduction_amount)');
    // Bind values
    $this->db->bind(':deduction_name', $_POST['name']);
    $this->db->bind(':deduction_amount', $_POST['amount']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function delete_allowance($data)
  {
    $this->db->query('DELETE FROM allowance_tbl WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $data['id']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function recordSalary($data)
  {
    $this->db->query('INSERT INTO salary_tbl
    (emp_no, 
    basic_salary,
    allowances, 
    deductions, 
    net_salary)
    VALUES (:emp_no, 
    :basic_salary,
    :allowance, 
    :deduction, 
    :net_salary)');
    // Bind values
    $this->db->bind(':emp_no', $data['emp_no']);
    $this->db->bind(':basic_salary', $data['basic']);
    $this->db->bind(':allowance', $data['sum_allowances']);
    $this->db->bind(':deduction', $data['sum_deductions']);
    $this->db->bind(':net_salary', $data['net_pay']);
    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function sendPayslip($id)
  {
    $this->db->query('UPDATE salary_tbl SET send = :status WHERE salary_id = :id');
    // Bind values
    $this->db->bind(':status', 1);
    $this->db->bind(':id', $id);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function deletePayslip($id)
  {
    $this->db->query('DELETE FROM salary_tbl WHERE salary_id = :id');
    // Bind values
    $this->db->bind(':id', $id);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function deleteAllowance($id)
  {
    $this->db->query('DELETE FROM allowance_tbl WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $id);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function deleteDeduction($id)
  {
    $this->db->query('DELETE FROM deduction_tbl WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $id);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function submitBasicPrincipal($data)
  {
    $increment = $data['defferent'];
    for ($i = 1; $i <= 28; $i++) {
      $basic_salary = $data['b_salary'] + ($increment*($i - 1));
      $this->db->query('INSERT INTO principal_salary_details_tbl (class, step, basic_salary) VALUES (:class, :step, :basic_salary)');
      // Bind values
      $this->db->bind(':basic_salary', $basic_salary);
      $this->db->bind(':step', $i);
      $this->db->bind(':class', $data['class']);
      // Execute
      if (!$this->db->execute()) {
        return false;
      }
    }
    return true;
  }

  public function editBasicPrincipal($data)
  {
    $increment = $data['defferent'];
    for ($i = 1; $i <= 28; $i++) {
      $basic_salary = $data['b_salary'] + ($increment*($i - 1));
      $this->db->query('UPDATE principal_salary_details_tbl SET basic_salary = :basic_salary WHERE step = :step && class = :class');
      // Bind values
      $this->db->bind(':basic_salary', $basic_salary);
      $this->db->bind(':step', $i);
      $this->db->bind(':class', $data['class']);
      // Execute
      if (!$this->db->execute()) {
        return false;
      }
    }
    return true;
  }
}
