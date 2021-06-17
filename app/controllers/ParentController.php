<?php

class ParentController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('ParentModel');
    }

    // public function index()
    // {
    //     //load the view 
    //     $data = $this->userModel->getStudent();
    //     $this->view('pages/Login', $data);
    // }

    public function showParent()
    {
        //  LOAD THE VIEW  // 
        $data = $this->userModel->getParent();

        //  TO GET ID PROF AS A FOREIGN KEY  //
        $datat = $this->userModel->getStudent();
        $this->view('pages/parent', $data, $datat);
    }

    public function insertParent()
    {

        if (!isset($_POST['submit'])) {
            //load the view insert
            $this->view('pages/parent');
        } else {
            //array qui retourn le resultat envoyé par $_POST
            $data = [
                'fullname' => $_POST['name'],
                'gender' => $_POST['gender'],
                'job' => $_POST['job'],
                'adress' => $_POST['adress'],
                'phone' => $_POST['phone'],
                'idstudent' => $_POST['idstudent']

            ];
            //consomation du data
            $this->userModel->addUParent($data);
            header('location: ' . URLROOT . '/' . 'ParentController/showParent');
        }
    }

    public function deleteParent()
    {

        $data = [
            'id' => $_GET['id']
        ];

        $this->userModel->deleteParent($data);

        header('location:' . URLROOT . '/' . 'ParentController/showParent');
    }

    // public function option()
    // {
    //     //load the view 
    //     $data = $this->userModel->getProf();
    //     $this->view('pages/parent', $data);
    // }

    // public function update($id)
    //         {

    //             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //                 $params=[ 
    //                     'id'=>$id,
    //                     'titre' =>$_POST['titre'],
    //                     'contenu' => $_POST['contenu'],
    //                     'description' => $_POST['description'],
    //                     ];
    //                     $this->callModel->updatePost($params);
    //                     header('location:'.URLROOT.'/' . 'pages/Edit');
    //             }else{


    //               $data = $this->callModel->getPostbyId($id);

    //                 $this->view('pages/Edit',$data);
    //             }

    //         }

    // public function edit($id)
    // {
    //     if (!isset($_POST['edit'])) {
    //         $articl = $this->userModel->getContactById($id);
    //         $this->view('pages/edit', $articl);
    //     }
    // }

    // public function editid($id)
    // {
    //     // if(isset($_POST['edit'])){
    //     // Sanitize POST array
    //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //     $data = [
    //         'id' => $id,
    //         'fullname' => trim($_POST['name']),
    //         'gender' => trim($_POST['gender']),
    //         'job' => trim($_POST['job']),
    //         'adress' => trim($_POST['adress']),
    //         'phone' => trim($_POST['phone']),
    //         'idstudent' => trim($_POST['idstudent'])

    //     ];
    //     $this->userModel->editBlog($data);
    //     redirect('parent');
    // }


    public function updateParent($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'fullname' => $_POST['name'],
                'gender' => $_POST['gender'],
                'job' => $_POST['job'],
                'adress' => $_POST['adress'],
                'phone' => $_POST['phone'],
                'idstudent' => $_POST['idstudent']
            ];
            $this->userModel->updateParent($data);
            header('location:' . URLROOT . '/' . 'pages/parent');
        } else {


            $data = $this->userModel->getPostbyId($id);

            $this->view('pages/edit', $data);
        }
    }
}