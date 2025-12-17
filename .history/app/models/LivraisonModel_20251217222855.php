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
            $stmt = $this->db->query("");
            SELECT *
FROM livraison
;

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

        public function getBilan($jour, $mois, $annee) {

            $sql = "SELECT * FROM livraisonLivraison WHERE DAY(daty) = :jour AND MONTH(daty) = :mois AND YEAR(daty) = :annee";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':jour', $jour);
            $stmt->bindParam(':mois', $mois);
            $stmt->bindParam(':annee', $annee);
            $stmt->execute();
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $vehicule = [
                    'chiffreAffaire' => $row['montant'],
                    'coutRevient' => $row['salaire'],
                    'benefice' => $row['benefice'],
                    'date' => $row['date']
                ];
            }

            return $vehicule;
        }
    }
?>