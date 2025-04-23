<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillable=['titre','description'];
    public function formateur() {
    return $this->belongsTo(Formateur::class);
}

public function etudiants() {
    return $this->belongsToMany(Etudiant::class);
}


}
