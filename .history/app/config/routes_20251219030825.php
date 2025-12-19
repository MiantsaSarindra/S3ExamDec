<?php

use app\controllers\LivraisonController;
use app\controllers\ChauffeurController;
use app\controllers\ColisController;
use app\controllers\VoitureController;
use app\controllers\StatutController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	// Si filter par date
	$router->post('/livraison/bilan', function() use ($app) {
		$jour  = $_POST['jour'];
		$mois  = $_POST['mois']; 
		$annee  = $_POST['annee'];
		 
		$LivraisonController = new LivraisonController(Flight::app());
		$bilans = $LivraisonController-> getBilan($jour, $mois, $annee);
		$app->render('benefice', ['bilans' => $bilans]);
	});

	$router->get('/', function() use ($app) {
		$app->render('livrer', ['bilans' => $bilans]);
	});

	// Si pas filter par date
	$router->get('/livraison/bilan', function() use ($app) {
		$jour  = "";
		$mois  = "";
		$annee  = "";

		$LivraisonController = new LivraisonController(Flight::app());
		$bilans = $LivraisonController-> getBilan($jour, $mois, $annee);
		$app->render('benefice', ['bilans' => $bilans]);
	});


	$router->get('/livraison', function() use ($app) {
		$ChauffeurController = new ChauffeurController(Flight::app());
		$ColisController = new ColisController(Flight::app());
		$VoitureController = new VoitureController(Flight::app());
		$StatutController = new StatutController(Flight::app());

		$LivraisonController = new LivraisonController(Flight::app());
		$listeLivraisons = $LivraisonController->getAttentente();
		$data = [];
		foreach ($listeLivraisons as $listeLivraison) {
			$chauffeur = $ChauffeurController-> getById($listeLivraison['idChauffeur']);
			$colis = $ColisController-> getById($listeLivraison['idColis']);
			$voiture = $VoitureController-> getById($listeLivraison['idVoiture']);
			$statut = $StatutController-> getById($listeLivraison['idStatut']);
			
			$data[] = [
                    'id' => $listeLivraison['id'],
                    'Colis' => $colis,
                    'adresseDepart' => $listeLivraison['adresseDepart'],
                    'adresseDestination' => $listeLivraison['adresseDestination'],
                    'Statut' => $statut,
                    'Chauffeur' => $chauffeur,
                    'Voiture' => $voiture,
                    'daty' => $listeLivraison['daty']
			];
		}
		$app->render('listeLivraison', ['listeLivraisons' => $data]);
	});

	$router->get('/livraison/listeLivraison/@id', function($id) use ($app) {
		$LivraisonController = new LivraisonController(Flight::app());
		$LivraisonController-> updateStatut($id);

		$ChauffeurController = new ChauffeurController(Flight::app());
		$ColisController = new ColisController(Flight::app());
		$VoitureController = new VoitureController(Flight::app());
		$StatutController = new StatutController(Flight::app());

		$listeLivraisons = $LivraisonController->getAttentente();
		$data = [];
		foreach ($listeLivraisons as $listeLivraison) {
			$chauffeur = $ChauffeurController-> getById($listeLivraison['idChauffeur']);
			$colis = $ColisController-> getById($listeLivraison['idColis']);
			$voiture = $VoitureController-> getById($listeLivraison['idVoiture']);
			$statut = $StatutController-> getById($listeLivraison['idStatut']);
			
			$data[] = [
                    'id' => $listeLivraison['id'],
                    'Colis' => $colis,
                    'adresseDepart' => $listeLivraison['adresseDepart'],
                    'adresseDestination' => $listeLivraison['adresseDestination'],
                    'Statut' => $statut,
                    'Chauffeur' => $chauffeur,
                    'Voiture' => $voiture,
                    'daty' => $listeLivraison['daty']
			];
		}
		$app->render('listeLivraison', ['listeLivraisons' => $data]);
	});


	// $ColisController = new ColisController($app);
	$router->get('/livrer', function() {
		LivraisonController::redirect(	ColisController::getAll(),
										VoitureController::getAll(), 
										SocieteEntrepotController::getEntrepot(1),
										ChauffeurController::getAll()
									);
	});

	$router->post('/traitement', function() use ($app) {
		LivraisonController::traiter(Flight::request()->data);
	});
	
	// $router->get('/livrer', function() use ($app) {
	// 	// ColisController::getAll();
	// 	$colis = (new ColisController($app))->getAll();
	// 	// $voitures = (new VoitureModel($db))->getAll();
	// 	// $chauffeurs = (new ChauffeurModel($db))->getAll();

	// 	// $app->render('livrer', ['colis' => $colis, 'voitures' => $voitures, 'chauffeurs' => $chauffeurs]);
	// });

	$router->group('/api', function() use ($router) {
		// $router->get('/livrer', [ ColisController::class, 'getAll' ]);
		// $router->get('/livrer', [ VoitureController::class, 'getAll' ]);
		// $router->get('/livrer', [ ChauffeurController::class, 'getAll' ]);

		// $router->get('/users', [ ApiExampleController::class, 'getUsers' ]);
		// $router->get('/users/@id:[0-9]', [ ApiExampleController::class, 'getUser' ]);
		// $router->post('/users/@id:[0-9]', [ ApiExampleController::class, 'updateUser' ]);
	});
	
	
}, [ SecurityHeadersMiddleware::class ]);