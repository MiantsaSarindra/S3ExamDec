<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livrer</title>
</head>
<body class="livrer-page">
    <header>
        <h2>Insérer une livraison</h2>
    </header>
    <main>
        <form action="/traitement" method="post">
            <h1>Nouvelle Livraison</h1>

            <label for="coli">Choisir un colis :</label>
            <select name="coli" id="coli">
                <option value="">--Choisir un colis--</option>
            </select>

            <label for="entrepot">Entrepôt :</label>
            <input type="text" name="entrepot" id="" value="<?= $entrepot['entrepot'] ?>" readonly>
            
            <label for="adresseDestination">Adresse de destination :</label>
            <input type="text" name="adresseDestination" id="" placeholder="Entrez la déstination">
            
            <label for="chauffeur">Choisir un chauffeur :</label>
            <select name="chauffeur" id="chauffeur">
                <option value="">--Choisir un chauffeur--</option>
            </select>

            <label for="voiture">Choisir une voiture :</label>
            <select name="voiture" id="voiture">
                <option value="">--Choisir une voiture--</option>
                <?php foreach($voitures as $v) { ?>
                    <option value="<?= $v['id'] ?>"><?= $v['nom'] ?></option>    
                <?php } ?>
            </select>

            <button type="submit">Valider</button>
        </form>
    </main>

    <footer>

    </footer>
</body>
</html>