<?php
return [
    // es indirizzo PREFERIBILMENTE INDIRIZZI NELLA VOSTR CITTA ENTRO 20-35km distanza l'uno dall'altro
    // (so che non serve l'array di array associativi ma è più ordinato visivamente per noi scriverli)
    /*
        vanno inseriti a mano inoltre lat e lon
        dovete fare una chiamata axios su postman del vostro indirizzo al tomtom con la vostra APIKEY
        indirizzo e APIKEY sono params della chiamata url di tomtom
        e nella risposta json avrete i campi latitudine e longitudine da inserire
    */
    [
        'address' => 'via Vittorio Veneto 14 , Rome',
        'lat' => '',
        'lon' => ''
    ],
    // 7 indirizzi STEFANO
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    // 7 indirizzi Ale M
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    // 7 indirizzi PIERPAOLO
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    //  7 indirizzi EROS
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    // 7 indirizzi ale ebr
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => ''
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
                'lat' => $singleAddress['lat'],
                'lon' => $singleAddress['lon'],
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