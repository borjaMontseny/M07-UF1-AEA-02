<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>parellsImparells</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="alert alert-primary" role="alert">
            <h1>Parells i Imparells</h1>
        </div>

        <div class="alert alert-info" role="alert">
            <ol>
                <?php

                // creem l'array
                $arrayNums = array();

                // omplim l'array amb randoms 1-10 i l'anem ensenyant amb el for
                for ($i = 0; $i < 5; $i++) {
                    $arrayNums[$i] = rand(1, 10);
                    echo "<li>$arrayNums[$i]</li>";
                }

                // la longitud del array
                $longitudArray = count($arrayNums);

                // contadors i variable sumaTotal
                $contadorParells = 0;
                $contadorImparells = 0;
                $sumaTotal = 0;


                // tornem a recorrer l'array per discriminar parells/imparells i fer la suma total
                for ($i = 0; $i < $longitudArray; $i++) {
                    $sumaTotal += $arrayNums[$i];
                    if ($arrayNums[$i] % 2 == 0) {
                        $contadorParells++;
                    } else {
                        $contadorImparells++;
                    }
                }

                ?>

            </ol>

            <div class="alert alert-warning" role="alert">
                <strong>
                    <?php echo $contadorParells ?> números parells
                </strong>
                <br>
                <strong>
                    <?php echo $contadorImparells ?> números imparells
                </strong>
                <br>
                <strong>SUMA:
                    <?php echo $sumaTotal ?>
                </strong>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>