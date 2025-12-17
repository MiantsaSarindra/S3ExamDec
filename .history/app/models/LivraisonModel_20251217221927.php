<?php
    namespace app\models;
    use Flight;
    use PDO;

    class LivraisonModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

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