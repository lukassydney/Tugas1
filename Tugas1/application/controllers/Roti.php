<?php

class Roti extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Products/Roti');
        $this->load->view('templates/footer');
    }
}
