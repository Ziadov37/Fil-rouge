<?php

class StudentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getStudent()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `student` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }

    public function getProf()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `prof` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }

    public function getParent()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `parent` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }


    public function addUStudent($add)
    {
        //preparation de la query
        // :placeholders
        $this->db->query("INSERT INTO `student`(`fullname`, `gender`, `adress`, `birth`, `email`, `idprof`, `idparent`) VALUES (:name, :gender,:adress, :birth, :email, :idprof, :idparent)");

        //saniteser contre sql injection
        $this->db->bind(':name', $add['fullname']);
        $this->db->bind(':gender', $add['gender']);
        $this->db->bind(':adress', $add['adress']);
        $this->db->bind(':birth', $add['birth']);
        $this->db->bind(':email', $add['email']);
        $this->db->bind(':idprof', $add['idprof']);
        $this->db->bind(':idparent', $add['idparent']);

        //execution
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteStudent($data)
    {
        $this->db->query('DELETE FROM student WHERE id = :id');
        $this->db->bind(':id', $data['id']);


        $row = $this->db->single();

        return $row;
    }



    // public function updateStudent($update)
    // {
    //     $this->db->query("UPDATE student  SET fullname= :name, gender= :gender, adress= :adress, birth= :birth, email= :email, idprof= :idprof, idparent= :idparent WHERE id= :id");
    //     $this->db->bind(':name', $update['fullname']);
    //     $this->db->bind(':gender', $update['gender']);
    //     $this->db->bind(':adress', $update['adress']);
    //     $this->db->bind(':birth', $update['birth']);
    //     $this->db->bind(':email', $update['email']);
    //     $this->db->bind(':idprof', $update['idprof']);
    //     $this->db->bind(':idparent', $update['idparent']);
    //     $this->db->bind(':id', $update['id']);
    //     $update = $this->db->execute();
    //     if ($this->db->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}