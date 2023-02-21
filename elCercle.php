<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El cercle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1>El cercle</h1>

        <?php

        $radi = rand(50, 100);

        $color = "white";

        if ($radi >= 50 && $radi < 60) {
            $color = "yellow";
        } else if ($radi >= 60 && $radi < 70) {
            $color = "green";
        } else if ($radi >= 70 && $radi < 80) {
            $color = "red";
        } else if ($radi >= 80 && $radi < 90) {
            $color = "blue";
        } else if ($radi >= 90 && $radi <= 100) {
            $color = "orange";
        } else {
            $color = "yellow";
        }

        ?>

        <h2>Radi:
            <?php echo $radi ?>
        </h2>

        <svg width="200" height="200">
            <circle cx="100" cy="100" r="90" stroke="black" stroke-width="2" fill=<?php echo $color ?>>
        </svg>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>