<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Home';
        $data['name'] =  $this->model('user_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}