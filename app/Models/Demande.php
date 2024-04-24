<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    //use HasFactory;
    protected $fillable = ['student_id', 'resource_id', 'status'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

}
