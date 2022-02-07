<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Jauns Saraksts</title>
</head>
<body>
    <head>
        <div class="d-flex justify-content-center">
            <h1>Darāmo Lietu Saraksts</h1>
        </div>
        <div class="d-flex justify-content-center">
            <h3>Jauns Darāmo Lietu Saraksts</h3>
        </div>
    </head>

    <div class="d-flex justify-content-center"> 
        <form class="d-flex flex-column w-50 border border-dark rounded p-3 m-3" name="list" id="list" method="POST" action="">

            <div class="d-flex flex-column p-2">
                <label>Virsraksts:</label>
                <input name="title" id="title" placeholder="Virsraksts . . .">
            </div>
            <div class="d-flex flex-column p-2">
                <label>Apraksts:</label>
                <textarea name="description" id="description" placeholder="Apraksts . . ."></textarea>
            </div>

            <div class="d-flex justify-content-between pt-3 px-2">
                <a class="btn btn-secondary" href="index.php">Doties Atpakaļ</a>
                <button class="btn btn-secondary" type="submit" for="list">Izveidot Jaunu</button>
            </div>

        </form>
    </div>
</body>
</html>