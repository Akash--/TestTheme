<!DOCTYPE html>
<html>
  <head>
    <title>Learn website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Learn website" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
      <!-font-Awesome-->
      <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
      <!----font-Awesome-->
      <?php wp_head(); ?>
    </head>

    <body>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Learn test</a>
          </div>
          <!--/.navbar-header-->
          <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="login.html"><i class="fa fa-user"></i><span>Login</span></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>Courses</span></a>
                <ul class="dropdown-menu">
                  <li><a href="courses.html">Courses Categories</a></li>
                  <li><a href="courses.html">Courses list</a></li>
                  <li><a href="course_detail.html">Courses detail</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i><span>Events</span></a>
                <ul class="dropdown-menu">
                  <li><a href="events.html">Event1</a></li>
                  <li><a href="events.html">Event2</a></li>
                  <li><a href="events.html">Event3</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>English</span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><span><i class="flags us"></i><span>English</span></span></a></li>
                  <li><a href="#"><span><i class="flags newzland"></i><span>Newzland</span></span></a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Search</span></a>
                <ul class="dropdown-menu search-form">
                  <form>
                    <input type="text" class="search-text" name="s" placeholder="Search...">
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                  </form>
                </ul>
              </li>
            </ul>
          </div>
          <div class="clearfix"> </div>
        </div>
        <!--/.navbar-collapse-->
      </nav>