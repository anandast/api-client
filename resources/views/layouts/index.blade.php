<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Dashboard API Kabinet Indonesia Maju</title>

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">API Kabinet Indonesia Maju</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Logout</a>
    </div>
  </div>
</header>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard') ?'active':''}}" href="/dashboard">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
            
            </ul>
      
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Administrator</span>
            </h6>
            
            <ul class="nav flex-column mb-2 ">
              <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/minister*') ?'active':''}}" href="/dashboard/minister">
                  <span data-feather="database"></span>
                  Master Minister
                </a>
              
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/categories*') ?'active':''}}" href="/dashboard/categories">
                  <span data-feather="database"></span>
                  Master Category
                </a>
              
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/ministry*') ?'active':''}}" href="/dashboard/ministry">
                  <span data-feather="database"></span>
                  Master Ministry
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/status*') ?'active':''}}" href="/dashboard/status">
                  <span data-feather="database"></span>
                 Master Status            </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/party*') ?'active':''}}" href="/dashboard/party">
                  <span data-feather="database"></span>
                  Master Party            </a>
              </li>
            </ul>
          </div>
        </nav>
      
        <main class="ms-sm-auto col-lg-10">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5 class="h5">Hello, Stanley </h5>
          </div>
          
          @yield('table')
          @yield('minister')
        </main>
      </div>
   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>
</body>
</html>



