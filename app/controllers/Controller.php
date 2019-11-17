<?php


namespace app\controllers;


use app\models\request;

class Controller
{
    private $data;

    public function __construct(request $r)
    {
        $this->data = $r->request;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}