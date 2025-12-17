<?php
    namespace app\models;
    use Flight;
    use PDO;

    class LivraisonModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }
         , montant, benefice
        public function getBilan() {
            $stmt = $this->db->query("SELECT * FROM livraisonLivraison");
            SELECT *
FROM livraison
WHERE DAY(daty) = ?
  AND MONTH(daty) = ?
  AND YEAR(daty) = ?;

            $produits = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $produits[] = [
                    'id' => $row['id'],
                    'nom' => $row['nom'],
                    'prix' => $row['prix'],
                    'images' => $row['images']
                ];
            }

            return $produits;
        }
    }
?>