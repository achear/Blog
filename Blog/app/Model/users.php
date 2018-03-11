<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //关联的表名
    public $table = 'users';
    //表的主键
    public $primaryKey = 'user_id';

    public $timestamps = false;

    public function u_artucle()
    {
        return $this->hasOne('Article','user_id');
    }
}
