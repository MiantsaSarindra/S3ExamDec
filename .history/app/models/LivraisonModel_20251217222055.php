<?php
    namespace app\models;
    use Flight;
    use PDO;

    class LivraisonModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }
          , coutRevient, benefice, date
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
                    'chiffreAffaire' => $row['montant'],
                    'id' => $row['salaire'],
                    'prix' => $row['benefice'],
                    'date' => $row['date']
                ];
            }

            return $produits;
        }
    }
?>