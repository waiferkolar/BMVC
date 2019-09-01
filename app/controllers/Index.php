<?php

namespace App\Controllers;


use App\Cores\BaseController;
use App\Cores\Eloquent;
use App\Models\PostModel;
use App\Models\Product;
use App\Models\User;

class Index extends BaseController
{
    public function home()
    {
        $post = new PostModel();
        $this->view("index", $post->all());
    }
}