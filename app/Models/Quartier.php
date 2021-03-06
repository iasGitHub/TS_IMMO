<?php

namespace App\Models;


use App\Models\Propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quartier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'libelle',
    ];

    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }
}
