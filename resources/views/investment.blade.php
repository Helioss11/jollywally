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
      <header class="header">
        <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
            <a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead">
              <i class="fas fa-align-left"></i>
            </a>
            <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-center">
              JollyWally
              <img src="{{ asset('img/ywPink.png') }}" alt="" style="width:10%;display: inline;">
            </a>
            <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
            <li class="nav-item">
              <form id="searchForm" class="ml-auto d-none d-lg-block">
                <div class="form-group position-relative mb-0">
                  <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>
                  <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
                </div>
              </form>
            </li>
            <li class="nav-item dropdown mr-3"><a id="notifications" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-gray-400 px-1"><i class="fa fa-bell"></i><span class="notification-icon"></span></a>
              <div aria-labelledby="notifications" class="dropdown-menu"><a href="#" class="dropdown-item">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                    <div class="text ml-2">
                      <p class="mb-0">You have 2 followers</p>
                    </div>
                  </div></a><a href="#" class="dropdown-item"> 
                  <div class="d-flex align-items-center">
                    <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                    <div class="text ml-2">
                      <p class="mb-0">You have 6 new messages</p>
                    </div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
                    <div class="text ml-2">
                      <p class="mb-0">Server rebooted</p>
                    </div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-sm bg-violet text-white"><i class="fab fa-twitter"></i></div>
                    <div class="text ml-2">
                      <p class="mb-0">You have 2 followers</p>
                    </div>
                  </div></a>
                <div class="dropdown-divider"></div><a href="#" class="dropdown-item text-center"><small class="font-weight-bold headings-font-family text-uppercase">View all notifications</small></a>
              </div>
            </li>
            <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
              <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">Mark Stephen</strong><small>Web Developer</small></a>
                <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Settings</a><a href="#" class="dropdown-item">Activity log       </a>
                <div class="dropdown-divider"></div><a href="login.html" class="dropdown-item">Logout</a>
              </div>
            </li>
          </ul>
        </nav>
      </header>
      <div class="d-flex align-items-stretch">
        <div id="sidebar" class="sidebar py-3">
          <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
          <ul class="sidebar-menu list-unstyled">
            <li class="sidebar-list-item"><a href="/dashboard" class="sidebar-link text-muted"><i class="o-statistic-1 mr-3 text-gray"></i><span>Dashboard</span></a></li>
            <li class="sidebar-list-item"><a href="/opciones-inversion" class="sidebar-link text-muted active"><i class="o-sales-up-1 mr-3 text-gray"></i><span>Opciones de inversión</span></a></li>
            <li class="sidebar-list-item"><a href="/movimientos" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Movimientos</span></a></li>
            <li class="sidebar-list-item"><a href="/transferencias" class="sidebar-link text-muted"><i class="o-stack-1 mr-3 text-gray"></i><span>Transferencias</span></a></li>
          </ul>
        </div>
        <div class="page-holder w-100 d-flex flex-wrap">
          <div class="container-fluid px-xl-5">
            <section class="py-2"></section>
            <section>
              <div class="row mb-4">
                <div class="col-lg-12 mb-12 mb-lg-0 pl-lg-0">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="h6 text-uppercase mb-0">Opciones de inversión</h2><br>
                      <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary" data-toggle="collapse" href="#p2p" role="button" aria-expanded="true" aria-controls="p2p">Plataformas P2P</button>
                        <button type="button" class="btn btn-primary" data-toggle="collapse" href="#cetes" role="button" aria-expanded="false" aria-controls="cetes">CETES</button>
                        <button type="button" class="btn btn-primary" data-toggle="collapse" href="#inmobiliario" role="button" aria-expanded="false" aria-controls="inmobiliario">Inmobiliarios</button>
                        <button type="button" class="btn btn-primary" data-toggle="collapse" href="#banca" role="button" aria-expanded="false" aria-controls="banca">Banca Tradicional</button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="col-lg-2 text-center"><strong>Nombre</strong></div>
                            <div class="col-lg-2 text-center"><strong>Descripción</strong></div>
                            <div class="col-lg-2 text-center"><strong>Plazos</strong></div>
                            <div class="col-lg-2 text-center"><strong>Rendimiento</strong></div>
                            <div class="col-lg-2 text-center"><strong>% de impago</strong></div>
                            <div class="col-lg-2 text-center"><strong>Montos</strong></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body collapse show" id="p2p">
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/doopla.png" style="width: 170px;" alt="doopla"></div>
                            <div class="col-lg-2 text-center">Plaforma P2P</div>
                            <div class="col-lg-2 text-center">3 a 30 meses</div>
                            <div class="col-lg-2 text-center">12 a 26%</div>
                            <div class="col-lg-2 text-center">5%</div>
                            <div class="col-lg-2 text-center">2500</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/logo_yotepresto.png" style="width: 170px;" alt="yo te presto"></div>
                            <div class="col-lg-2 text-center">Plaforma P2P</div>
                            <div class="col-lg-2 text-center">6 y 3 meses</div>
                            <div class="col-lg-2 text-center">8.9 y 38.9%</div>
                            <div class="col-lg-2 text-center">ND</div>
                            <div class="col-lg-2 text-center">10000</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/prestadero.png" style="width: 170px;" alt="prestadero"></div>
                            <div class="col-lg-2 text-center">Plaforma P2P</div>
                            <div class="col-lg-2 text-center">12, 24 y 36 meses</div>
                            <div class="col-lg-2 text-center">8.9 a 28.9%</div>
                            <div class="col-lg-2 text-center">ND</div>
                            <div class="col-lg-2 text-center">250</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/afluenta.png" style="width: 170px;" alt="afluenta"></div>
                            <div class="col-lg-2 text-center">Plaforma P2P</div>
                            <div class="col-lg-2 text-center">12 y 48 meses</div>
                            <div class="col-lg-2 text-center">8.5 y 50.5%</div>
                            <div class="col-lg-2 text-center">ND</div>
                            <div class="col-lg-2 text-center">5000</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/KuboFinancieroOk.jpg" style="width: 170px;" alt="kubo"></div>
                            <div class="col-lg-2 text-center">Plaforma P2P</div>
                            <div class="col-lg-2 text-center">4 y 18 meses</div>
                            <div class="col-lg-2 text-center">16.5 y 61.5%</div>
                            <div class="col-lg-2 text-center">ND</div>
                            <div class="col-lg-2 text-center">5000</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body collapse" id="cetes">
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/Cetesdirecto.png" style="width: 170px;" alt="cetes"></div>
                            <div class="col-lg-2 text-center">CETES</div>
                            <div class="col-lg-2 text-center">28 dias</div>
                            <div class="col-lg-2 text-center">7.86%</div>
                            <div class="col-lg-2 text-center">0</div>
                            <div class="col-lg-2 text-center">100</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/Cetesdirecto.png" style="width: 170px;" alt="cetes"></div>
                            <div class="col-lg-2 text-center">CETES</div>
                            <div class="col-lg-2 text-center">3 meses</div>
                            <div class="col-lg-2 text-center">8.17%</div>
                            <div class="col-lg-2 text-center">0</div>
                            <div class="col-lg-2 text-center">100</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/Cetesdirecto.png" style="width: 170px;" alt="cetes"></div>
                            <div class="col-lg-2 text-center">CETES</div>
                            <div class="col-lg-2 text-center">6 meses</div>
                            <div class="col-lg-2 text-center">8.35%</div>
                            <div class="col-lg-2 text-center">0</div>
                            <div class="col-lg-2 text-center">100</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body collapse" id="inmobiliario">
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/expansive.png" style="width: 170px;" alt="expansive"></div>
                            <div class="col-lg-2 text-center">Crowdfunding Inmobiliario</div>
                            <div class="col-lg-2 text-center">12 a 18 meses</div>
                            <div class="col-lg-2 text-center">13 a 13.5%</div>
                            <div class="col-lg-2 text-center">ND</div>
                            <div class="col-lg-2 text-center">5000</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/logo-briq.png" style="width: 170px;" alt="expansive"></div>
                            <div class="col-lg-2 text-center">Crowdfunding Inmobiliario</div>
                            <div class="col-lg-2 text-center">17 a 24 meses</div>
                            <div class="col-lg-2 text-center">14.5 a 17% por duracion de proyecto</div>
                            <div class="col-lg-2 text-center">ND</div>
                            <div class="col-lg-2 text-center">5000</div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-body">
                          <div class="row align-items-center flex-row">
                            <div class="col-lg-2"><img src="img/logos/inverspot-1.png" style="width: 170px;" alt="expansive"></div>
                            <div class="col-lg-2 text-center">Crowdfunding Inmobiliario</div>
                            <div class="col-lg-2 text-center">15 a 20 meses</div>
                            <div class="col-lg-2 text-center">22 a 31% por duracion de proyecto</div>
                            <div class="col-lg-2 text-center">ND</div>
                            <div class="col-lg-2 text-center">100000</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body collapse" id="banca">
                        <div class="card mb-2">
                          <div class="card-body">
                            <div class="row align-items-center flex-row">
                              <div class="col-lg-2"><img src="img/logos/hsbc.png" style="width: 160px;" alt="hsbc"></div>
                              <div class="col-lg-2 text-center">Banca Tradicional</div>
                              <div class="col-lg-2 text-center">6 Meses</div>
                              <div class="col-lg-2 text-center">6.76% anual</div>
                              <div class="col-lg-2 text-center">ND</div>
                              <div class="col-lg-2 text-center">1000</div>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-2">
                          <div class="card-body">
                            <div class="row align-items-center flex-row">
                              <div class="col-lg-2"><img src="img/logos/Banregio.png" style="width: 160px;" alt="hsbc"></div>
                              <div class="col-lg-2 text-center">Banca Tradicional</div>
                              <div class="col-lg-2 text-center">1 año</div>
                              <div class="col-lg-2 text-center">7.75%</div>
                              <div class="col-lg-2 text-center">ND</div>
                              <div class="col-lg-2 text-center">10000</div>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-2">
                          <div class="card-body">
                            <div class="row align-items-center flex-row">
                              <div class="col-lg-2"><img src="img/logos/compartamos.png" style="width: 160px;" alt="hsbc"></div>
                              <div class="col-lg-2 text-center">Banca Tradicional</div>
                              <div class="col-lg-2 text-center">1 año</div>
                              <div class="col-lg-2 text-center">8%</div>
                              <div class="col-lg-2 text-center">ND</div>
                              <div class="col-lg-2 text-center">25000</div>
                            </div>
                          </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/front.js') }}"></script>
      <script>
        $(document).ready(function(){
          $('.collapse').on('show.bs.collapse', function () {
            $('.collapse.show').each(function(){
              $(this).collapse('hide');
            });
          });
        });
      </script>
    </body>
</html>
