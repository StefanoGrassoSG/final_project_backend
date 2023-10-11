<?php
return [
    // es indirizzo PREFERIBILMENTE INDIRIZZI NELLA VOSTR CITTA ENTRO 20-35km distanza l'uno dall'altro
    // (so che non serve l'array di array associativi ma è più ordinato visivamente per noi scriverli)
    [
        'address' => 'via Vittorio Veneto 14 , Rome'
    ],
    // 7 indirizzi STEFANO
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    // 7 indirizzi Ale M
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    // 7 indirizzi PIERPAOLO
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    //  7 indirizzi EROS
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    // 7 indirizzi ale ebr
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => ''
    ],
];

// come fare il seedr in ApartmentSeeder quando è completo
/*
    
    
        $addresses =  config('apt_addresses');

        Schema::withoutForeignKeyConstraints(function(){
            Apartment::truncate();
        });

        foreach($singleAddress as $addresses) { 
            
            Apartment::create([
                'room' => fake()->randomDigit(),
                'bed'  => fake()->randomDigit(),
                'bathroom' => fake()->boolean(),
                'shared_bathroom' => fake()->boolean(),
                'address' => $singleAddress['address'],
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
*/