

<?php $__env->startSection("cabecera"); ?>

           <nav class="navbar navbar-dark bg-dark text-light">
              <div class="ms-5">
                  <h1>Leectura de productos</h1>
              </div>
              <div class="user-container d-flex align-items-center me-5" >
                <h5 class="user-name me-3"><?php echo e(auth()->user()->name); ?></h5>
                <a href="<?php echo e(route('logout')); ?>"><button type="button"  class="btn btn-primary">Salir</button></a>
              </div>
           </nav>
    


<?php $__env->stopSection(); ?>


<?php $__env->startSection("contenido"); ?>

<?php if(count($errors) > 0): ?> 

<div class="alert alert-secondary alert-dismissible fade show" role="alert" style="width: 400px; margin-left: 50px; position: absolute">
   <strong>!</strong> Debe de llenar todos los campos.
   <button type="button" class="close btn" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
   </button>
</div>

<?php endif; ?>

<div style="display: flex; justify-content: space-around; ">

    <div style="display: flex; flex-direcction: column; align-item: center; justify-content: center; margin-top: 50px" >
      
      <form method="post" action="<?php echo e(url('/productos')); ?>" style="width: 300px; margin-top: 50px;" >
        <input type="text" name="NombreArticulo" placeholder="Nombre del Articulo" class="form-control mb-2">
        <input type="text" name="Seccion" placeholder="Seccion" class="form-control mb-2">
        <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2">
        <input type="text" name="Fecha" placeholder="Fecha" class="form-control mb-2">
        <input type="text" name="PaisOrigen" placeholder="Pais Origen" class="form-control mb-2">
        
        
        <?php echo e(csrf_field()); ?>

        
        <input type="submit" name="enviar" value="Guardar" class="btn btn-primary">
        <input type="reset" name="borrar" value="Borrar" class="btn btn-secondary">
      </form>
    </div>
    
    <div style="display: flex; flex-direcction: column; align-item: center; justify-content: center;" >
      
      <table class="table" style="width: 700px; margin-top: 50px">
        <thead class="text-light bg-dark">
          <tr>
            <th scope="col">COD</th>
            <th scope="col">NombreArticulo</th>
                <th scope="col">Seccion</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha</th>
                <th scope="col">PaisOrigen</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <tr>
                <th scope="row"><?php echo e($producto->id); ?></th>
                <td><?php echo e($producto->NombreArticulo); ?></td>
                <td><?php echo e($producto->Seccion); ?></td>
                <td><?php echo e($producto->Precio); ?></td>
                <td><?php echo e($producto->Fecha); ?></td>
                <td><?php echo e($producto->PaisOrigen); ?></td>
                <td style="display: flex;">
                  <a href="<?php echo e(route('productos.edit', $producto->id)); ?>" class="btn btn-secondary">Editar</a>
                  <form method="post" action="<?php echo e(url('/productos', $producto->id)); ?>">  
                    
                    <input type="submit" class="btn btn-danger" value="Borrar" style="margin-left: 10px"></input>
                    
                    <?php echo e(csrf_field()); ?>

                    
                    <input type="hidden" name="_method" value="DELETE">
                  </form>
                </td>
              </tr>
              
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          
        </div>
      
    </div>

   
      
      <?php $__env->stopSection(); ?>
      
      <?php $__env->startSection("pie"); ?>
      
      <?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\curso_laravel\Laravel_CRUD\resources\views/productos/index.blade.php ENDPATH**/ ?>