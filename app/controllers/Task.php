<?php

class Task extends Controller {
    public function index()
    {
        $data['title']= 'Daftar Task';
        $data['task']= $this->model('Task_model')->getAllTask();
        $this->view('templates/header', $data);
        $this->view('task/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title']= 'Detail Task';
        $data['task']= $this->model('Task_model')->getTaskById($id);
        $this->view('templates/header', $data);
        $this->view('task/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if( $this->model('Task_model')->addDataTask($_POST) > 0){
            Flasher::setFlash('successfully', 'added', 'success');
            header('Location: ' . BASURL . '/task');
            exit;
        } else {
            Flasher::setFlash('to add', 'failed', 'danger');
            header('Location: ' . BASURL . '/task');
            exit;
        }
    }

    public function delete($id)
    {
        if( $this->model('Task_model')->deleteDataTask($id) > 0){
            Flasher::setFlash('deleted', 'successfully ', 'success');
            header('Location: ' . BASURL . '/task');
            exit;
        } else {
            Flasher::setFlash('to delete', 'failed', 'danger');
            header('Location: ' . BASURL . '/task');
            exit;
        }
    }

    public function getchange()
    {
        echo json_encode($this->model('Task_model')->getTaskById($_POST['id']));
    }

    public function edit()
    {
        if( $this->model('Task_model')->editDataTask($_POST) > 0){
            Flasher::setFlash('successfully', 'changed', 'success');
            header('Location: ' . BASURL . '/task');
            exit;
        } else {
            Flasher::setFlash('to change', 'failed', 'danger');
            header('Location: ' . BASURL . '/task');
            exit;
        }
    }

    public function search()
    {
        $data['title']= 'Daftar Task';
        $data['task']= $this->model('Task_model')->searchDataTask();
        $this->view('templates/header', $data);
        $this->view('task/index', $data);
        $this->view('templates/footer');
    }

}