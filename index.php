<!DOCTYPE html>

<html>
<head>
  <title>Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous" type="text/javascript">
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous" type="text/javascript">
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" type="text/javascript">
</script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
body {
        overflow-x: hidden;
        padding-top: 50px;
  }

  .navbar {
      background: #011f4b;
  }

  .navbar-brand {
      line-height: 30px;
      padding: 10px 15px;
  }

  #menu-toggle {
      margin: 0 15px 0 0;
      color: #fff;
  }

  #menu-toggle:hover {
      color: #fff;
  }

  #login-toggle {
        float: right;
        margin-right: 15px;
    }

  .jumbotron {
      background-image: url('assets/images/turin.jpg');
      background-attachment: fixed;
      background-repeat: no-repeat;
      color: #fff;
      min-height: 150px;
      position: relative;
  }

  .jumbotron:before {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5));
  }

  .jumbotron h2 {
      font-family: 'Roboto', sans-serif;
      position: absolute;
      bottom: 0;
  }

  /* Toggle Styles */

  /*#wrapper {
  }*/

  /*#wrapper.toggled #page-content-wrapper {
    padding-left: 250px;
  }*/

  #sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #f8f8f8;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }

  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
    border-right: 1px solid #d3d3d3;
  }

  #page-content-wrapper {
    width: 100%;
    position: absolute;
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }

  /*#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
  }*/

  /* Sidebar Styles */

  .sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 10px 0 0;
    list-style: none;
  }

  .sidebar-nav li {
    /*text-indent: 20px;*/
    line-height: 40px;
  }

  .sidebar-nav li a {
    display: block;
    padding: 0 15px;
    text-decoration: none;
    color: #333;
  }

  .sidebar-nav li a:hover {
    text-decoration: none;
    color: #005b96;
    /*background: #011f4b;*/
  }

  .sidebar-nav li a:active,
  .sidebar-nav li a:focus {
    text-decoration: none;
  }

  .sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
  }

  .sidebar-nav > .sidebar-brand a {
    color: #999999;
  }

  .sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
  }

  @media(min-width:768px) {
    
    #login-toggle {
        display: none;
    }
    
    #wrapper #page-content-wrapper {
        padding-left: 0;
    }

    /*#wrapper.toggled #page-content-wrapper {
        padding-left: 250px;
    }*/

    #sidebar-wrapper {
        width: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    /*#page-content-wrapper {
        padding: 20px;
        position: relative;
    }*/

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
  }
  
  
	.hover-pointer:hover {
		cursor: pointer;
	}
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="btn btn-primary collapsed navbar-btn navbar-right" id="login-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Log In</button>

        <div class="navbar-brand">
          <a href="#" id="menu-toggle"><i class="fa fa-bars"></i></a><a href="#"><img src="assets/images/logo.png" height="30"></a>
        </div>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Username">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Log In</button>
        </form>
      </div>
    </div>
  </nav>

  <div id="wrapper">
    <!-- Sidebar -->

    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li><a href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a></li>
        <li><a href="#"><i class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i>&nbsp;Academics</a></li>
        <li><a href="#"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>&nbsp;Events</a></li>
        <li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;Settings</a></li>
      </ul>
    </div><!--End sidebar-->
    <!-- Page Content -->

    <div id="page-content-wrapper">
      <div class="jumbotron">
        <div class="container">
          <h2>MyDaemen</h2>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="w3-col">
				<div class="col-sm-12 col-md-6 col-lg-3" ondragover="event.preventDefault()">
					<div class="w3-hover-shadow w3-margin w3-padding w3-blue hover-pointer" draggable="true" >
						hey
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-3" ondragover="event.preventDefault()">
					<div class="w3-hover-shadow w3-margin w3-padding w3-blue hover-pointer" draggable="true">
						hey
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-3" ondragover="event.preventDefault()">
					<div class="w3-hover-shadow w3-margin w3-padding w3-blue hover-pointer" draggable="true">
						hey
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-3" ondragover="event.preventDefault()">
					<!--<div class="w3-hover-shadow w3-margin w3-padding w3-blue hover-pointer" draggable="true">
						hey
					</div>-->
				</div>
				
		  </div>
        </div>
      </div>
    </div>
  </div><!-- End content -->
  <script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	
	function allowDrop(ev) {
		ev.preventDefault();
	}
  </script>
</body>
</html>
