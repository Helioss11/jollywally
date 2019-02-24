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
            <div class="col-5 col-lg-6 mx-auto mb-5 mb-lg-0">
              <div class="pr-lg-5"><img src="{{ asset('img/illustration.svg') }}" alt="" class="img-fluid"></div>
            </div>
            <div class="col-lg-6 px-lg-4">
              <h1 class="text-base text-primary text-uppercase mb-4">JollyWally</h1>
              <h2 class="mb-4">Domicilio</h2>
              <p class="text-muted">Crear cuenta</p>
              <form id="loginForm" action="/domicilio" method="post" class="mt-4">
                {{ csrf_field() }}
                <input type="hidden" name="username" value="{{ $data['username'] }}">
                <input type="hidden" name="nombre" value="{{ $data['nombre'] }}">
                <input type="hidden" name="ap_paterno" value="{{ $data['ap_paterno'] }}">
                <input type="hidden" name="ap_materno" value="{{ $data['ap_materno'] }}">
                <input type="hidden" name="birthday" value="{{ $data['birthday'] }}">
                <input type="hidden" name="genre" value="{{ $data['genre'] }}">
                <input type="hidden" name="phone" value="{{ $data['phone'] }}">
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="calle" placeholder="Calle" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="numero" placeholder="Número" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="interior" placeholder="Interior" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="colonia" placeholder="Colonia" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="delegacion" placeholder="Delegación" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="ciudad" placeholder="Ciudad" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="zipcode" placeholder="Código postal" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary shadow px-5">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
