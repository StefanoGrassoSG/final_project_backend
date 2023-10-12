<?php

namespace Database\Seeders;


use App\Models\Apartment;
use App\Models\Sponsorship;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// facades
use Illuminate\Support\Facades\Schema;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Schema::withoutForeignKeyConstraints(function(){
            Apartment::truncate();
        });


        for ($i=0; $i < 9; $i++) { 
            
            Apartment::create([
                'room' => fake()->randomDigit(),
                'bed'  => fake()->randomDigit(),
                'bathroom' => fake()->boolean(),
                'shared_bathroom' => fake()->boolean(),
                'address' => fake()->address(),
                'lat' => fake()->latitude($min = -90, $max = 90),
                'lon' => fake()->longitude($min = -180, $max = 180),
                'visible' => true,
                'name' => fake()->streetName(),
                'price' => fake()->randomFloat(2, 50, 9999),
                'square_meter' => fake()->randomNumber(3, false),
                'description' => fake()->paragraphs(3, true),
                'cover_img' => fake()->imageUrl(),
                'user_id' => rand(1, 2)
            ]);
        }


        $apt = Apartment::all();
        $serv = Service::all();
        $sponsor = Sponsorship::all();
        foreach ($apt as $singleapt){
            $randServ = $serv->random(rand(1, 3))->pluck('id')->toArray();
            $singleapt->services()->attach($randServ);
            $randspons = $sponsor->random(rand(1, 3))->pluck('id')->toArray();
            $singleapt->services()->attach($randspons);


            $startDate = now();  // Sostituisci con la tua data di inizio desiderata
            $endDate = now()->addDays(30);  // Sostituisci con la tua data di fine desiderata
        
            $singleapt->sponsorships()->attach($randspons, ['start_date' => $startDate, 'end_date' => $endDate]);
            $singleapt->services()->attach($randServ);
        }

 
}}
