<?php

namespace App\Controllers;


use App\Cores\BaseController;
use App\Models\PostModel;

class Post extends BaseController
{
    public function home()
    {
        $posts = new PostModel();
        $this->view("post/home", $posts->all());
    }

    public function edit($params)
    {
        $this->view("post/edit");
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
            # To Validate
            $file = $_FILES["image"];
            $filename = uniqid() . "_" . $file["name"];
            move_uploaded_file($file["tmp_name"], ROOT_URL . "/resources/assets/imgs/" . $filename);

            $post = new PostModel();
            $con = $post->insert([
                "cat_id" => $_POST["cat"],
                "title" => $_POST["title"],
                "image" => $filename,
                "description" => $_POST["description"],
                "content" => $_POST["content"]
            ]);

            if ($con) {
                $path = BASE_URL . "post/home";
                header("location:$path");
            } else {
                die("post insert fail");
            }


        } else {
            $this->view("post/create");
        }
    }

    public function detail($params)
    {
        $postModel = new PostModel();
        $post = $postModel->first($params[0]);
        $this->view("post/detail", $post);
    }
}