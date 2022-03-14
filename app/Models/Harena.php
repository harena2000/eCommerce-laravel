<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Harena extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $primaryKey = "idUser";

    public static function wsGetAll(){
 
    }

}
