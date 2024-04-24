<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //use HasFactory;

    protected $fillable = [
        'nom', 'date_naissance', 'sexe', 'nationalite', 'email', 'telephone', 'niveau_etudes', 'specialisation', 'annee_etudes', 'statut_inscription',
    ];

    protected $casts = [
        'date_naissance' => 'date', // pour convertir automatiquement en objet Carbon
    ];

    public static $rules = [
        'nom' => 'required|string',
        'date_naissance' => 'required|date',
        'sexe' => 'required|string',
        'nationalite' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'required|string',
        'niveau_etudes' => 'required|string',
        'specialisation' => 'required|string',
        'annee_etudes' => 'required|string',
        'statut_inscription' => 'required|string',
    ];


    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

}
