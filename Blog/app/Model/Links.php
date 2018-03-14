<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    //
    //关联的表名
        public $table = 'blog_links';
        public $primaryKey = 'link_id';
        public $guarded = [];
    //  public $fillable=['cate_name','cate_title','cate_keywords'];
    
        public $timestamps = false;
    
}
