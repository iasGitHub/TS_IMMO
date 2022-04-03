<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propriete;

class Proprietaire extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
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
        'lieuNaissance'
    ];

    public function proprietes()
    {
        return $this->hasMany(Propriete::class, 'proprietaire_id', 'id');
    }
}
