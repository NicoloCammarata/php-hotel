<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <h1 class="text-center">hotel</h1>
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
  <div class="container p-1">
    <table class="table table-bordered ">
        <thead>
            <tr>
                <?php
                    foreach($hotels as $hotel) {
                        echo '<th>'.$hotel['name'].'</th>' ;
                    }
                    
                ?>

            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach($hotels as $hotel) {
                        echo '<td>'.$hotel['description'].'</td>' ;
                    }
                    
                    
                ?>

            </tr>
            <tr>
                <?php
                    
                    
                    foreach($hotels as $hotel) {
                        if ($hotel['parking'] == true) {
                            echo '<td>' .' had parking '.'</td>';
                        }
                        else {
                            echo '<td>' .' no parking '.'</td>';
                        }
                    }
                    
                ?>

            </tr>
            <tr>
                <?php
                    
                    foreach($hotels as $hotel) {
                        echo '<td>'.$hotel['vote'].'</td>' ;
                    }
                    
                ?>

            </tr>
            <tr>
                <?php
                    
                    foreach($hotels as $hotel) {
                        echo '<td>'.$hotel['distance_to_center'].'</td>' ;
                    }
                    
                ?>

            </tr>
        </tbody>
  

        
    </table>
  </div>
</body>
</html>
