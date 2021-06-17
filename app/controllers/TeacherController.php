<?php

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('TeachertModel');
    }

    public function showTeacher()
    {
        //load the view 
        $data = $this->userModel->getTeacher();

        $datat = $this->userModel->getClass();
        $this->view('pages/teacher', $data, $datat);
    }

    public function insertTeacher()
    {

        if (!isset($_POST['submit'])) {
            //load the view insert
            $this->view('pages/teacher');
        } else {
            //array qui retourn le resultat envoyé par $_POST
            $data = [
                'fullname' => $_POST['fullname'],
                'gender' => $_POST['gender'],
                'matiere' => $_POST['matiere'],
                'phone' => $_POST['phone'],
                'idclass' => $_POST['class']

            ];
            //consomation du data
            $this->userModel->addTeacher($data);
            header('location: ' . URLROOT . '/' . 'TeacherController/showTeacher');
        }
    }

    public function deleteTeacher($id)
    {

        $data = [
            'id' => $id
        ];

        $this->userModel->deletTeacher($data);

        header('location:' . URLROOT . '/' . 'TeacherController/showTeacher');
    }


    public function update($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $params = [
                'id' => $id,
                'fullname' => $_POST['fullname'],
                'gender' => $_POST['gender'],
                'matiere' => $_POST['matiere'],
                'phone' => $_POST['phone'],
                'idclass' => $_POST['class']
            ];
            $this->userModel->updatePost($params);
            header('location:' . URLROOT . '/' . 'TeacherController/showTeacher');
        } else {


            $data = $this->userModel->getPostbyId($id);

            $this->view('pages/edit', $data);
        }
    }
}