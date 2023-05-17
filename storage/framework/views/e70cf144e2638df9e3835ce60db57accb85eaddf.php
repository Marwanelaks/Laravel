<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <div class="card" style="margin:20px;">
      <div class="card-header">Créer Nouveau Etudiant</div>
      <div class="card-body">
          <form method="post">
            <?php echo csrf_field(); ?>
            <label>Nom</label></br>
            <input type="text" name="nom"  class="form-control"></br>
            <label>Prénom</label></br>
            <input type="text" name="prenom" class="form-control"></br>
            <label>Date de Naissance</label></br>
            <input type="date" name="date_naissance" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
      </div>
    </div>
</body>
</html><?php /**PATH C:\Users\User\Desktop\CRTL1\controle1\resources\views/crtl_1/createeleve.blade.php ENDPATH**/ ?>