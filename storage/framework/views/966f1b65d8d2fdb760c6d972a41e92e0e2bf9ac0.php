

<?php $__env->startSection("title"); ?>
<?php echo e($type); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<?php if($type === "eleve"): ?>

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="<?php echo e(url('/eleve/create')); ?>" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Nom</th>
                                   <th>Prénom</th>
                                   <th>Date de Naissance</th>
                                   <th>Actions</th>
                               </tr>
                           </thead>
                           <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eleve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($loop->iteration); ?></td>
                                   <td><?php echo e($eleve->nom); ?></td>
                                   <td><?php echo e($eleve->prenom); ?></td>
                                   <td><?php echo e($eleve->date_naissance); ?></td>
                                   
                                   <td>
                                       <a href="<?php echo e(url('/eleve/' . $eleve->id .'/' . "voire")); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="<?php echo e(url('/eleve/' . $eleve->id .'/' . "edit" )); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="<?php echo e(url('/eleve/' . $eleve->id .'/' . "supprimer")); ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

<?php elseif($type === "notes"): ?>


<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="<?php echo e(url('/note/create')); ?>" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Note</th>
                                   <th>Eleve</th>
                                   <th>Classe</th>
                               </tr>
                           </thead>
                           <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nots): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($nots->note); ?></td>
                                   <td><?php echo e($nots->eleve); ?></td>
                                   <td><?php echo e($nots->classe); ?></td>
                                   
                                   <td>
                                       <a href="<?php echo e(url('/note/' . $nots->id .'/' . "voire")); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="<?php echo e(url('/note/' . $nots->id .'/' . "edit" )); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="<?php echo e(url('/note/' . $nots->id .'/' . "supprimer")); ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>
<?php elseif($type === "emplois"): ?>

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="<?php echo e(url('/emplois/create')); ?>" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Jour</th>
                                   <th>D1</th>
                                   <th>D2</th>
                                   <th>D3</th>
                                   <th>D4</th>
                                   <th>CC</th>
                                  
                               </tr>
                           </thead>
                           <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($emp->Jour); ?></td>
                                   <td><?php echo e($emp->D1); ?></td>
                                   <td><?php echo e($emp->D2); ?></td>
                                   <td><?php echo e($emp->D3); ?></td>
                                   <td><?php echo e($emp->D4); ?></td>
                                   <td><?php echo e($emp->CC); ?></td>
                                   <td>
                                       <a href="<?php echo e(url('/emploi/' . $emp->id .'/' . "voire")); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="<?php echo e(url('/emploi/' . $emp->id .'/' . "edit" )); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="<?php echo e(url('/emploi/' . $emp->id .'/' . "supprimer")); ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

<?php elseif($type === "matieres"): ?>

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="<?php echo e(url('/matiere/create')); ?>" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Nom</th>
                                   <th>Coefficient</th>
                                   <th>Enseignant(e)</th>
                               </tr>
                           </thead>
                           <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($matiere->nom); ?></td>
                                   <td><?php echo e($matiere->coefficient); ?></td>
                                   <td><?php echo e($matiere->enseignant); ?></td>
                                   
                                   <td>
                                       <a href="<?php echo e(url('/matieres/' . $matiere->id .'/' . "voire")); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="<?php echo e(url('/matieres/' . $matiere->id .'/' . "edit" )); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="<?php echo e(url('/matieres/' . $matiere->id .'/' . "supprimer")); ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

<?php elseif($type === "cours"): ?>

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="<?php echo e(url('/cours/create')); ?>" class="btn btn-success btn-sm">
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Nom</th>
                                   <th>Durée (par heures)</th>
                                   <th>Matière</th>
                                   <th>Enseignant(e)</th>
                                 </tr>
                           </thead>
                           <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cours): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($cours->nom); ?></td>
                                   <td><?php echo e($cours->duree); ?></td>
                                   <td><?php echo e($cours->matiere); ?></td>
                                   <td><?php echo e($cours->enseignant); ?></td>
                                   <td>
                                       <a href="<?php echo e(url('/cours/' . $cours->id .'/' . "voire")); ?>" ><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="<?php echo e(url('/cours/' . $cours->id .'/' . "edit" )); ?>" ><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="<?php echo e(url('/cours/' . $cours->id .'/' . "supprimer")); ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

<?php elseif($type === "enseignant"): ?>

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="<?php echo e(url('/enseignant/create')); ?>" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Nom</th>
                                   <th>Prènom</th>
                                   <th>Spécialié</th>
                               </tr>
                           </thead>
                           <tbody>
                           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($ens->nom); ?></td>
                                   <td><?php echo e($ens->prenom); ?></td>
                                   <td><?php echo e($ens->spécialité); ?></td>
                                   
                                   <td>
                                       <a href="<?php echo e(url('/enseignant/' . $ens->id .'/' . "voire")); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="<?php echo e(url('/enseignant/' . $ens->id .'/' . "edit" )); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="<?php echo e(url('/enseignant/' . $ens->id .'/' . "supprimer")); ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("crtl_1.eleves", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\CRTL1\controle1\resources\views/crtl_1/eleve/index.blade.php ENDPATH**/ ?>