<?php
/**
 * Created by PhpStorm.
 * User: waiferkolar
 * Date: 2019-09-01
 * Time: 11:50
 */

namespace App\Models;


use App\Cores\Eloquent;

class PostModel extends Eloquent
{
    protected $table = "post";
    protected $fields = ["id", "cat_id", "title", "description", "content", "created-at"];
}