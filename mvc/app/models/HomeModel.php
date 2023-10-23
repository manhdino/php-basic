<?php
class HomeModel
{
    protected $__table = 'products';
    function getList()
    {
        $data = [
            'Item1',
            'Item2',
            'Item3'
        ];
        return $data;
    }

    function getDetail($id)
    {
        $data = [
            'Item1',
            'Item2',
            'Item3'
        ];
        return $data[$id];
    }
}
