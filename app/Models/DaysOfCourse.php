<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaysOfCourse extends Model
{
    //use HasFactory;
    protected $fillable = ['date', 'emploi_id'];

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    public function emploi()
    {
        return $this->belongsTo(Emploi::class);

    }
}
