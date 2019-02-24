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
            <li class="sidebar-list-item"><a href="/dashboard" class="sidebar-link text-muted active"><i class="o-statistic-1 mr-3 text-gray"></i><span>Dashboard</span></a></li>
            <li class="sidebar-list-item"><a href="/opciones-inversion" class="sidebar-link text-muted"><i class="o-sales-up-1 mr-3 text-gray"></i><span>Opciones de inversión</span></a></li>
            <li class="sidebar-list-item"><a href="/movimientos" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Movimientos</span></a></li>
            <li class="sidebar-list-item"><a href="/transferencias" class="sidebar-link text-muted"><i class="o-stack-1 mr-3 text-gray"></i><span>Transferencias</span></a></li>
          </ul>
        </div>
        <div class="page-holder w-100 d-flex flex-wrap">
          <div class="container-fluid px-xl-5">
            <section class="py-4">
                <div class="row">
                  <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                    <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                      <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-violet"></div>
                        <div class="text">
                          <h6 class="mb-0">Capital disponible</h6><span class="text-gray">$44,500.00</span>
                        </div>
                      </div>
                      <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                    <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                      <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-green"></div>
                        <div class="text">
                          <h6 class="mb-0">Capital invertido</h6><span class="text-gray">$20,000.00</span>
                        </div>
                      </div>
                      <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                    <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                      <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-blue"></div>
                        <div class="text">
                          <h6 class="mb-0">Capital pendiente</h6><span class="text-gray">$10,364.46</span>
                        </div>
                      </div>
                      <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                    <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                      <div class="flex-grow-1 d-flex align-items-center">
                        <div class="dot mr-3 bg-red"></div>
                        <div class="text">
                          <h6 class="mb-0">En mora</h6><span class="text-gray">$633.00</span>
                        </div>
                      </div>
                      <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                    </div>
                  </div>
                </div>
            </section>
            <section class="py-4">
              <div class="row mb-4">
                  <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="card">
                      <div class="card-header">
                        <h2 class="h6 text-uppercase mb-0">progreso de estado financiero vs mínimo optimo</h2>
                      </div>
                      <div class="card-body">
                        <div class="chart-holder mt-5 mb-5">
                          <iframe width="550" height="150" src="https://datastudio.google.com/embed/reporting/1zOpH4QqQW46zQxyKoO37qG2VL8lbd7Mj/page/aV5i" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                    <section class="py-4">
                      <div class="row text-dark">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                          <div class="card rounded credit-card bg-hover-gradient-green">
                            <div class="content d-flex flex-column justify-content-between p-4">
                              <h1 class="mb-5">
                                <img src="{{ asset('img/logos/compartamos.png') }}" alt="" style="width: 30%;">
                              </h1>
                              <div class="d-flex justify-content-between align-items-end pt-3">
                                <div class="text-uppercase">
                                  <div class="font-weight-bold d-block">Número de tarjeta</div><small class="text-gray">0102 1390 11</small>
                                </div>
                                <h4 class="mb-0">$568.00</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="col-lg-5">
                    <div class="card mb-4">
                      <div class="card-header">
                        <h2 class="h6 text-uppercase mb-0">composición general de la cartera</h2>
                      </div>
                      <div class="card-body">
                        <div class="chart-holder">
                          <iframe width="350" height="200" src="https://datastudio.google.com/embed/reporting/10YO7qsxNIlBRuD0RYjWzq4SsKXDE9QmK/page/jG6i" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3">
                      <div class="card-header">
                        <h2 class="h6 text-uppercase mb-0">estado del capital invertido</h2>
                      </div>
                      <div class="card-body">
                        <div class="chart-holder">
                          <iframe width="350" height="200" src="https://datastudio.google.com/embed/reporting/10YO7qsxNIlBRuD0RYjWzq4SsKXDE9QmK/page/LH6i" frameborder="0" style="border:0" allowfullscreen></iframe>
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
    </body>
</html>
