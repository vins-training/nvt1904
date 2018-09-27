<?php

namespace Nvt1904\Qltt;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'id','name','content', 'created_at', 'updated_at'
    ];
}
