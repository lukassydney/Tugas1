<?php

class Cake extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Products/Cake');
        $this->load->view('templates/footer');
    }
}
