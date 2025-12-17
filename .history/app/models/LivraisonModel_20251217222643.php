<?php
    namespace app\models;
    use Flight;
    use PDO;

    class LivraisonModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

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
                    'coutRevient' => $row['salaire'],
                    'benefice' => $row['benefice'],
                    'date' => $row['date']
                ];
            }

            return $produits;
        }
        public function getById($idVehicule) {

            $sql = "SELECT * FROM cooperativeVehicule WHERE id = :idVehicule";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idVehicule', $idVehicule);
            $stmt->execute();
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $vehicule = [
                    'id' => $row['id'],
                    'nom' => $row['nom']
                ];
            }

            return $vehicule;
        }
    }
?>