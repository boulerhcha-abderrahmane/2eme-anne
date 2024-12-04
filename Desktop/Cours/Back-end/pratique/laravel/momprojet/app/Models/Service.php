<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['nomSer'];
    
    public function salariés(){
        return $this->hasMany(Salarié::class,'codeSer');
    }
        
    use HasFactory;
}
