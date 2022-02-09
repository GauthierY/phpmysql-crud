<?php
 include_once("classe/Crud.php");
 $crud = new Crud();

 // recuperer l'id dans url 
 $id = $crud->escape_string($_GET["id"]);
 $produit = $crud->getData("select * from produit WHERE id = $id");
 foreach ($produit as $item) {
    $nom = $item['nom'];
    $prix = $item['prix'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"><h1>Editer</h1>

                <form method="post" action="post.php">
                    <div class="mb-3">
                        <label  class="form-label">Nom</label>
                        <input type="text" value="<?php echo $nom?>" name="nomProduit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">prix</label>
                        <input type="number" value="<?php echo $prix?>" name="prixProduit" class="form-control">
                    </div>
                    <button type="submit" name="tintin" class="btn btn-primary">ajouter</button>
                    <a href="index.php">annuler</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>