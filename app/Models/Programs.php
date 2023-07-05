<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;
    protected  $fillable = ['OperationName' , 'OperationDes' ,'OperationCost' , 'doctors_id'];

    public function doctors(){
        return $this->belongsTo(Doctors::class);
    }

    public function patined(){
        return $this->hasMany(Programs::class,'programs_id');
    }
}
