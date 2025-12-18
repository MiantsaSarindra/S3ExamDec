<?php
    namespace app\models;
    use Flight;
    use PDO;

    class LivraisonModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getBilan($jour, $mois, $annee) {

            if (empty($jour) && empty($mois) && empty($annee)) {
                $sql = "SELECT * FROM livraisonLivraison WHERE DAY(daty) = :jour AND MONTH(daty) = :mois AND YEAR(daty) = :annee ORDER BY daty DESC";
            }
            if (!empty($jour) && empty($mois) && empty($annee)) {
                $sql = "SELECT * FROM livraisonLivraison WHERE MONTH(daty) = :mois AND YEAR(daty) = :annee ORDER BY daty DESC";
            }
            if (!empty($jour) && !empty($mois) && empty($annee)) {
                $sql = "SELECT * FROM livraisonLivraison WHERE YEAR(daty) = :annee ORDER BY daty DESC";
            }
            if (!empty($jour) && !empty($mois) && !empty($annee)) {
                $sql = "SELECT * FROM livraisonLivraison ORDER BY daty DESC";
            }
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':jour', $jour);
            $stmt->bindParam(':mois', $mois);
            $stmt->bindParam(':annee', $annee);
            $stmt->execute();
        
            $bilan= [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $bilan[] = [
                    'chiffreAffaire' => $row['montant'],
                    'coutRevient' => $row['salaire'],
                    'benefice' => $row['benefice'],
                    'date' => $row['date']
                ];
            }

            return $bilan;
        }
    }
?>