<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getExcerptAttribute()
    {
        if (\strlen($this->content) <= 200){
            return $this->content;
        }

        return \substr($this->content, 0, 200) . "...";
    }
}
