<?php

class Sejarah extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Sejarah');
        $this->load->view('templates/footer');
      
    }

}
