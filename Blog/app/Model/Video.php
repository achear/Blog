<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * 指定是否模型应该被戳记时间。
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 与模型关联的数据表。
     *
     * @var string
     */
    protected $table = 'blog_video';

    /**
     * 表的主键
     * 
     * @var string
     */
    public $primaryKey = 'video_id';

    /**
     * 不允许被批量复制的字段
     * 
     * @var string
     */
    protected $guarded = [];
}
