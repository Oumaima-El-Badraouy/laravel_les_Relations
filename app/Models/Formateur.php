<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable=['nom'];
    public function profile() {
    return $this->hasOne(Profile::class);
}

public function cours() {
    return $this->hasMany(Cours::class);
}

}
