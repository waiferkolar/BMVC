<?php

function beautify($data)
{
    echo "<pre>" . print_r($data, true) . "</pre>";
}

function asset($path)
{
    echo BASE_URL . "/resources/assets/" . $path;
}

function partial($path)
{
    return require_once(ROOT_URL . "/resources/views/" . $path);
}
function url($path){
    echo BASE_URL . $path;
}