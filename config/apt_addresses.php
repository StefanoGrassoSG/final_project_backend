<?php
return [
    // es indirizzo PREFERIBILMENTE INDIRIZZI NELLA VOSTR CITTA ENTRO 20-35km distanza l'uno dall'altro
    // (so che non serve l'array di array associativi ma è più ordinato visivamente per noi scriverli)
    /*
        vanno inseriti a mano inoltre lat e lon
        dovete fare una chiamata axios su postman del vostro indirizzo al tomtom con la vostra APIKEY
        indirizzo e APIKEY sono params della chiamata url di tomtom
        e nella risposta json avrete i campi latitudine e longitudine da inserire
        https://api.tomtom.com/search/2/geocode/INDIRIZZO.json?&key=KEiNGuhsySt5PgvkmCw7C9Sb5vGdacR6
        nella risposta json trovate 'position' e avete lat e lon
        in modo alternativo potete andare su laravel inserire indirizzo e andare nel db a ricavarvi lat e lon che usa la stessa funzione della chiamata a tomtom
    */
    [
        'address' => 'via vittorio veneto ,roma',
        'lat' => '41.90709',
        'lon' => '12.48991',
        'cover_img'=> 'resources/img/apt_img/filename'
    ],
    // 7 indirizzi STEFANO
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
    // 7 indirizzi Ale M
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
    // 7 indirizzi PIERPAOLO
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
    //  7 indirizzi EROS
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
    // 7 indirizzi ale ebr
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'resources/img/apt_img/'
    ],
];

// come fare il seedr in ApartmentSeeder quando è completo
/*
    
    
        $adresses =  config('apt_addresses');

        Schema::withoutForeignKeyConstraints(function(){
            Apartment::truncate();
        });

        foreach($singleAddress as $adresses) { 
            
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
                'cover_img' => $singleAddress['cover_img'],
                'user_id' => rand(1, 2)
            ]);
        }
*/