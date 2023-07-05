<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paient extends Model
{
    use HasFactory;

    protected $fillable = ['PName' , 'PEmail' , 'PPhone' , 'programs_id'];

    public function programs(){
        return $this->belongsTo(Programs::class);
    }
}
