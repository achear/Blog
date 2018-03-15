<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class advert extends Model
{
    //关联的表名
    public $table = 'blog_advert';
    public $primaryKey = 'advert_id';
    public $guarded = [];
//  public $fillable=['cate_name','cate_title','cate_keywords'];

    public $timestamps = false;
}
