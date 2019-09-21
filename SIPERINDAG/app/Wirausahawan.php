<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wirausahawan extends Model
{
    protected $table = 'wirausahawan';
    protected $fillable = ['id','user_id','nama','alamat'];
}
