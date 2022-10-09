<?php

class Pastry extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Products/Pastry');
        $this->load->view('templates/footer');
    }
}
