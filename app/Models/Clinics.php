<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinics extends Model
{
    use HasFactory;
    protected $fillable=['clinicName' , 'clinicDescription'];

    public function doctors(){
        return $this->hasMany(Doctors::class,'clinics_id');
    }
}
