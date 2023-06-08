<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
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
<header>
    <div class="container-fluid bg-success">
        <div class="container bg-warning">
            <div class="row">
                <div class="col-auto m-auto p-3">
                    <h1 class="fw-bold text-danger">Hotels</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid bg-success">
        <div class="container bg-danger">
            <div class="row">
                <div class="col-12 text-center p-3">
                    <h3 class="m-auto text-white">Lista hotel</h3>
                    <table class="table table-hover bg-white">
                        <thead>
                            <tr>
                            <?php foreach ($hotels[0] as $key => $value) { ?>
                                <th scope="col"><?php echo "$key" ?></th>
                                <?php }?>
                            </tr>
                        </thead>
                        <?php foreach ($hotels as $hotel) { 
                            $park=$hotel["parking"]? "Si" : "No";
                            ?>
                        <tbody>
                            <tr>
                                <td><?php echo $hotel["name"] ?></td>
                                <td><?php echo $hotel["description"] ?></td>
                                <td><?php echo $park ?></td>
                                <td><?php echo $hotel["vote"] ?></td>
                                <td><?php echo $hotel["distance_to_center"] ?></td>
                                </tr>
                            </tbody>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>