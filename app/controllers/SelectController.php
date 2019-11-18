<?php


namespace app\controllers;

class SelectController extends Controller
{
    public function getSelect()
    {
        $data = $this->getData();

        $nowPriority = null;
        foreach ($data as $datum) {
            if ($nowPriority != null) {
                if ($nowPriority['Priority'] < $datum['Priority']) {
                    $nowPriority = $datum;
                }
            } else {
                $nowPriority = $datum;
            }

        }
        return $nowPriority;
    }
}