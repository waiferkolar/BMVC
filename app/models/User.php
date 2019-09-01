<?php
/**
 * Created by PhpStorm.
 * User: waiferkolar
 * Date: 2019-08-31
 * Time: 12:09
 */

namespace App\Models;


use App\Cores\Eloquent;

class User extends Eloquent
{
    protected $table = "users";
    protected $fields = ["id", "name", "email", "password", "created_at"];
}