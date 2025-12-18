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
    
<div class="container col-md-10">
  <h2>Les livraisons en attente</h2>

  <ul class="responsive-table">
    <!-- En-tête -->
    <li class="table-header">
      <div class="col col-2">Colis</div>
      <div class="col col-1">Adresse de départ</div>
      <div class="col col-1">Adresse de destination</div>
      <div class="col col-2">Chauffeur</div>
      <div class="col col-2">Voiture</div>
      <div class="col col-2">Date</div>
      <div class="col col-2">Action</div>
    </li>

    <!-- Ligne -->
    <li class="table-row">
      <div class="col col-2" data-label="Colis">42235</div>
      <div class="col col-1" data-label="Adresse de départ">Antananarivo</div>
      <div class="col col-1" data-label="Adresse de destination">Toamasina</div>
      <div class="col col-2" data-label="Chauffeur">Jean</div>
      <div class="col col-2" data-label="Voiture">Toyota Hiace</div>
      <div class="col col-2" data-label="Date">18/12/2025</div>
      <div class="col col-2" data-label="Action">
        <button class="btn-valider">Valider</button>
      </div>
    </li>

    <li class="table-row">
      <div class="col col-2" data-label="Colis">42236</div>
      <div class="col col-1" data-label="Adresse de départ">Antsirabe</div>
      <div class="col col-1" data-label="Adresse de destination">Fianarantsoa</div>
      <div class="col col-2" data-label="Chauffeur">Paul</div>
      <div class="col col-2" data-label="Voiture">Nissan Caravan</div>
      <div class="col col-2" data-label="Date">19/12/2025</div>
      <div class="col col-2" data-label="Action">
        <button class="btn-valider">Valider</button>
      </div>
    </li>

  </ul>
</div>

    <div class="col-md-10 container mt-5 shadow p-5 rounded">
        <table class="table table-hover text-center col-md-7 border rounded">
            <thead>
                <tr>
                    <td  style="background-color: #000b73; color: #ffffff">Colis</td>
                    <td  style="background-color: #000b73; color: #ffffff">Adresse de départ</td>
                    <td  style="background-color: #000b73; color: #ffffff">Adresse de destination</td>
                    <td  style="background-color: #000b73; color: #ffffff">Chauffeur</td>
                    <td  style="background-color: #000b73; color: #ffffff">Voiture</td>
                    <td  style="background-color: #000b73; color: #ffffff">Date</td>
                    <td  style="background-color: #000b73; color: #ffffff">Action</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($listeLivraisons as $listeLivraison) { ?>
                        <td><?php echo $listeLivraison['Colis'] ?></td>
                        <td><?php echo $listeLivraison['adresseDepart'] ?></td>
                        <td><?php echo $listeLivraison['adresseDestination'] ?></td>
                        <td><?php echo $listeLivraison['Chauffeur'] ?></td>
                        <td><?php echo $listeLivraison['Voiture'] ?></td>
                        <td><?php echo $listeLivraison['daty'] ?></td>
                        <td><a href="/livraison/listeLivraison/<?php echo $listeLivraison['id'] ?>" class="btn btn-outline-primary">Livrer</a></td>
                    <?php } ?>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td style="color: #000b73"><strong>total chiffreAffaire</strong></td>
                    <td style="color: #000b73"><strong>total coutRevient</strong></td>
                    <td style="color: #000b73"><strong>total benefice</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>