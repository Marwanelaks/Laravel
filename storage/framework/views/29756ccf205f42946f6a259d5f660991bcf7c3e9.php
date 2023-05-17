


<?php $__env->startSection("title"); ?>
<?php echo e($type); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<?php if($type === "eleve"): ?>
            <?php if($method === "voire"): ?>
               <div class="card" style="margin:20px;">
               <div class="card-header"><?php echo e($datas->prenom); ?> <?php echo e($datas->nom); ?></div>
               <div class="card-body">
                     <div class="card-body">
                     <P class="card-title">Prénom : <?php echo e($datas->nom); ?></P>
                     <p class="card-text">Nom : <?php echo e($datas->prenom); ?></p>
                     <p class="card-text">D.N : <?php echo e($datas->date_naissance); ?></p>
               </div>
               </div>
            </div>

            <?php elseif($method === "edit"): ?>
            <div class="card" style="margin:20px;">
               <div class="card-header"><?php echo "<i>$datas->nom . $datas->prenom</i>"; ?></div>
               <div class="card-body">
                  <form action="<?php echo e(url('eleve/' .$datas->id)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field("PUT"); ?>
                     <label>ID</label></br>
                     <input name="id" id="id" value="<?php echo e($datas->id); ?>" class="form-control" disabled ></br>
                     <label>Nom</label></br>
                     <input type="text" name="nom" value="<?php echo e($datas->nom); ?>"  class="form-control"></br>
                     <label>Prénom</label></br>
                     <input type="text" name="prenom" value="<?php echo e($datas->prenom); ?>" class="form-control"></br>
                     <label>Date de Naissance</label></br>
                     <input type="date" name="date_naissance" value="<?php echo e($datas->date_naissance); ?>" class="form-control"></br>
                     <input type="submit" value="Modifier" class="btn btn-success"></br>
               </form>
               </div>
            </div>
            <?php else: ?>
            <div class="container my-5 m-auto text-center">
               <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">Confirmation !</h5>
                  <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                  <a href=<?php echo e(url("/eleve/list")); ?>><button  class="btn btn-danger" type="submit">Non</button></a>
                  <form method="POST" action="<?php echo e(url('/eleve/supprimer' . '/' . $datas->id)); ?>" accept-charset="UTF-8" style="display:inline">
                     <?php echo method_field("DELETE"); ?>
                     <?php echo csrf_field(); ?>
                     <button type="submit" class="btn btn-success">Oui</button>
                  </form>
                  </div>
               </div>
               </div>
            <?php endif; ?>
<?php elseif($type === "note"): ?>
               <?php if($method === "voire"): ?>
               <div class="card" style="margin:20px;">
               <div class="card-header"><?php echo e($datas->eleve); ?></div>
               <div class="card-body">
                     <div class="card-body">
                     <P class="card-title">Note : <?php echo e($datas->note); ?></P>
                     <p class="card-text">Eleve : <?php echo e($datas->eleve); ?></p>
                     <p class="card-text">Classe : <?php echo e($datas->classe); ?></p>
               </div>
               </div>
               </div>

               <?php elseif($method === "edit"): ?>
               <div class="card" style="margin:20px;">
               <div class="card-header"><?php echo "<i>$datas->eleve</i>"; ?></div>
               <div class="card-body">
                  <form action="<?php echo e(url('notes/' .$datas->id)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field("PUT"); ?>
                     <label>ID</label></br>
                     <input name="id" id="id" value="<?php echo e($datas->id); ?>" class="form-control" disabled ></br>
                     <label>Note</label></br>
                     <input type="text" name="note" value="<?php echo e($datas->note); ?>"  class="form-control"></br>
                     <label>Eleve</label></br>
                     <input type="text" name="eleve" value="<?php echo e($datas->eleve); ?>" class="form-control"></br>
                     <label>Classe</label></br>
                     <input type="text" name="classe" value="<?php echo e($datas->classe); ?>" class="form-control"></br>
                     <input type="submit" value="Modifier" class="btn btn-success"></br>
               </form>
               </div>
               </div>
               <?php else: ?>
               <div class="container my-5 m-auto text-center">
               <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">Confirmation !</h5>
                  <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                  <a href=<?php echo e(url("/notes/list")); ?>><button  class="btn btn-danger" type="submit">Non</button></a>
                  <form method="POST" action="<?php echo e(url('/notes/supprimer' . '/' . $datas->id)); ?>" accept-charset="UTF-8" style="display:inline">
                     <?php echo method_field("DELETE"); ?>
                     <?php echo csrf_field(); ?>
                     <button type="submit" class="btn btn-success">Oui</button>
                  </form>
                  </div>
               </div>
               </div>
               <?php endif; ?>

<?php elseif($type === "cours"): ?>
               <?php if($method === "voire"): ?>
               <div class="card" style="margin:20px;">
               <div class="card-header"><?php echo e($datas->nom); ?></div>
               <div class="card-body">
                     <div class="card-body">
                     <P class="card-title">Nom : <?php echo e($datas->nom); ?></P>
                     <p class="card-text">Durée : <?php echo e($datas->duree); ?></p>
                     <p class="card-text">Matiére : <?php echo e($datas->matiere); ?></p>
                     <p class="card-text">Enseignant : <?php echo e($datas->enseignant); ?></p>
                  </div>
               </div>
               </div>

               <?php elseif($method === "edit"): ?>
               <div class="card" style="margin:20px;">
               <div class="card-header"><?php echo "<i>$datas->nom</i>"; ?></div>
               <div class="card-body">
                  <form action="<?php echo e(url('cours/' .$datas->id)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field("PUT"); ?>
                     <label>ID</label></br>
                     <input name="id" id="id" value="<?php echo e($datas->id); ?>" class="form-control" disabled ></br>
                     <label>Nom</label></br>
                     <input type="text" name="nom" value="<?php echo e($datas->nom); ?>"  class="form-control"></br>
                     <label>Durée</label></br>
                     <input type="text" name="duree" value="<?php echo e($datas->duree); ?>" class="form-control"></br>
                     <label>Matière</label></br>
                     <input type="date" name="matiere" value="<?php echo e($datas->matiere); ?>" class="form-control"></br>
                     <label>Enseignant</label></br>
                     <input type="date" name="enseignant" value="<?php echo e($datas->enseignant); ?>" class="form-control"></br>
                     <input type="submit" value="Modifier" class="btn btn-success"></br>
               </form>
               </div>
               </div>
               <?php else: ?>
               <div class="container my-5 m-auto text-center">
               <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">Confirmation !</h5>
                  <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                  <a href=<?php echo e(url("/cours/list")); ?>><button  class="btn btn-danger" type="submit">Non</button></a>
                  <form method="POST" action="<?php echo e(url('/cours/supprimer' . '/' . $datas->id)); ?>" accept-charset="UTF-8" style="display:inline">
                     <?php echo method_field("DELETE"); ?>
                     <?php echo csrf_field(); ?>
                     <button type="submit" class="btn btn-success">Oui</button>
                  </form>
                  </div>
               </div>
               </div>
               <?php endif; ?>
               
<?php elseif($type === "matieres"): ?>
               <?php if($method === "voire"): ?>
                  <div class="card" style="margin:20px;">
                  <div class="card-header"><?php echo e($datas->nom); ?></div>
                  <div class="card-body">
                        <div class="card-body">
                        <P class="card-title">Nom de matière : <?php echo e($datas->nom); ?></P>
                        <p class="card-text">Coefficient : <?php echo e($datas->coefficient); ?></p>
                        <p class="card-text">Enseignant : <?php echo e($datas->enseignant); ?></p>
                  </div>
                  </div>
               </div>
   
               <?php elseif($method === "edit"): ?>
               <div class="card" style="margin:20px;">
                  <div class="card-header"><?php echo "<i>$datas->nom</i>"; ?></div>
                  <div class="card-body">
                     <form action="<?php echo e(url('matieres/' .$datas->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <label>ID</label></br>
                        <input name="id" id="id" value="<?php echo e($datas->id); ?>" class="form-control" disabled ></br>
                        <label>Nom</label></br>
                        <input type="text" name="nom" value="<?php echo e($datas->nom); ?>"  class="form-control"></br>
                        <label>Coefficient</label></br>
                        <input type="number" name="coefficient" value="<?php echo e($datas->coefficient); ?>" class="form-control"></br>
                        <label>Enseignant</label></br>
                        <input type="date" name="enseignant" value="<?php echo e($datas->enseignant); ?>" class="form-control"></br>
                        <input type="submit" value="Modifier" class="btn btn-success"></br>
                  </form>
                  </div>
               </div>
               <?php else: ?>
               <div class="container my-5 m-auto text-center">
                  <div class="card">
                     <div class="card-body">
                     <h5 class="card-title">Confirmation !</h5>
                     <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                     <a href=<?php echo e(url("/matieres/list")); ?>><button  class="btn btn-danger" type="submit">Non</button></a>
                     <form method="POST" action="<?php echo e(url('/matieres/supprimer/'.$datas->id)); ?>" accept-charset="UTF-8" style="display:inline">
                        <?php echo method_field("DELETE"); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-success">Oui</button>
                     </form>
                     </div>
                  </div>
                  </div>
               <?php endif; ?>
   <?php elseif($type === "emploi"): ?>
                  <?php if($method === "voire"): ?>
                  <div class="card" style="margin:20px;">
                  <div class="card-header"><?php echo e($datas->Jour); ?></div>
                  <div class="card-body">
                        <div class="card-body">
                        <P class="card-title">Note : <?php echo e($datas->CC); ?></P>
                        <p class="card-text">Eleve : <?php echo e($datas->D1); ?></p>
                        <p class="card-text">Classe : <?php echo e($datas->D2); ?></p>
                        <P class="card-title">Note : <?php echo e($datas->D3); ?></P>
                        <p class="card-text">Eleve : <?php echo e($datas->D4); ?></p>
                  </div>
                  </div>
                  </div>
   
                  <?php elseif($method === "edit"): ?>
                  <div class="card" style="margin:20px;">
                  <div class="card-header"><?php echo "<i>$datas->Jour</i>"; ?></div>
                  <div class="card-body">
                     <form action="<?php echo e(url('emplois/' .$datas->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <label>ID</label></br>
                        <input name="id" id="id" value="<?php echo e($datas->id); ?>" class="form-control" disabled ></br>
                        <label>CC</label></br>
                        <input type="text" name="CC" value="<?php echo e($datas->CC); ?>"  class="form-control"></br>
                        <label>Jour</label></br>
                        <input type="text" name="Jour" value="<?php echo e($datas->Jour); ?>" class="form-control"></br>
                        <label>Classe</label></br>
                        <input type="text" name="D1" value="<?php echo e($datas->D1); ?>" class="form-control"></br>
                        <label>Note</label></br>
                        <input type="text" name="D2" value="<?php echo e($datas->D2); ?>"  class="form-control"></br>
                        <label>Eleve</label></br>
                        <input type="text" name="D3" value="<?php echo e($datas->D3); ?>" class="form-control"></br>
                        <label>Classe</label></br>
                        <input type="text" name="D4" value="<?php echo e($datas->D4); ?>" class="form-control"></br>
                        <input type="submit" value="Modifier" class="btn btn-success"></br>
                  </form>
                  </div>
                  </div>
                  <?php else: ?>
                  <div class="container my-5 m-auto text-center">
                  <div class="card">
                     <div class="card-body">
                     <h5 class="card-title">Confirmation !</h5>
                     <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                     <a href=<?php echo e(url("/emplois/list")); ?>><button  class="btn btn-danger" type="submit">Non</button></a>
                     <form method="POST" action="<?php echo e(url('/emplois/supprimer' . '/' . $datas->id)); ?>" accept-charset="UTF-8" style="display:inline">
                        <?php echo method_field("DELETE"); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-success">Oui</button>
                     </form>
                     </div>
                  </div>
                  </div>
                  <?php endif; ?>
   
   <?php elseif($type === "enseignant"): ?>
                  <?php if($method === "voire"): ?>
                  <div class="card" style="margin:20px;">
                  <div class="card-header"><?php echo e($datas->nom . $datas->prenom); ?></div>
                  <div class="card-body">
                        <div class="card-body">
                        <P class="card-title">Nom : <?php echo e($datas->nom); ?></P>
                        <p class="card-text">Prénom : <?php echo e($datas->prenom); ?></p>
                        <p class="card-text">Spécialité : <?php echo e($datas->spécialité); ?></p>
                     </div>
                  </div>
                  </div>
   
                  <?php elseif($method === "edit"): ?>
                  <div class="card" style="margin:20px;">
                  <div class="card-header"><?php echo "<i>$datas->nom . $datas->prenom</i>"; ?></div>
                  <div class="card-body">
                     <form action="<?php echo e(url('enseignant/' .$datas->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <label>ID</label></br>
                        <input name="id" id="id" value="<?php echo e($datas->id); ?>" class="form-control" disabled ></br>
                        <label>Nom</label></br>
                        <input type="text" name="nom" value="<?php echo e($datas->nom); ?>"  class="form-control"></br>
                        <label>Prénom</label></br>
                        <input type="text" name="prenom" value="<?php echo e($datas->prenom); ?>" class="form-control"></br>
                        <label>Spécialité</label></br>
                        <input type="text" name="specailite" value="<?php echo e($datas->spécialité); ?>" class="form-control"></br>
                        <input type="submit" value="Modifier" class="btn btn-success"></br>
                  </form>
                  </div>
                  </div>
                  <?php else: ?>
                  <div class="container my-5 m-auto text-center">
                  <div class="card">
                     <div class="card-body">
                     <h5 class="card-title">Confirmation !</h5>
                     <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                     <a href=<?php echo e(url("/enseignant/list")); ?>><button  class="btn btn-danger" type="submit">Non</button></a>
                     <form method="POST" action="<?php echo e(url('/enseignant/supprimer/' . $datas->id)); ?>" accept-charset="UTF-8" style="display:inline">
                        <?php echo method_field("DELETE"); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-success">Oui</button>
                     </form>
                     </div>
                  </div>
                  </div>
                  <?php endif; ?>              

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("crtl_1.eleves", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\CRTL1\controle1\resources\views/crtl_1/eleve/show.blade.php ENDPATH**/ ?>