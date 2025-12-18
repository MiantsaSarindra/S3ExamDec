<?php
namespace app\models;

use PDO;

class SocieteModel {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function update($societe) {
        $sql = "UPDATE livraisonSociete 
                SET nom = :nom,
                    chiffreAffaire = :chiffreAffaire,
                    coutRevient = :coutRevient
                WHERE id = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':nom', $societe['nom']);
        $stmt->bindParam(':chiffreAffaire', $societe['chiffreAffaire']);
        $stmt->bindParam(':coutRevient', $societe['coutRevient']);
        $stmt->bindParam(':id', $societe['id']);

        return $stmt->execute();
    }
}
