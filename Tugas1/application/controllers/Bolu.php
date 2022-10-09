<?php

class Bolu extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Products/Bolu');
        $this->load->view('templates/footer');
    }
}
