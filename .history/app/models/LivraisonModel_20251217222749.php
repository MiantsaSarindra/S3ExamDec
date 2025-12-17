<?php
    namespace app\models;
    use Flight;
    use PDO;

    class LivraisonModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getBilan($ja) {

            $sql = "SELECT * FROM livraisonLivraison WHERE DAY(daty) = ? AND MONTH(daty) = ? AND YEAR(daty) = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':ja', $ja);
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