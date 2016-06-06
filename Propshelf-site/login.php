<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 3 to make it mobie first, zooming, responsive-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PropShelf : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/PropShelf-logo.jpg" />
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/red-theme.css" rel="stylesheet">

    <link href="preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <!-- Raleway for Title -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <!-- Pacifico for 404 page   -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- Main Style -->
    <link href="assets/css/login.css" rel="stylesheet">
</head>

<body>

<!--
<header id="header">
    <div class="header-inner">
       Header image
      <img src="assets/images/Real-Estate-Investment-Dropping.jpg" alt="img">
    </div>
    </header>
-->


<!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
           <a class="navbar-brand logo" href="index.html"><img src="assets/images/Propshelf-logo-hd.jpg" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="index.html">ABOUT</a></li>
            <li><a href="index.html">CLIENTS</a></li>
            <li><a href="index.html">TEAM</a></li>
            <li><a href="index.html">SERVICE</a></li>
<!--
            <li><a href="#portfolio">PORTFOLIO</a></li>
            <li><a href="#pricing-table">PRICE </a></li>
            <li><a href="#from-blog">BLOG </a></li>
-->
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
       <div class="search-area">
          <form action="">
            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>
      </div>
    </nav>
  </section>
  <!-- End menu section -->



<br>
<div class="login">
         <form role = "form"
            action = "validate_login.php" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <div><span>ADMIN</span></div>
            <input type = "text"
               name = "users_email"  id="users_email" placeholder = "username"
               required autofocus><br>
            <input type = "password"
               name = "users_pass" id="users_pass" placeholder = "password" required>
               <br><br>
            <span>Caution : For Admin Only</span><br>
            <button  type = "submit"
               name = "login">Login</button>
                <br>
            <span>Forgot Your Password? <a href="#">click here</a></span>
         </form>
</div>

  <div class="login">
         <form role = "form"
            action = "validate_login.php" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <div><span>User1</span></div>
            <input type = "text"
               name = "users_email"  id="users_email" placeholder = "username"
               required autofocus><br>
            <input type = "password"
               name = "users_pass" id="users_pass" placeholder = "password" required>
               <br>
               <select>
        <option value="Government">Government</option>
        <option value="Match Making">Match Making</option>
    </select>
    <br>
            <button type = "submit"
               name = "login">Login</button>
                <br>
                <span>Forgot Your Password? <a href="#">click here</a></span>
         </form>
</div>

   <div class="login">
         <form role = "form"
            action = "validate_login.php" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <div><span>User2</span></div>
            <input type = "text"
               name = "users_email"  id="users_email" placeholder = "username"
               required autofocus><br>
            <input type = "password"
               name = "users_pass" id="users_pass" placeholder = "password" required>
               <br>
    <input type="checkbox" value="Goverment"><span>:Government</span>
    <input type="checkbox" value="Match Making"><span>:Match-Making</span>
    <br>
            <button type = "submit"
               name = "login">Login</button>
                <br>
    <span>Forgot Your Password? <a href="#">click here</a></span>
         </form>
</div>

   <div class="login">
         <form role = "form"
            action = "validate_login.php" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <div><span>User3</span></div>
            <input type = "text"
               name = "users_email"  id="users_email" placeholder = "username"
               required autofocus><br>
            <input type = "password"
               name = "users_pass" id="users_pass" placeholder = "password" required><br>
               <input type="password" placeholder="city" name="city">
    <br>
            <button type = "submit"
               name = "login">Login</button>
                <br>
    <span>Forgot Your Password? <a href="#">click here</a></span>
         </form>
    </div>
</body>

</html>
