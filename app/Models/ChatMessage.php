<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id','id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id','id');
    }

    public function user()   
    {
        return $this->belongsTo(User::class,'sender_id','id');
        
    } // actually that is not need bcz already create a realtionship in user table, it just for reference.



}
