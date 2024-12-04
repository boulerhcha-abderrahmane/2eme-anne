<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarié extends Model
{
    protected $fillable = ['nomSal','prenomSal','dateEmbauche','dateNaissance','fonction'];
    public function service(){
        return $this->belongsTo(Service::class,'codeSer');
    }
    public function voitures(){
        return $this->belongsToMany(Voiture::class,'Utilisation','matricule','codeSal');
    }
    use HasFactory;
}
