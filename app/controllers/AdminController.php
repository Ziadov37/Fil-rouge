<?php

class AdminController extends Controller
{
    public function __construct()
    {
        // instanciation objet //
        $this->userModel = $this->model('AdminModel');
    }

    public function index()
    {
        //load the view 
        $data = $this->userModel->cc();
        $this->view('pages/login', $data);
    }

    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }


            // Check for user/email
            if ($this->userModel->findUserByEmail($data['email'])) {

                // User found
            } else {
                // User not found
                $data['email_err'] = 'No user found';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    // Create Session
                    $this->view('pages/dashboard');
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('pages/login', $data);
                }
            } else {

                // Load view with errors
                $this->view('pages/login', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('pages/Login', $data);
        }
    }

    public function showDashboard()
    {
        //load the view 
        $data = $this->userModel->cc();
        $this->view('pages/dashboard', $data);
    }

    public function logout()
    {
        session_start();
        session_destroy();
        redirect('pages/Login');

        $data = $this->userModel->cc();
        $this->view('pages/dashboard', $data);
    }
}