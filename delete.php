<?php 
include_once("classe/Crud.php");

$crud = new Crud();

// Récupère l'id dans le slug (url)
$id = $crud->escape_string($_GET['id']);

$result = $crud->execute("DELETE FROM produit WHERE id=$id");
//$result = $crud->delete($id, 'produit');

if ($result) {
    // redirection sans rester sur cette page delete.php
    header("Location:index.php");
}
?>