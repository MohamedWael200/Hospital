<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = ['DNAme' , 'image' , 'Ddescription' , 'DGragute' , 'avilableDays' , 'clinics_id' ,'age'];

    public function clinics(){
        return $this->belongsTo(Clinics::class);
    }

    public function programs(){
        return $this->hasMany(Programs::class,'doctors_id');
    }
}
