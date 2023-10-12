<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//MODELS
use App\Models\Image;
use App\Models\User;
use App\Models\View;
use App\Models\Message;
use App\Models\Service;
use App\Models\Sponsorship;

class Apartment extends Model
{
    use HasFactory;


    //RELATIONSHIPS

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function image() {

        return $this->hasMany(Image::class);
    }

    public function view() {

        return $this->hasMany(View::class);
    }

    public function message() {

        return $this->hasMany(Message::class);
    }

    public function services() {

        return $this->belongsToMany(Service::class);
    }

    public function sponsorships() {

        return $this->belongsToMany(Sponsorship::class);
    }
}
