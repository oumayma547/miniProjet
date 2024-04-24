<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    //use HasFactory;
    protected $fillable = ['heure_debut', 'heure_fin', 'teacher_id', 'classroom_id', 'matiere', 'days_of_course_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function classe()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function dayOfCourse()
    {
        return $this->belongsTo(DaysOfCourse::class);
    }
}
