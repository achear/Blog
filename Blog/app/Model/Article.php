<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table = 'blog_article';
    public $primaryKey = 'art_id';
    public $guarded = [];
//  public $fillable=['cate_name','cate_title','cate_keywords'];

    public $timestamps = false;
}
