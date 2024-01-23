<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <h1 class="text-danger mb-5 text-center">Form for Bad Words</h1>
                <form action="dashboard.php" method="GET">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Scrivi un bel paragrafo</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div id="emailHelp" class="form-text">Tranquillo, non lo diremo a nessuno cosa scrivi (forse)</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Scrivi una parola da censusare (non fare il furbo)</label>
                        <input class="form-control" type="text" aria-label="default input example">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Sono consapevole del rischio che sto correndo</label>
                    </div>
                    <button type=" submit" class="btn btn-warning btn-lg w-100 text-center">Invia (senza vergogna)!</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>