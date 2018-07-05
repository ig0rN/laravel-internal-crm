<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientComment extends Model
{
    protected $table = 'client_comments';

    protected $guarded = ['id'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
