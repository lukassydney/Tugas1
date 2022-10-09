<?php

class RotiMini extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Products/RotiMini');
        $this->load->view('templates/footer');
    }
}
