<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="row shadow" style="background-color: #000b73; color: #ffffff">
        <div class="container tete col-md-7 row p-2">
            <h1 class="col-md-2">Logo</h1>
            <button class="col-md-3 mt-2 btn btn-outline-white">Voir les benefice</button>
        </div>
    </header>
    
    <div class="container col-md-12">
        <h2>Les livraisons en attente</h2>

        <ul class="responsive-table">
            <!-- En-tête -->
            <li class="table-header">
                <div class="col col-1">Colis</div>
                <div class="col col-2">Adresse de départ</div>
                <div class="col col-2">Adresse de destination</div>
                <div class="col col-1">Chauffeur</div>
                <div class="col col-1">Voiture</div>
                <div class="col col-1">Date</div>
                <div class="col col-2">Action</div>
            </li>

            <!-- Ligne -->
            <li class="table-row">
                <div class="col col-1" data-label="Colis">42235</div>
                <div class="col col-2" data-label="Adresse de départ">Antananarivo</div>
                <div class="col col-2" data-label="Adresse de destination">Toamasina</div>
                <div class="col col-1" data-label="Chauffeur">Jean</div>
                <div class="col col-1" data-label="Voiture">Toyota Hiace</div>
                <div class="col col-1" data-label="Date">18/12/2025</div>
                <div class="col col-2" data-label="Action">
                    <button class="btn-valider">Livrer</button>
                </div>
            </li>

            <li class="table-row">
                <div class="col col-1" data-label="Colis">42235</div>
                <div class="col col-2" data-label="Adresse de départ">Antananarivo</div>
                <div class="col col-2" data-label="Adresse de destination">Toamasina</div>
                <div class="col col-1" data-label="Chauffeur">Jean</div>
                <div class="col col-1" data-label="Voiture">Toyota Hiace</div>
                <div class="col col-1" data-label="Date">18/12/2025</div>
                <div class="col col-2" data-label="Action">
                    <button class="btn-valider">Livrer</button>
                </div>
            </li>

        </ul>
    </div>
</body>
</html>