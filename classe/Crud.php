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

    // recuperer les valeurs d'un formulaire pour envoyer dans la base de donnee
    // ex : escape_string("mario bros") 
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
    // execute une requete 
    public function execute($query) 
    {
        $result = $this->connection->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }
    // mettre a jour un produit Update
    // supprimer un produit Delete
    
}

?>