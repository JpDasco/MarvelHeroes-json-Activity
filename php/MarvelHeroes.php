<?php
    header('Access-Control-Allow-Origin: *');

    $heroes = [
        [   
            "img" => "spiderman.jpg",
            "hero_name" => "Spiderman",
            "civilian_name" => "Peter Parker",
            "origin" => "Queens, New york city, USA",
            "greatest_enemy" => "The Green Goblin",
            "power_source" => "Radioactive Spider",
            "abilities" => ["super human strength","Spidey sense","Web shooter","Wall crawling"]
        ],
        [
            "img" => "ironman.jpg",
            "hero_name" => "Iron man",
            "civilian_name" => "Tony Stark",
            "origin" => "Manhattan, New York, USA",
            "greatest_enemy" => "The Mandarin",
            "power_source" => "Arc Reactor",
            "abilities" => ["Artificial intelligence","Armored suit","Array of weapons","Flight"]
        ],
        [
            "img" => "captainamerica.jpg",
            "hero_name" => "Captain America",
            "civilian_name" => "Steve Rogers",
            "origin" => "Brooklyn, New York City, USA",
            "greatest_enemy" => "Red Skull",
            "power_source" => "Super Soldier Serum",
            "abilities" => ["Can wield the Vibranium shield","Super human speed and stamina","Skilled fighter","Acrobat"]
        ],
        [
            "img" => "hulk.jpg",
            "hero_name" => "hulk",
            "civilian_name" => "Bruce Banner",
            "origin" => "Dayton, Ohio, USA",
            "greatest_enemy" => "Abomination",
            "power_source" => "Gamma Radiation",
            "abilities" => ["Super human strength","Long distance jumping","Durability","Regeneration"]
        ],
        [
            "img" => "Thor.jpg",
            "hero_name" => "Thor",
            "civilian_name" => "Thor Odinson",
            "origin" => "Asgard",
            "greatest_enemy" => "Loki",
            "power_source" => "Golden Apples of Idunn",
            "abilities" => ["God of thunder","Summon mjolnir","Can Wield Storm breaker and the bifrost","Flight"]
        ],
        [   
            "img" => "blackpanther.jpg",
            "hero_name" => "Black Panther",
            "civilian_name" => "T'Challa",
            "origin" => "Wakanda, Africa",
            "greatest_enemy" => "Erik Killmonger",
            "power_source" => "Mystical Herb",
            "abilities" => ["Superhuman senses","Enhanced strength","Enhanced stamina","Self healing"]
        ]

    ];

    $data = json_encode($heroes);
    echo $data;
    
?>