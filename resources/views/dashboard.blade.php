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
            <a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">JollyWally Dashboard</a>
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
                <li class="sidebar-list-item"><a href="index.html" class="sidebar-link text-muted"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
                <li class="sidebar-list-item"><a href="charts.html" class="sidebar-link text-muted active"><i class="o-sales-up-1 mr-3 text-gray"></i><span>Charts</span></a></li>
                <li class="sidebar-list-item"><a href="tables.html" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Tables</span></a></li>
                <li class="sidebar-list-item"><a href="forms.html" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Forms</span></a></li>
            <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Pages</span></a>
              <div id="pages" class="collapse">
                <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                  <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page one</a></li>
                  <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page two</a></li>
                  <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page three</a></li>
                  <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted pl-lg-5">Page four</a></li>
                </ul>
              </div>
            </li>
                <li class="sidebar-list-item"><a href="login.html" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Login</span></a></li>
          </ul>
          <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">EXTRAS</div>
          <ul class="sidebar-menu list-unstyled">
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-database-1 mr-3 text-gray"></i><span>Demo</span></a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-imac-screen-1 mr-3 text-gray"></i><span>Demo</span></a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Demo</span></a></li>
                <li class="sidebar-list-item"><a href="#" class="sidebar-link text-muted"><i class="o-wireframe-1 mr-3 text-gray"></i><span>Demo</span></a></li>
          </ul>
        </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/front.js') }}"></script>
    </body>
</html>
