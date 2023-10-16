<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//MODELS
use App\models\Apartment;

class Message extends Model
{
    use HasFactory;

    //RELATIONSHIPS

    public function apartment() {

        return $this->belongsTo(Apartment::class);
    }
}
