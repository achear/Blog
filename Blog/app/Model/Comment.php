<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //关联的表名
    public $table = 'user_comment';
    //表的主键
    public $primaryKey = 'c_id';

    public $timestamps = false;

    public function u_comment()
    {
        return $this->hasOne('users','c_id');
    }
}
