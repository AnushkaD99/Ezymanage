<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Login User
    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM users_tbl WHERE username = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    // Find user by username
    public function findUserByUsername($username)
    {
        $this->db->query('SELECT * FROM users_tbl WHERE username = :username');
        // Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Get User by ID
    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM users_tbl WHERE emp_no = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    //Get User by ID
    public function getUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users_tbl WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        return $row;
    }

    //Get User by Token
    public function findUserByToken($id)
    {
        $this->db->query('SELECT ut.email AS email, ut.username AS username, ut.emp_no AS emp_no FROM account_access_tbl AS aat INNER JOIN users_tbl AS ut ON ut.email = aat.email WHERE aat.access_token = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    //update Password
    public function updatePassword($data)
    {
        $this->db->query('UPDATE users_tbl SET password = :password WHERE username = :username');
        // Bind values
        $this->db->bind(':password', $data['hashed_password']);
        $this->db->bind(':username', $data['username']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //remove token
    public function deleteToken($data)
    {
        $this->db->query('DELETE FROM account_access_tbl WHERE email = :email');
        // Bind values
        $this->db->bind(':email', $data['email']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addOtp($data)
    {
        $this->db->query('INSERT INTO account_access_tbl(access_token, email)
      VALUES(:token, :emp_no)');

        // Bind values
        $this->db->bind(':token', $data['otp']);
        $this->db->bind(':emp_no', $data['email']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //getOtp
    public function getOtp($email)
    {
        $this->db->query('SELECT * FROM account_access_tbl WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        return $row;
    }
}
