<?php


namespace app\models;


use Exception;
use view\view;

class app
{
    public function __construct(view $view)
    {
        if (!$view) {
            echo "View does not exists";
        } else {

            try {
                require_once $view->getView();
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
    }
}