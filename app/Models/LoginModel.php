<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class LoginModel extends Model
{
    protected $table="users";
    public $timestamps = false;

}
