<?php


namespace view;


class view
{
    private $view = false;

    public function __construct($path)
    {
        $this->view = $path;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }
}