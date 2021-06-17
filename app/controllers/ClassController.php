<?php

class ClassController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('ClassModel');
    }

    // public function index()
    // {
    //     //load the view 
    //     $data = $this->userModel->getStudent();
    //     $this->view('pages/Login', $data);
    // }

    public function showClass()
    {
        //load the view 
        $data = $this->userModel->getClass();

        //  TO GET ID PROF AS A FOREIGN KEY  //
        $datat = $this->userModel->getProf();
        $this->view('pages/class', $data, $datat);
    }

    public function insertClass()
    {

        if (!isset($_POST['submit'])) {
            //load the view insert
            $this->view('pages/class');
        } else {
            //array qui retourn le resultat envoyé par $_POST
            $data = [
                'name' => $_POST['name'],
                'idprof' => $_POST['idprof']

            ];
            //consomation du data
            $this->userModel->addClass($data);
            header('location: ' . URLROOT . '/' . 'ClassController/showClass');
        }
    }

    public function deleteClass()
    {

        $data = [
            'id' => $_GET['id']
        ];

        $this->userModel->deletClass($data);

        header('location:' . URLROOT . '/' . 'ClassController/showClass');
    }

    // public function updateTeacher($id)
    // {
    //     $this->db->query("SELECT * FROM prof WHERE id = :id");
    //     $this->db->bind(':id', $id);

    //     $results = $this->db->single();

    //     return $results;
    // }


    // public function updateTeacher($id)
    // {

    //     if (isset($_POST["submit"])) {


    //         $data = [
    //             'id' => $id,
    //             'fullname' => $_POST['fullname'],
    //             'gender' => $_POST['gender'],
    //             'matiere' => $_POST['matiere'],
    //             'phone' => $_POST['phone']
    //         ];
    //         $this->userModel->editTeacher($data);
    //         header('location:' . URLROOT . '/' . '/TeacherController/teacher');
    //         // header('location:' . URLROOT);
    //     } else {
    //         // $contact = $this->userModel->getContactbyId($id);



    //         // $this->view('pages/teacher', $contact);
    //         echo "by";
    //     }
    // }
}