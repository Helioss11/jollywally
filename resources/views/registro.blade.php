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
              <h2 class="mb-4">Registro</h2>
              <p class="text-muted">Crear cuenta</p>
              <form id="loginForm" action="/registro" class="mt-4" method="post">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                  <input type="text" name="username" placeholder="Correo electrónico" class="form-control border-0 shadow form-control-sm" required>
                </div>
                <div class="form-group mb-3">
                  <input type="password" name="passowrd" placeholder="Contraseña" class="form-control border-0 shadow form-control-sm text-violet" required>
                </div>
                <div class="form-group mb-3">
                  <input type="password" name="passowrd_b" placeholder="Confirmar contraseña" class="form-control border-0 shadow form-control-sm text-violet" required>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <input type="text" name="nombre" placeholder="Nombre(s)" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                    <div class="col-sm-4">
                      <input type="text" name="ap_paterno" placeholder="Apellido Paterno" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                    <div class="col-sm-4">
                      <input type="text" name="ap_materno" placeholder="Apellido Materno" class="form-control border-0 shadow form-control-sm" required>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col-sm-3">
                      <label for="year" style="font-size: 12px;">Fecha de nacimiento:</label>
                    </div>
                    <div class="col-sm-3 select">
                      <select name="year" id="year" class="form-control border-0 shadow form-control-sm">
                        <option value="">Año</option>
                        <option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option>
                        <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option>
                        <option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option>
                        <option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option>
                        <option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option>
                        <option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
                        <option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option>
                        <option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option>
                        <option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option>
                        <option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option>
                        <option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option>
                        <option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option>
                        <option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option>
                        <option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option>
                        <option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option>
                      </select>
                    </div>
                    <div class="col-sm-3 select">
                      <select name="month" class="form-control border-0 shadow form-control-sm">
                        <option value="">Mes</option>
                        <option value="01">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                      </select>
                    </div>
                    <div class="col-sm-3 select">
                      <select name="day" class="form-control border-0 shadow form-control-sm">
                        <option value="">Día</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                      <div class="col-sm-2">
                        <label for="genre" style="font-size: 12px;">Sexo:</label>
                      </div>
                      <div class="col-sm-3 custom-control custom-radio">
                        <input type="radio" name="genre" id="genre" value="F" class="custom-control-input">
                        <label style="font-size: 12px;" for="genre" class="custom-control-label">Femenino</label>
                      </div>
                      <div class="col-sm-2 custom-control custom-radio">
                        <input type="radio" name="genre" id="genreM" value="M" class="custom-control-input">
                        <label style="font-size: 12px;" for="genreM" class="custom-control-label">Masculino</label>
                      </div>
                      <div class="col-sm-5 custom-control custom-radio">
                        <input type="text" name="phone" placeholder="Teléfono" class="form-control border-0 shadow form-control-sm" required>
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
