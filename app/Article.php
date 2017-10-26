<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'description'];
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest ();
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
}
