<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                <?php foreach($colis as $c) { ?>
                    <option value="<?= $c['id'] ?>"><?= $c['nom'] ?></option>    
                <?php } ?>
            </select>

            <label for="entrepot">Entrepôt :</label>
            <input type="text" name="entrepot" id="" value="<?= $entrepot['entrepot'] ?>" readonly>
            z
            <input type="text" name="adresseDestination" id="" placeholder="Entrez la déstination">
            <br><br>
            <select name="chauffeur" id="">
                <option value="">Choisir une chauffeur</option>
                <?php foreach($chauffeurs as $v) { ?>
                    <option value="<?= $v['id'] ?>"><?= $v['nom'] ?></option>    
                <?php } ?>
            </select>
            <br><br>
            <select name="voiture" id="">
                <option value="">Choisir une voiture</option>
                <?php foreach($voitures as $v) { ?>
                    <option value="<?= $v['id'] ?>"><?= $v['nom'] ?></option>    
                <?php } ?>
            </select>
            <button>Valider</button>
            
        </form>

    </main>
    <footer>

    </footer>
</body>
</html>