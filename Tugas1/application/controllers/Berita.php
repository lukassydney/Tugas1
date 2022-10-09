<?php

class Berita extends CI_Controller
{

    public function index()
    {


        $this->load->view('templates/header');
        $this->load->view('Berita');
        $this->load->view('templates/footer');
    }
}
