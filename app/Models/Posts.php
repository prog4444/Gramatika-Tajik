<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description'
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
