

<?php $__env->startSection("cabecera"); ?>
<div class="container">
           <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">
                  <h1>Editor de productos</h1>
              </div>
           </nav>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("contenido"); ?>
  <div style="display: flex; flex-direcction: column; align-item: center; justify-content: center;" >

      <form method="post" action="<?php echo e(url('/productos', $producto->id)); ?>" style="width: 400px; margin-top: 50px">  
        <input type="text" name="NombreArticulo" placeholder="Nombre del Articulo" class="form-control mb-2" value="<?php echo e($producto->NombreArticulo); ?>">
          <input type="text" name="Seccion" placeholder="Seccion" class="form-control mb-2" value="<?php echo e($producto->Seccion); ?>">
          <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2" value="<?php echo e($producto->Precio); ?>">
          <input type="text" name="Fecha" placeholder="Fecha" class="form-control mb-2" value="<?php echo e($producto->Fecha); ?>">
          <input type="text" name="PaisOrigen" placeholder="PaisOrigen" class="form-control mb-2" value="<?php echo e($producto->PaisOrigen); ?>">
          
          <?php echo e(csrf_field()); ?>


          <input type="hidden" name="_method" value="PUT">
          
          <input type="submit" href="productos" name="enviar" value="Enviar" class="btn btn-primary">
        </form>
    </div>

  

<?php $__env->stopSection(); ?>

<?php $__env->startSection("pie"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\curso_laravel\Laravel_CRUD\resources\views/productos/edit.blade.php ENDPATH**/ ?>