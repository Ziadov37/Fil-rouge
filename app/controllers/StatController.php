<?php

class StatController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('StatModel');
    }

    public function showStat()
    {
        //load the view 
        $data = $this->userModel->getStat();


        $this->view('pages/stat', $data);
    }
}