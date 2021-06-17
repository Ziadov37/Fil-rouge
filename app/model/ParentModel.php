<?php

class ParentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getParent()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `parent` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }


    public function addUParent($add)
    {
        //preparation de la query
        // :placeholders
        $this->db->query("INSERT INTO `parent`(`fullname`, `gender`, `job`, `adress`,  `phone`, `idstudent`) VALUES (:name, :gender,:job,:adress, :phone,:idstudent)");

        //saniteser contre sql injection
        $this->db->bind(':name', $add['fullname']);
        $this->db->bind(':gender', $add['gender']);
        $this->db->bind(':job', $add['job']);
        $this->db->bind(':adress', $add['adress']);

        $this->db->bind(':phone', $add['phone']);
        $this->db->bind(':idstudent', $add['idstudent']);


        //execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteParent($data)
    {
        $this->db->query('DELETE FROM parent WHERE id = :id');
        $this->db->bind(':id', $data['id']);


        $row = $this->db->single();

        return $row;
    }

    public function getStudent()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `student` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }

    // public function editBlog($data)
    // {
    //     $this->db->query('UPDATE blog SET fullname = :name, gender = :gender, job = :job, adress = :adress, phone = :phone, idstudent = :idstudent,    WHERE id = :id');
    //     // Bind values
    //     $this->db->bind(':id', $data['id']);
    //     $this->db->bind(':fullname', $data['name']);
    //     $this->db->bind(':gender', $data['gender']);
    //     $this->db->bind(':job', $data['job']);
    //     $this->db->bind(':adress', $data['adress']);
    //     $this->db->bind(':phone', $data['phone']);
    //     $this->db->bind(':idstudent', $data['idstudent']);


    //     // Execute
    //     if ($this->db->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function updateStudent($update)
    {
        $this->db->query("UPDATE parent  SET fullname = :name, gender = :gender, job = :job, adress = :adress, phone = :phone, idstudent = :idstudent,    WHERE id = :id");
        $this->db->bind(':id', $update['id']);
        $this->db->bind(':fullname', $update['name']);
        $this->db->bind(':gender', $update['gender']);
        $this->db->bind(':job', $update['job']);
        $this->db->bind(':adress', $update['adress']);
        $this->db->bind(':phone', $update['phone']);
        $this->db->bind(':idstudent', $update['idstudent']);
        $update = $this->db->execute();
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}