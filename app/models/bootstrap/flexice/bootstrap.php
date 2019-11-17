<?php


namespace app\models\bootstrap\flexice;


use app\models\flexice\router\router;

class bootstrap
{
    private $theme = "default";

    public function __construct()
    {

    }

    private function get_bootstrap_folder()
    {
        return "/app/models/bootstrap/flexice/bootstrap-4.3";
    }

    const THEMES_BOOTSTRAP = [
        "LUX" => "lux.css",
        "MINTY" => 'minty.css'
    ];

    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    public function get_js()
    {
        return $this->get_bootstrap_folder() . "/bootstrap.min.js";
    }

    public function get_bundle_js()
    {
        return $this->get_bootstrap_folder() . "/bootstrap.bundle.min.js";
    }

    public function get_css()
    {
        switch ($this->theme) {
            case "lux.css":
                return $this->get_bootstrap_folder() . "/themes/lux.css";
                break;
            case "minty.css":
                return $this->get_bootstrap_folder() . "/themes/minty.css";
                break;
            default:
                return $this->get_bootstrap_folder() . "/bootstrap.min.css";
                break;
        }

    }

    public function get_reboot_css()
    {
        return $this->get_bootstrap_folder() . "/bootstrap-reboot.min.css";
    }

    public function get_grid_css()
    {
        return $this->get_bootstrap_folder() . "/bootstrap-grid.min.css";
    }
}