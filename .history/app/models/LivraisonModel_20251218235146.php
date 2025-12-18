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

        public function save($livraison) {
            $sql = "
                INSERT INTO livraisonLivraison (
                    idColis,
                    adresseDepart,
                    adresseDestination,
                    idStatut,
                    idChauffeur,
                    idVoiture,
                    daty,
                    salaire,
                    montant,
                    benefice
                ) VALUES (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                )
            ";

            $stmt = $this->db->prepare($sql);

            return $stmt->execute([
                $livraison['idColis'],
                $livraison['adresseDepart'],
                $livraison['adresseDestination'],
                $livraison['idStatut'],
                $livraison['idChauffeur'],
                $livraison['idVoiture'],
                $livraison['daty'],
                $livraison['salaire'],
                $livraison['montant'],
                $livraison['benefice']
            ]);
        }

     INT PRIMARY KEY AUTO_INCREMENT,
    idColis INT,
    adresseDepart VARCHAR(100),
    adresseDestination VARCHAR(100),
    idStatut INT,
    idChauffeur INT,
    idVoiture INT,
    daty DATE,
        public function getAttentente() {

            $sql = "SELECT * FROM livraisonLivraison WHERE idStatut = 1";
            $stmt = $this->db->query($sql);
        
            $livraison= [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $livraison[] = [
                    'id' => $row['id'],
                    'coutRevient' => $row['salaire'],
                    'benefice' => $row['benefice'],
                    'date' => $row['date']
                ];
            }

            return $livraison;
        }
        

        public function updateStatut($idLivraison) {
            $sql = "UPDATE livraisonLivraison SET idStatut = 2 WHERE id = :idLivraison";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idLivraison', $idLivraison);
            $stmt->execute();
        }
    }
?>