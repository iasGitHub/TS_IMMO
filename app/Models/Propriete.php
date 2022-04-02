<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propriete extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'id',
        'libelle',
        'superficie',
        'photo',
        'description',
        'disponibilite',
        'proprietaire_id',
        'quartier_id',
    ];
    
    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
    
    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }
}
