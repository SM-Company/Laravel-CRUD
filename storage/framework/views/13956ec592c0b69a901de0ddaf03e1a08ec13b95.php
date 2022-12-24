<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="<?php echo e(route('login-validate')); ?>" class="login-form w-50 m-auto mt-5">
            <?php echo csrf_field(); ?>
        <div class="title-container text-center">
            <h2>Login</h2>
        </div>

        <div className="form-outline mb-4">
            <input name="email" type="email" id="form2Example1" class="form-control" />
            <label class="form-label" htmlFor="form2Example1" required>
            Email address
            </label>
        </div>

        <div class="form-outline mb-4">
            <input name="password" type="password" id="form2Example2" class="form-control" />
            <label class="form-label" htmlFor="form2Example2" required>
            Password
            </label>
        </div>


        <button type="submit" class="btn btn-primary btn-block mb-4">
            Log In
        </button>

        <div class="text-center">
            <p>
            Create New Account <a href="<?php echo e(URL::to('/register')); ?>">Sign Up</a>
            </p>
        </div>
        </form>
    </body>
</html><?php /**PATH C:\laragon\www\curso_laravel\Laravel_CRUD\resources\views/session/login.blade.php ENDPATH**/ ?>