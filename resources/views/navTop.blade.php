<nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            data-widget="navbar-search"
            href="#"
            role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input
                  class="form-control form-control-navbar"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"/>
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button
                    class="btn btn-navbar"
                    type="button"
                    data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        
        <li class="nav-item dropdown header-profile">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown">
            <img
              src="../../dist/img/user.jpg"
              width="20"
              alt=""
              class="brand-image img-circle"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="app-profile.html" class="dropdown-item ai-icon">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span class="ml-2">Profile </span>
            </a>

            <a href="app-profile.html" class="dropdown-item ai-icon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <span class="ml-2">Setting </span>
            </a>

            <!-- <a href="page-login.html" class="dropdown-item ai-icon" data-target="#logoutModal"> 
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span class="ml-2">Logout </span>
            </a> -->

            <button type="button" class="btn" data-toggle="modal" data-target="#modal-primary"><i class="fa fa-sign-out" aria-hidden="true"></i>
                  Log out
                </button>
          </div>
        </li>
      </ul>
    </nav>
      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure do you want to log out?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-outline-light">Yes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
