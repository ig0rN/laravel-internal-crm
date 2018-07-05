<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $guarded = ['id'];


    public function comment(){
       return $this->hasMany(ClientComment::class);
    }

    public function addComment($title, $body, $user_id){
        $this->comment()->create(compact('title','body', 'user_id'));
    }

}