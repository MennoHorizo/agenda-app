<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afspraak extends Model
{
    //note which table this model uses.
    protected $table = "afspraken";

    //values that are mass assignable
    protected $fillable = [
        "user_id", "title", "description", "location", "color", "start", "end", "made"
    ];

    //bind the user model to afspraak model. Saying each afspraak only has one user.
    public function afspraak(){
        $this->belongsTo("app\User");
    }
}
