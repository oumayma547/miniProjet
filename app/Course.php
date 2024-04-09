<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //garded id bech hata 7ad maynajem ybadel yzid Id (par exemple bech mayab3athech fel form id)
    protected $guarded = ['id'];

    // les relations des tables 
    //relation entre la table coure et la table catégorie
    public function cat()
    {
        return $this->belongsTo('App\Cat');
    }

    //relation entre la table coure et la table trainer
    public function trainer()
    {
        return $this->belongsTo('App\trainer');
    }


    public function students (){
        $this->belongsToMany('App\Student');
    }
}
