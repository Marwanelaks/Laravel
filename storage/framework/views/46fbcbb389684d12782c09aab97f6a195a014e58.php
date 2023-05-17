

<?php $__env->startSection("title"); ?>
<?php echo e($eleve->prenom ." ". $eleve->nom); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="card" style="margin:20px;">
   <div class="card-header"><?php echo e($eleve->prenom ." ". $eleve->nom); ?></div>
   <div class="card-body">
       <form action="<?php echo e(url('eleve/' .$eleve->id)); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <?php echo method_field("PUT"); ?>
         <label>ID</label></br>
         <input name="id" id="id" value="<?php echo e($eleve->id); ?>" class="form-control" disabled ></br>
         <label>Nom</label></br>
         <input type="text" name="nom" value="<?php echo e($eleve->nom); ?>"  class="form-control"></br>
         <label>Prénom</label></br>
         <input type="text" name="prenom" value="<?php echo e($eleve->prenom); ?>" class="form-control"></br>
         <label>Date de Naissance</label></br>
         <input type="date" name="date_naissance" value="<?php echo e($eleve->date_naissance); ?>" class="form-control"></br>
         <input type="submit" value="Modifier" class="btn btn-success"></br>
     </form>
   </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make("crtl_1.eleves", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\CRTL1\controle1\resources\views/crtl_1/eleve/edit.blade.php ENDPATH**/ ?>