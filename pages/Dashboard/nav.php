  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Startmin</a>
      </div>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>

      <ul class="nav navbar-nav navbar-left navbar-top-links">
          <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
      </ul>

      <ul class="nav navbar-right navbar-top-links">

          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-user fa-fw"></i>
                  <?php 
                        if(isset($_SESSION['login'])){
                            echo $_SESSION['login']->name;
                        }
                    ?> 
    <b class="caret"></b>
              </a>
              <ul class="dropdown-menu dropdown-user">
                  <li><a href="?action=profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                  </li>
          </li>
          <li class="divider"></li>
          <li><a href="?action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
      </ul>
      </li>
      </ul>
      <!-- /.navbar-top-links -->
      <?php include_once('../pages/Dashboard/sidebar.php') ?>
  </nav>