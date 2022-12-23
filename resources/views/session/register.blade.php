<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="{{route('register-validate')}}" class="login-form w-50 m-auto mt-5">
            @csrf
        <div class="title-container text-center">
            <h2>Register</h2>
        </div>
        <div className="form-outline mb-4">
            <input name="name" type="text" id="userName" class="form-control" />
            <label class="form-label" htmlFor="userName">
            User name
            </label>
        </div>

        <div className="form-outline mb-4">
            <input name="email" type="email" id="form2Example1" class="form-control" />
            <label class="form-label" htmlFor="form2Example1">
            Email address
            </label>
        </div>

        <div class="form-outline mb-4">
            <input name="password" type="password" id="form2Example2" class="form-control" />
            <label class="form-label" htmlFor="form2Example2">
            Password
            </label>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">
            Sign Up
        </button>

        <div class="text-center">
            <p>
            Have an account? <a href="{{route('login')}}">Sign in</a>
            </p>
        </div>
        </form>
    </body>
</html>