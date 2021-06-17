<?php

class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Login User
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM `admin` WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if ($password == $hashed_password) {
            return $row;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM `admin` WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function cc()
    {
    }
}