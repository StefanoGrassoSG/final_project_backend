<?php

namespace App\Models;

//MODELS
use App\models\Apartment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;



    //RELATIONSHIPS

    public function apartment() {

        return $this->belongsTo(User::class);
    }
}
