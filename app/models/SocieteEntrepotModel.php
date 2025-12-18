<?php
    namespace app\models;
    use Flight;
    use PDO;

    class SocieteEntrepotModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getEntrepot($idSociete) {
            $sql = "SELECT * FROM livraisonSocieteEntrepot where idSociete = :idSociete";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idSociete', $idSociete);
            $stmt->execute();
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $entrepot = [
                    'id' => $row['id'],
                    'entrepot' => $row['entrepot'],
                    'idSociete' => $row['idSociete']
                ];
            }

            return $entrepot;
        }

    }
?>