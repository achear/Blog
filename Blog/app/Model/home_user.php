<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class home_user extends Model
{
    public $table = 'home_user';

    public $primaryKey = 'id';

    public $fillable = ['username', 'email', 'password','id'];

    public $timestamps = false;
}
