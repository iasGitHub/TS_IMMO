<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;

    public function proprietaire()
    {
        return his->belongsTo(Proprietaire::class);
    }
}
