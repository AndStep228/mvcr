<?php


namespace app\models\flexice\router;

class router extends router_tester
{
    private $correct = 0;

    public function __construct()
    {
    }

    public function Get($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "GET") {
            $function();
            $this->correct++;
        }
    }

    public function Post($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "POST") {
            $function();
            $this->correct++;
        }
    }

    public function Put($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "PUT") {
            $function();
            $this->correct++;
        }
    }

    public function Delete($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "DELETE") {
            $function();
            $this->correct++;
        }
    }

    public function Options($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "OPTIONS") {
            $function();
            $this->correct++;
        }
    }

    public function Patch($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "PATCH") {
            $function();
            $this->correct++;
        }
    }

    public function File($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "FILE") {
            $function();
            $this->correct++;
        }
    }

    public function Head($pattern, $function)
    {
        if ($pattern == $_SERVER['REQUEST_URI'] && $_SERVER['REQUEST_METHOD'] == "HEAD") {
            $function();
            $this->correct++;
        }
    }

    public function ErrorPage($function)
    {
        if ($this->correct == 0) {
            $function();
        }
    }
}