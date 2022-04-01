<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'email',
        'telephone',
        'civilite',
        'cni',
        'sexe',
        'dateNaissance',
        'lieuNaissanc'
    ];

    public function propriete()
    {
        return $this->hasMany(Propriete::class);
    }
}
