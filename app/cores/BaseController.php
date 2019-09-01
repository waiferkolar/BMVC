<?php

namespace App\Cores;


class BaseController
{
    public function view($path, $params = [])
    {
        $path = ROOT_URL . "/resources/views/$path.php";
        if (file_exists($path)) {
            require_once($path);
        } else {
            echo "Page Not found!";
        }
    }
}