<?php
class Home extends Controller
{
    public $home_model;
    public function __construct()
    {
        $this->home_model = $this->model('HomeModel');
    }

    public function index()
    {
        $data = $this->home_model->getList();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        echo $this->home_model->getDetail(0);
    }
}
