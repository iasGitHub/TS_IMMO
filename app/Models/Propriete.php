<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proprietaire;

class Propriete extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'libelle',
        'superficie',
        'photo',
        'description',
        'disponibilite',
    ];

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
    
}
