<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    //use HasFactory;
    protected $fillable = ['resource_id'];

    // Relation avec la ressource
    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    // Relation avec les jours de cours
    public function daysOfCourse()
    {
        return $this->hasMany(DaysOfCourse::class);
    }
}
