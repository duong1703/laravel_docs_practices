<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";

    protected $primaryKey = "id";

    protected $fillable = ['users_id', 'title_name' ,'categories_name', 'content'];

    public function user() 
    {
        return $this->belongsTo(User::class, 'users_id'); // 'users_id' là khóa ngoại trong bảng 'posts'
    }
}
