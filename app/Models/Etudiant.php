<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable=['nom','email'];
    public function cours() {
    return $this->belongsToMany(Cours::class);
}


}
