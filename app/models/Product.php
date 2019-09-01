<?php
/**
 * Created by PhpStorm.
 * User: waiferkolar
 * Date: 2019-08-31
 * Time: 12:13
 */

namespace App\Models;


use App\Cores\Eloquent;

class Product extends Eloquent
{
    protected $table = "product";
    protected $fields = ["id", "cat_id", "name", "description", "price", "created_at"];
}