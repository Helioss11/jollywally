<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>JollyWally</title>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
      <link rel="stylesheet" href="{{ asset('css/orionicons.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.pink.css') }}" id="theme-stylesheet">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div class="page-holder d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center py-5">
                <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
                  <div class="pr-lg-5"><img src="{{ asset('img/illustration.svg') }}" alt="" class="img-fluid"></div>
                </div>
                <div class="col-lg-5 px-lg-4">
                  <h1 class="text-base text-primary text-uppercase mb-4">JollyWally</h1>
                  <h2 class="mb-4">Bienvenido</h2>
                  <p class="text-muted">Elige si deseas iniciar sesión o crear una cuenta</p>
                  <form id="loginForm" action="/dashboard" method="post" class="mt-4">
                    {{ csrf_field() }}
                    <div class="form-group mb-4">
                      <input type="text" name="username" placeholder="Correo electrónico" class="form-control border-0 shadow form-control-lg" required>
                    </div>
                    <div class="form-group mb-4">
                      <input type="password" name="passowrd" placeholder="Contraseña" class="form-control border-0 shadow form-control-lg text-violet" required>
                    </div>
                    <div class="form-group mb-4">
                      <div class="custom-control custom-checkbox">
                        <input id="customCheck1" type="checkbox" checked="" class="custom-control-input">
                        <label for="customCheck1" class="custom-control-label">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary shadow px-5">Log in</button>
                    <div class="form-group">
                      <a href="registro">¿Aún no tienes cuenta?</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
