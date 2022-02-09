<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
   include_once("classe/Crud.php");
   $crud = new Crud();
   
   // recuperer les valeurs du formulaire
   if(isset($_POST["tintin"])){
       $id = $_POST['idProduit'];
       $nom = $_POST['nomProduit'];
      // print_r($nom);
       $prix = $_POST['prixProduit'];
      // print_r($prix);

      // ajouter les valeurs dans la base de donnee
      $result = $crud->execute("UPDATE `produit` SET 
      nom = '$nom',
      prix = $prix
      WHERE id = $id; ");
      
      //Message succès
      echo "<font color='green'>Produit mise a jour avec succès.";
      echo "<br/><a href='index.php'>Afficher la liste des produits</a>";
   };
   ?>

</body>
</html>