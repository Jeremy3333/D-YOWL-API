<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'likes' => 'int',
        'shares' => 'int'
    ];

    protected $fillable = [
        'title',
        'user',
        'link',
        'comment',
        'img'
    ];
}
