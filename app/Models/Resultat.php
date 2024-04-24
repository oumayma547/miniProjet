<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    //use HasFactory;
    protected $fillable = ['student_id', 'matiere', 'resource_id', 'note'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    
    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

}
