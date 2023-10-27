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
        'cover_img'=> 'public/apt_img/',
        'name'=>'BELLA CASA',
        'bed'=>'12',
        'room' => '8',
        'bathroom'=>'3',
        'shared_bathroom'=>'', /*boolean 1 0 true false */
        'description'=>'affittami stronzo',
        'visible'=>'true', /*boolean 1 0 true false */
        'price'=>'199.99',/*decimal  */
        'square_meter'=>'',

    ],
    // 7 indirizzi STEFANO
    [
    'address' => 'Vico di Pellicceria, 16124 Genova GE, Italia',
    'lat' => '44.4109216',
    'lon' => '8.9302048',
    'cover_img'=> '/apt_img/attico.webp',
    'name'=>'Attico esclusivo Centro Storico',
    'bed'=>2,
    'room' => 1,
    'bathroom'=>1,
    'shared_bathroom'=>0,
    'description'=> "Rilassati e ricaricati in quest'oasi di quiete ed eleganza. Attico lussuoso privato con terrazza e jacuzzi uso esclusivo affacciato sul museo di Pelliceria, a due passi dall'Acquario e dal Porto Antico nel cuore del Centro Storico di Genova.
    Appartamento nuovo arredato con ricercatezza e marchi importanti e dotato di ogni confort, il palazzo d'interesse storico-artistico è stato completamente ristrutturato ed è dotato di ascensore, palestra condominiale e zona relax",
    'visible'=>1,
    'price'=> 99,
    'square_meter'=> 150,

],
[
    'address' => 'Corso Torino, 16129 Genova GE, Italia',
    'lat' => '44.4009445',
    'lon' => '8.9501701',
    'cover_img'=> '/apt_img/mansarda.webp',
    'name'=>'La mansarda in centro - Parcheggio gratuito',
    'bed'=>2,
    'room' => 1,
    'bathroom'=>1,
    'shared_bathroom'=>0,
    'description'=>'Casa Savò è una deliziosa mansarda sita nel cuore di Genova, ristrutturata ed arredata con cura e dotata di ogni comfort.
    Inoltre , offre ai nostri ospiti la possibilità di parcheggiare gratuitamente in tutta la BLU AREA (NO ISOLA AZZURRA) presente nella zona limitrofa all’appartamento (zona A e B indicata , in alto , sui cartelli presenti vicino ai parcheggi )',
    'visible'=>1,
    'price'=>86,
    'square_meter'=>120,

],
[
    'address' => "Stradone Sant'Agostino, 16123 Genova GE, Italia",
    'lat' => '44.4048975',
    'lon' => '8.9312798',
    'cover_img'=> '/apt_img/acquario.webp',
    'name'=>'(Acquario) Luminoso ed Elegante Alloggio in Centro',
    'bed'=>4,
    'room' => 3,
    'bathroom'=>2,
    'shared_bathroom'=>0,
    'description'=>"Elegante e luminoso appartamento situato nel cuore di Genova a soli 10 minuti a piedi dall’Acquario e 5 minuti da Piazza De Ferrari

    Trovandosi all'ultimo piano l'appartamento gode di un’ottima esposizione alla luce naturale e grazie alle numerose finestre vi farà vivere appieno la bellezza del centro città.
    
    Si informa che NON è presente l'aria condizionata.",
    'visible'=>1,
    'price'=>79,
    'square_meter'=>95,

],
[
    'address' => 'Via ai Cuochi, 16010 Manesseno GE, Italia',
    'lat' => '44.4782046',
    'lon' => '8.9235433',
    'cover_img'=> '/apt_img/oasi.webp',
    'name'=>"Oasi nel verde vicino alla città'",
    'bed'=>1,
    'room' => 1,
    'bathroom'=>1,
    'shared_bathroom'=>0,
    'description'=>"Vicino a Villa Serra di Comago, in contesto privato, nuovo e soleggiato bilocale in villa. con zona notte, zona giorno angolo cottura, divano letto, camino, soffitti affrescati terrazza e giardino . Raggiungibile in auto, vicino all' A7 uscita Genova Bolzaneto (3km). Dista circa 15 km dal centro di Genova. Mezzi pubblici e negozi a circa 500mt a piedi . Ideale per chi viaggia in auto, in moto, o per lavoro, con parcheggio gratuito per auto a pochi metri e moto in giardino carrabile e privato.",
    'visible'=>1,
    'price'=>37,
    'square_meter'=>85,

],
[
    'address' => 'Via Padre Attilio Garrè, 16015 San Bartolomeo GE, Italia',
    'lat' => '44.5407936',
    'lon' => '8.9832149',
    'cover_img'=> '/apt_img/terrazza.webp',
    'name'=>'La Terrazza',
    'bed'=>1,
    'room' => 1,
    'bathroom'=>1,
    'shared_bathroom'=>0,
    'description'=>"Delizioso monolocale immerso nel verde e affacciato su una loggia privata, tranquillo, semplice, accogliente e luminoso.
    Dotato di grande terrazza ideale per godere del fresco estivo.
    Possibilità di piacevoli passeggiate nel piccolo borgo in cui e' situato.
    Si trova a poco più di 1 km dal vivace paesino di Casella e dal suo caratteristico centro storico.",
    'visible'=>1,
    'price'=>50,
    'square_meter'=>68,

],
[
    'address' => 'Via San Felice, 16138 Genova GE, Italia',
    'lat' => '44.463835',
    'lon' => '8.9930824',
    'cover_img'=> '/apt_img/giardino.webp',
    'name'=>'Appartamento in casa indipendente con giardino',
    'bed'=>6,
    'room' => 1,
    'bathroom'=>1,
    'shared_bathroom'=>0,
    'description'=>"Rilassati con tutta la famiglia in questo alloggio tranquillo in mezzo al verde. A 20 min.dal centro, mare, acquario; 35 con bus. 5 min.piscine Sciorba. Ampio appartamento in casa indipendente con grande giardino a disposizione, veranda con barbecue e terrazzo. Si accede da cancello automatico con posto auto privato. Esposizione a sud con sole tutto il giorno. Zona tranquilla e comoda. Adatto a famiglie con bambini. Ammessi animali. Possibile 5^letto e/o lettino",
    'visible'=>1,
    'price'=>66,
    'square_meter'=>96,

],
[
    'address' => 'Via della Torrazza, 16157 Genova GE, Italia',
    'lat' => '44.4297463',
    'lon' => '8.7879039',
    'cover_img'=> '/apt_img/bis.webp',
    'name'=>'La casa dei Bis',
    'bed'=>2,
    'room' => 1,
    'bathroom'=>1,
    'shared_bathroom'=>0,
    'description'=>"Rilassati con tutta la famiglia in questo alloggio tranquillo.
    Poco distante dalla stazione di Genova Pra' , potrai raggiungere facilmente il centro città o le splendide spiagge della riviera ligure.
    L' appartamento è composto da cucina abitabile, bagno spazioso con doccia e lavatrice, dispensa e una grande camera con letto matrimonaile e divano letto, con openspace sulla cucina. Parcheggio condominiale.",
    'visible'=>1,
    'price'=>55,
    'square_meter'=>120,

],
    // 7 indirizzi Ale M
   [
        'address' => 'Via Festo Porzio Roma',
        'lat' => '41.8551101',
        'lon' => '12.5642376',
        'cover_img'=> 'apt_img/roma1',
        'name'=>'Appartamento Appio Claudio',
        'bed'=>'4',
        'room' => '1',
        'bathroom'=>'1',
        'shared_bathroom'=>'0',
        'description'=>'Luminoso appartamento nel cuore del quartiere Appio Claudio, situato in una delle zone più vivaci e desiderabili di Roma. Questa residenza incantevole offre una combinazione perfetta di eleganza moderna e comfort accogliente.',
        'visible'=>'1',
        'price'=>'86.99',
        'square_meter'=>'60',

    ],
   [
        'address' => 'Via Quintilio Varo Roma',
        'lat' => '41.8535667',
        'lon' => '12.5651807',
        'cover_img'=> 'apt_img/roma2',
        'name'=>'Appartamento Terrace Rome',
        'bed'=>'3',
        'room' => '2',
        'bathroom'=>'2',
        'shared_bathroom'=>'1',
        'description'=>'Il Terrace, è’ stato recentemente ristrutturato, offre un salone con cucina a vista che da accesso direttamente sul terrazzo principale, che ti permetterà di poterti rilassare sorseggiando un calice di buon vino italiano, aspettando il tramonto. ',
        'visible'=>'1',
        'price'=>'100.00',
        'square_meter'=>'90',

    ],
   [
        'address' => 'Via Tuscolana Roma',
        'lat' => '41.8385832',
        'lon' => '12.5953982',
        'cover_img'=> 'apt_img/roma3',
        'name'=>'Can Pier Rome Apartment',
        'bed'=>'4',
        'room' => '3',
        'bathroom'=>'2',
        'shared_bathroom'=>'0',
        'description'=>'Rilassati con tutta la famiglia in questo alloggio tranquillo, breve soggiorno a Roma in un appartamento con entrata indipendente dotato di tutti i confort, parcheggio auto gratuito nelle immediate vicinanze, tv, aria condizionata, WiFi, bagno, Lavatrice, cucina.',
        'visible'=>'1',
        'price'=>'210.50',
        'square_meter'=>'120',

    ],
   [
        'address' => 'Via Di Torre Spaccata Roma',
        'lat' => '41.8683873',
        'lon' => '12.5871566',
        'cover_img'=> 'apt_img/roma4',
        'name'=>'Lovely House',
        'bed'=>'3',
        'room' => '3',
        'bathroom'=>'2',
        'shared_bathroom'=>'1',
        'description'=>'Luminoso appartamento , appena rinnovato in una zona tranquilla del quartiere Flaminio, vicina allo Stadio Olimpico,Ponte Milvio, Museo MAXXI,Stadio Flaminio e al teatro Olimpico.
        A pochi passi vi è la fermata del tram n.2 che in pochi minuti vi porterà a Piazza del Popolo da cui sarà facile raggiungere tutti i luoghi più importanti di Roma come Piazza di Spagna , Fontana di Trevi , Villa Borghese, Pantheon .',
        'visible'=>'1',
        'price'=>'200.00',
        'square_meter'=>'80',

    ],
   [
        'address' => 'Viale Alessandrino Roma',
        'lat' => '41.8751507',
        'lon' => '12.5793874',
        'cover_img'=> 'apt_img/roma5',
        'name'=>'Lotto29',
        'bed'=>'1',
        'room' => '1',
        'bathroom'=>'1',
        'shared_bathroom'=>'0',
        'description'=>'Immerso nel verde dei lotti dello storico Quartiere della Garbatella, delizioso appartamento composto da una spaziosa camera da letto matrimoniale un salotto con divano letto matrimoniale, angolo cottura abitabile. Molto ben collegato.',
        'visible'=>'1',
        'price'=>'150.99',
        'square_meter'=>'70',

    ],
    [
        'address' => 'Via dei Platani Roma',
        'lat' => '41.8809696',
        'lon' => '12.5699482',
        'cover_img'=> 'apt_img/roma6',
        'name'=>'A casa di Laura',
        'bed'=>'4',
        'room' => '3',
        'bathroom'=>'2',
        'shared_bathroom'=>'0',
        'description'=>'Situato nel cuore del quartiere storico di Trastevere a Roma, questo affascinante appartamento vi accoglie con il suo carattere unico e il suo fascino autentico. Appena varcata la soglia, sarete catturati in una atmosfera accogliente e dalla bellezza dei dettagli artigianali che adornano ogni angolo di questa dimora.',
        'visible'=>'1',
        'price'=>'300.00',
        'square_meter'=>'120',

    ],
   [
        'address' => 'Via dei Castani Roma',
        'lat' => '41.8876518',
        'lon' => '12.5656648',
        'cover_img'=> 'apt_img/roma7',
        'name'=>'Casetta Monteverde',
        'bed'=>'5',
        'room' => '3',
        'bathroom'=>'2',
        'shared_bathroom'=>'1',
        'description'=>'Delizioso appartamento appena rinnovato in una zona tranquilla del quartiere Monteverde.',
        'visible'=>'1',
        'price'=>'120.00',
        'square_meter'=>'90',

    ],
    // 7 indirizzi PIERPAOLO
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
    //  7 indirizzi EROS
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
    // 7 indirizzi ale ebr
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

    ],
   [
        'address' => '',
        'lat' => '',
        'lon' => '',
        'cover_img'=> 'public/img/apt_img/',
        'name'=>'',
        'bed'=>'',
        'room' => '',
        'bathroom'=>'',
        'shared_bathroom'=>'',
        'description'=>'',
        'visible'=>'',
        'price'=>'',
        'square_meter'=>'',

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