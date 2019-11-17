<?php


namespace app\controllers;


use app\models\request;

class TestController extends Controller
{
    public function __construct(request $r)
    {
        parent::__construct($r);

        if ($this->getData()['Text'] == "test") {
            echo "Welcome to MVCR";
        } else {
            echo "Welcome to Big Ass";
        }
    }
}