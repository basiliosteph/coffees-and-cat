<div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Welcome to the Admin Page!</p>
                <a href="" target="_blank"></a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href=""><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/"><img src="admin/assets/images/cc-logo.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="/"><img src="admin/assets/images/cc-logo.png" alt="logo" /></a>
        </div>
        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/users') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/foods') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Foods</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/viewowners') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Owners</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/viewdetails') }}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('/orders') }}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>

          <!-- partial -->
          </div>