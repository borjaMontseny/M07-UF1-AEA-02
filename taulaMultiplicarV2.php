<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taula de Multiplicar Versió 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
input{
    margin-top: 5px;
    width: 45px;
    border: 1px solid #dddddd;
    text-align: center;
}
</style>

<body>
    <div class="container">

        <?php $numAleatori = rand(1, 10); ?>

        <div class="alert alert-primary" role="alert">
            <h1>Taula de multiplicar de
                <?php echo $numAleatori ?> Versió 2
            </h1>
        </div>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<input type="text" value="' . $numAleatori . '" /> x <input type="text" value="' . $i . '" /> = <input type="text" value="' . ($numAleatori * $i) . '" />';
            echo '<br>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>