<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = ['marque','couleur','dateMiseEnCirculation'];
    public function salariés(){
        return $this->belongsToMany(Salarié::class,'Utilisation','matricule','codeSal');
    }
    use HasFactory;
}
