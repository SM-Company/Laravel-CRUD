

<?php $__env->startSection("cabecera"); ?>

<?php $__env->startSection("contenido"); ?>

    <form method="POST">

        <input type="text" name="NombreArticulo" placeholder="Nombre del Articulo">

        <input type="submit" name="enviar" value="Enviar">
    </form>

<?php $__env->startSection("pie"); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\curso_laravel\Laravel_CRUD\resources\views/productos/insert.blade.php ENDPATH**/ ?>