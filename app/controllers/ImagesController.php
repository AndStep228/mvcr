<?php


namespace app\controllers;


class ImagesController extends Controller
{
    public function getImage($width = 250, $height = null)
    {
        if ($height == null) {
            $height = $width;
        }

        return "https://via.placeholder.com/" . $width . "x" . $height;
    }
}