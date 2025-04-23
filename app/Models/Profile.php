<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable=['telephone','adresse'];
    public function formateur() {
    return $this->belongsTo(Formateur::class);
}

}
