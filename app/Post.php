<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content'

    ];
    public function tags(){
        
        return $this->belongsToMany('App\Tag' , 'posts_tags');
    }
    
}
