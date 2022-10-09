<?php

class Services extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Services');
        $this->load->view('templates/footer');
    }
}
