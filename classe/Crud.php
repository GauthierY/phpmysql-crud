<?php
include_once 'DbConfig.php';


class Crud extends DbConfig {
    // afficher un ou des produits Read

    public function getData($toto)
    {        
        $result = $this->connection->query($toto);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
    // ajouter un produit Create 
    // mettre a jour un produit Update
    // supprimer un produit Delete
    
}

?>