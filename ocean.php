<?php
    header('Access-Control-Allow-Origin: *');
  
    $oceans = [
        [   
            "img" => "artic.jpg",
            "name" => "Arctic Ocean",
            "area" => "16.5 million km²",
            "deepest_point" => "4,665 meters (15,305 feet) ",
            "tempt" => "Possible temperature of this ocean ",
            "temperature" => ["-2°C to 10°C (28°F to 50°F)","10°C (50°F)","-2°C (28°F)","-1.8°C (28.8°F)",]
        ],
        [   
            "img" => "north.jpg",
            "name" => "North Atlantic",
            "area" => "106.5 million km²",
            "deepest_point" => "8,376 meters (27,480 feet) ",
            "tempt" => "Possible temperature of this ocean ",
            "temperature" => ["10°C to 25°C (50°F to 77°F)","0°C to 10°C (32°F to 50°F)","5°C to 20°C (41°F to 68°F)","5°C to 15°C (41°F to 59°F)",]
        ],
        [   
            "img" => "indian.jpg",
            "name" => "Indian Ocean",
            "area" => "70.56 million km²",
            "deepest_point" => "7,725 meters (25,344 feet)",
            "tempt" => "Possible temperature of this ocean ",
            "temperature" => ["25°C to 30°C (77°F to 86°F)","20°C to 25°C (68°F to 77°F)","15°C to 25°C (59°F to 77°F)","-10°C to 20°C (50°F to 68°F)",]
        ],
        [   
            "img" => "pacific.jpg",
            "name" => "Pacific Ocean",
            "area" => "165.2 million km²",
            "deepest_point" => "10,911 meters (35,797 feet)",
            "tempt" => "Possible temperature of this ocean ",
            "temperature" => ["20°C to 28°C (68°F to 82°F)","17°C to 24°C (63°F to 75°F)","10°C to 20°C (50°F to 68°F)","15°C to 25°C (59°F to 77°F)",]
        ],
        [   
            "img" => "southern.jpg",
            "name" => "Southern Ocean",
            "area" => "20.33 million km²",
            "deepest_point" => "7,236 meters (23,740 feet) ",
            "tempt" => "Possible temperature of this ocean ",
            "temperature" => ["-2°C to 10°C (28°F to 50°F)","-2°C to 2°C (28°F to 36°F)","--2°C to 10°C (28°F to 50°F)","-2°C to 5°C (27°F to 35°F)",]
        ],
        [   
            "img" => "npacific.jpg",
            "name" => "North Pacific",
            "area" => "63,800,000 km²",
            "deepest_point" => "10,911 meters",
            "tempt" => "Possible temperature of this ocean ",
            "temperature" => ["5°C","10°C","15°C","20°C",]
        ],
        [   
            "img" => "artic.jpg",
            "name" => "South Atlantic",
            "area" => "31,830,000 km²",
            "deepest_point" => "7,686 meters",
            "tempt" => "Possible temperature of this ocean ",
            "temperature" => ["10°C","15°C","20°C","25°C",]
        ],
  

    ];

    $data = json_encode($oceans);
    echo $data;
    
?>