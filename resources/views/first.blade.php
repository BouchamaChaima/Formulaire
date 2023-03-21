<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>First</title>
</head>
<body>
    <header>
        <h1>Test d'un valeur</h1>
    </header>
    <section>
        <form action="/second" method="post">
            <input type="text" placeholder="Taper un valeur" name="val">
            @csrf
            <input type="submit" value="Passer">
        </form>
    </section>
    <footer>

    </footer>
</body>
</html>