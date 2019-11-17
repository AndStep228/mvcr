<?php


namespace app\models;


class request
{
    public $request;

    public function __construct($data = ['none'])
    {
        $this->request = $data;
    }
}