<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $guarded = ['id'];


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        static::deleted(function (){
           foreach ($this->comment as $comment){
               $comment->delete();
           }
        });
    }

    public function comment(){
        return $this->hasMany(ProjectComment::class);
    }

    public function addComment($title, $body, $user_id){
        $this->comment()->create(compact('title', 'body', 'user_id'));
    }
}
