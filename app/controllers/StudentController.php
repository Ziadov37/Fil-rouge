<?php

class StudentController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('StudentModel');
    }

    // public function index()
    // {
    //     //load the view 
    //     $data = $this->userModel->getStudent();
    //     $this->view('pages/Login', $data);
    // }

    public function showStudent()
    {
        //  LOAD THE VIEW  // 



        $data = $this->userModel->getStudent();

        //  TO GET ID PROF AS A FOREIGN KEY  //

        $datat = $this->userModel->getProf();
        $datatt = $this->userModel->getParent();

        $doto = [
            'student' => $data,
            'prof' => $datat,
            'parent' => $datatt

        ];
        $this->view('pages/student', $doto);
    }

    public function insertStudent()
    {

        if (!isset($_POST['submit'])) {
            //load the view insert
            $this->view('pages/student');
        } else {
            //array qui retourn le resultat envoyé par $_POST
            $data = [
                'fullname' => $_POST['name'],
                'gender' => $_POST['gender'],
                'adress' => $_POST['adress'],
                'birth' => $_POST['birth'],
                'email' => $_POST['email'],
                'idprof' => $_POST['idprof'],
                'idparent' => $_POST['idparent']

            ];
            //consomation du data
            $this->userModel->addUStudent($data);
            header('location: ' . URLROOT . '/' . 'StudentController/showStudent');
        }
    }

    public function deleteStudent()
    {

        $data = [
            'id' => $_GET['id']
        ];

        $this->userModel->deleteStudent($data);

        header('location:' . URLROOT . '/' . 'StudentController/showStudent');
    }

    // public function option()
    // {
    //     //load the view 
    //     $data = $this->userModel->getProf();
    //     $this->view('pages/student', $data);
    // }

    public function updateStudent($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'fullname' => $_POST['name'],
                'gender' => $_POST['gender'],
                'parent' => $_POST['parent'],
                'adress' => $_POST['adress'],
                'birth' => $_POST['birth'],
                'email' => $_POST['email'],
                'idprof' => $_POST['idprof'],
                'idparent' => $_POST['idparent']

            ];
            $this->userModel->updateStudent($data);
            header('location:' . URLROOT . '/' . 'pages/student');
        } else {


            $data = $this->userModel->getPostbyId($id);

            $this->view('pages/student', $data);
        }
    }
}