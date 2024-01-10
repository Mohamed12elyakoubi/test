<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bier Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <ul id="merkenLijst"></ul>

        <h1>Andere bieren van hetzelfde biermerk</h1>
        <form action="andere-bieren.php" method="GET">
            <label for="bierNaam">Bier Naam:</label>
            <input type="text" id="bierNaam" name="naam">
            <button type="submit">Zoek</button>
        </form>
        <div id="andereBierenResultaat"></div>

        <h1>Alle merken uit een bepaalde categorie</h1>
        <form action="categorie.php" method="GET">
            <label for="categorieNaam">Categorie Naam:</label>
            <input type="text" id="categorieNaam" name="naam">
            <button type="submit">Zoek</button>
        </form>
        <div id="categorieResultaat"></div>

        <h1>Merken met submerken en het aantal submerken</h1>
        <form action="merken-met-submerken.php" method="GET">
            <button type="submit">Toon Merken met Submerken</button>
        </form>
        <div id="merkenMetSubmerkenResultaat"></div>
    </div>

</body>
</html>
