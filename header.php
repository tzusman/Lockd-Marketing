<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fortress.io: Enterprise Security, done.</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/prettify.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">

          <h3><a href="index.php">Fortress.io</a></h3>

          <ul>
            <? if ( preg_match('#demo_#',$_SERVER['REQUEST_URI']) ): ?>
              <li class="<?= preg_match('#dashboard#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="demo_dashboard.php">Dashboard</a></li>
              <li class="<?= preg_match('#firewall#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="demo_firewall.php">Firewall</a></li>
              <li class="<?= preg_match('#program_manager#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="demo_program_manager.php">Program Manager</a></li>
              <li class="<?= preg_match('#user_activity#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="demo_user_activity.php">User Activity</a></li>
            <? else: ?>
              <li class="<?= $_SERVER['REQUEST_URI'] == '/' || preg_match('#index#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="index.php">Introduction</a></li>
              <li class="<?= preg_match('#firewall#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="firewall.php">Firewall++</a></li>
              <li class="<?= preg_match('#program_manager#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="program_manager.php">Program Manager</a></li>
              <li class="<?= preg_match('#user_activity#',$_SERVER['REQUEST_URI']) ? 'active' : ''; ?>"><a href="user_activity.php">User Activity</a></li>
            <? endif; ?>
          </ul>

          <? if ( preg_match('#demo_#',$_SERVER['REQUEST_URI']) ): ?>
            <ul class="nav secondary-nav">
              <li class="menu">
                <a id="btnDropdown" href="#" class="menu">John Kernel</a>
                <ul class="menu-dropdown">
                  <li><a href="#">Account Settings</a></li>
                  <li><a href="#">Billing Information</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          <? else: ?>
            <form action="" style="float: right;">
              <input type="text" placeholder="Email" style="width:100px;">
              <input type="password" placeholder="Password" style="width:100px;">
            </form>
          <? endif; ?>

        </div>
      </div>
    </div>

    <div class="container">

