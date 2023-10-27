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
    // esempio, attenetevi ai tipi delle colonne nella tabella del db
    [
        'address' => 'via vittorio veneto ,roma',
        'lat' => '41.90709',
        'lon' => '12.48991',
        'cover_img' => 'public/apt_img/',
        'name' => 'BELLA CASA',
        'bed' => '12',
        'room' => '8',
        'bathroom' => '3',
        'shared_bathroom' => '', /*boolean 1 0 true false */
        'description' => 'affittami stronzo',
        'visible' => 'true', /*boolean 1 0 true false */
        'price' => '199.99',/*decimal  */
        'square_meter' => '',

    ],
    // 7 indirizzi STEFANO
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    // 7 indirizzi Ale M
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    // 7 indirizzi PIERPAOLO
    [
        'address' => 'Corso Duca degli Abruzzi, 10100 Torino TO, Italia',
        'lat' => '45.0672455',
        'lon' => '7.6661878',
        'cover_img' => 'public/apt_img/Torino1',
        'name' => 'Appartamento comodo Centro-Politecnico',
        'bed' => 5,
        'room' => 2,
        'bathroom' => 1,
        'shared_bathroom' => '0',
        'description' => "Location poco distante dal centro di Torino, a pochi minuti dalla stazione ferroviaria di Porta Susa e dal Politecnico. L'appartamento è situato al piano 6 con ascensore in un tranquillo condominio, comodo ai mezzi pubblici grazie alle vicine fermate. Gode di una piacevole vista sulla collina Torinese e sul Monviso. Composto da camera con letto matrimoniale e singolo e soggiorno con divano matrimoniale, completano bagno e cucinino. Dotato di tutti i confort. Da 1 a 5 posti letto",
        'visible' => '1',
        'price' => 76,
        'square_meter' => 90

    ],
    [
        'address' => 'Via Giuseppe Garibaldi, 10140 Torino TO, Italia',
        'lat' => '45.0752476',
        'lon' => '7.6736149',
        'cover_img' => 'public/apt_img/Torino2',
        'name' => 'Annina home - appartamento in centro',
        'bed' => 3,
        'room' => 2,
        'bathroom' => 1,
        'shared_bathroom' => '0',
        'description' => "Posizione Centrale: Situato in Via Boucheron 8/a, è circondato da ristoranti, negozi e un'atmosfera vivace. Perfetto sia per coppie che per famiglie. Con un open space moderno, letto matrimoniale, due divani letto cucina attrezzata, TV, bagno con comfort moderni e un terrazzino per relax. Wi-Fi veloce incluso.
        Contattaci per qualsiasi informazione e/o prenotazione. Siamo qui per rendere il vostro soggiorno a Torino indimenticabile!",
        'visible' => '1',
        'price' => 215,
        'square_meter' => 100

    ],
    [
        'address' => 'Piazza Solferino, Torino TO, Italia',
        'lat' => '45.0684897',
        'lon' => '7.6768194',
        'cover_img' => 'public/apt_img/Torino3',
        'name' => 'Bilocale Lussuoso & Moderno',
        'bed' => 2,
        'room' => 1,
        'bathroom' => 2,
        'shared_bathroom' => '0',
        'description' => "Meraviglioso bilocale nel cuore pulsante di Torino a soli 700mt dalla Stazione e Metropolitana di Porta Susa.
        L'appartamento è di ultima generazione completamente domotico, perfetto per viaggi d'ogni tipo grazie alla zona Centrale completa di ogni tipologia di servizi.
        L'alloggio si trova in una posizione strategica a pochi passi da Piazza Castello e Via Garibaldi e inoltre ricca di Musei e Opere d'arte.
        La casa fa della luminosità e modernità un punto di forza.",
        'visible' => '1',
        'price' => 200,
        'square_meter' => 89

    ],
    [
        'address' => 'Piazza Vittorio Veneto, 10124 Torino TO, Italia',
        'lat' => '45.0651445',
        'lon' => '7.6948871',
        'cover_img' => 'public/apt_img/Torino4',
        'name' => 'Verdesera',
        'bed' => 2,
        'room' => 1,
        'bathroom' => 1,
        'shared_bathroom' => '1',
        'description' => "Benvenuti a Verdesera - la vostra oasi nel cuore di Torino!
        La nostra casa è il luogo perfetto per una fuga romantica o un soggiorno rilassante in città.
        Goditi il massimo comfort in una camera completa di idromassaggio e di una moderna TV a schermo piatto davanti al letto, per trascorrere serate davvero uniche.
        Situata in una zona vivace, la casa è circondata da un'ampia varietà di negozi e a soli due passi a piedi da Piazza Statuto, dal centro storico e dai servizi della metropolitana!",
        'visible' => '1',
        'price' => 168,
        'square_meter' => 70

    ],
    [
        'address' => 'Piazza Statuto, 10140 Torino TO, Italia',
        'lat' => '45.0766195',
        'lon' => '7.6691802',
        'cover_img' => 'public/apt_img/Torino5',
        'name' => 'Mansarda Passalacqua',
        'bed' => 3,
        'room' => 2,
        'bathroom' => 2,
        'shared_bathroom' => '0',
        'description' => '',
        'visible' => '1',
        'price' => 120,
        'square_meter' => 120

    ],
    [
        'address' => 'Via Duchessa Jolanda, 10138 Torino TO, Italia',
        'lat' => '45.0740528',
        'lon' => '7.6619328',
        'cover_img' => 'public/apt_img/Torino6',
        'name' => '[Vicino a Porta Susa] Incredibile loft',
        'bed' => 3,
        'room' => 2,
        'bathroom' => 2,
        'shared_bathroom' => '1',
        'description' => "Meraviglioso appartamento strategicamente posizionato vicino alla stazione di Porta Susa, comodo a tutti i servizi, circondato da parcheggi sia custoditi che a pagamento. L'appartamento si trova al piano terra, perfetto per tutte le esigenze. All' interno disporrete di tutto il necessario per vivere un confortevole soggiorno per necessità lavorative (ottima connessione internet che copre tutta la casa) o di piacere data la vicinanza ad ogni punto di attrazione, un vero gioiello!",
        'visible' => '1',
        'price' => 118,
        'square_meter' => 110

    ],
    [
        'address' => 'Piazza Castello, 10123 Torino TO, Italia',
        'lat' => '45.0707357',
        'lon' => '7.6848198',
        'cover_img' => 'public/apt_img/Torino7',
        'name' => 'Open Space Centralissimo',
        'bed' => 5,
        'room' => 1,
        'bathroom' => 1,
        'shared_bathroom' => '0',
        'description' => "Appartamento molto confortevole e ben organizzato nei suoi spazi, facilmente vivibile poichè dotato di molti confort.
        Il letto a soppalco lo rende unico nel suo genere... il luogo ideale dove rigenerarsi durante una vacanza!
        Accesso per gli ospiti
        Possibilità, su richiesta, di prenotazione di spa o ristoranti.
        Possibilità, su richiesta, di pick up da e per l'aeroporto (quota da pagare a parte).",
        'visible' => '1',
        'price' => 285,
        'square_meter' => 200
    ],

    //  7 indirizzi EROS
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    // 7 indirizzi ale ebr
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ],
    [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img' => 'public/img/apt_img/',
        'name' => '',
        'bed' => '',
        'room' => '',
        'bathroom' => '',
        'shared_bathroom' => '',
        'description' => '',
        'visible' => '',
        'price' => '',
        'square_meter' => '',

    ]

];

// come fare il seedr in ApartmentSeeder quando è completo
/*
    
    
        $addresses =  config('apt_addresses');

        Schema::withoutForeignKeyConstraints(function(){
            Apartment::truncate();
        });

        foreach($singleAddress as $addresses) { 
            
            Apartment::create([
                'room' => $singleAddress['room'],
                'bed'  => $singleAddress['bed'],
                'bathroom' => $singleAddress['bathroom'],
                'shared_bathroom' => $singleAddress['shared_bathroom'],
                'address' => $singleAddress['address'],
                'lat' => $singleAddress['lat'],
                'lon' => $singleAddress['lon'],
                'room' => $singleAddress['room']
                'visible' => $singleAddress['visible'],,
                'name' => $singleAddress['name'],,
                'price' => $singleAddress['price'],,
                'square_meter' => $singleAddress['square_meter'],,
                'description' => $singleAddress['description'],,
                'cover_img' => $singleAddress['cover_img'],
                'user_id' => rand(1, 2)
            ]);
        }
*/