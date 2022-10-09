<?php

class Toast extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Products/Toast');
        $this->load->view('templates/footer');
    }
}
