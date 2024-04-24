<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //use HasFactory;
    protected $fillable = ['name', 'chef_departement_id'];

    public function chefDepartement()
    {
        return $this->belongsTo(Teacher::class, 'chef_departement_id');
    }

    public function department_head()
    {
        return $this->belongsTo(Teacher::class, 'chef_departement_id');
    }
}
