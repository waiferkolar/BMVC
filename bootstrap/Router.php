<?php

class Router
{
    private $currentClass = "App\Controllers\Index";
    private $errorClass = "App\Controllers\Error";
    private $currentMethod = "home";
    private $errorMethod = "show";
    private $params = [];

    public function __construct()
    {
        $this->startRoute();
    }

    public function startRoute()
    {
        $url = isset($_GET["url"]) ? $_GET["url"] : "";

        if (!empty($url)) {

            $urls = explode("/", rtrim($url, "/"));

            if (isset($urls[0])) {
                $this->currentClass = "App\Controllers\\" . ucfirst($urls[0]);
                unset($urls[0]);
            }

            if (isset($urls[1])) {
                $this->currentMethod = $urls[1];
                unset($urls[1]);
            }

            $this->params = array_values($urls);
        }
        if (class_exists($this->currentClass)) {
            $this->currentClass = new $this->currentClass();
            call_user_func_array([$this->currentClass, $this->currentMethod], $this->params);
        } else {
            $this->errorClass = new $this->errorClass;
            call_user_func_array([$this->errorClass, $this->errorMethod], $this->params);
        }
    }

}

new Router;