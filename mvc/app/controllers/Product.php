<?php
class Product extends Controller
{
    public $product_model;
    public function __construct()
    {
        $this->product_model = $this->model('ProductModel');
    }
    public function index()
    {
        echo 'Danh sách sản phẩm';
        $data = $this->product_model->getProductLists();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
