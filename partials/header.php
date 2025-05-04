<?php
require_once('_inc/autoload.php');
session_start();
$db = new Database();
$auth = new Authenticate($db);

echo '</pre>';
print_r($_SESSION);
echo '</pre>';
?>
<!-- 
Motor Template
http://www.templatemo.com/tm-463-motor
-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/templatemo-style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
  <section class="templatemo-top-section">
    <div class="templatemo-header">
      <img class="templatemo-header-img" src="img/header.png" alt="Header">
      <h1 class="templatemo-site-name">Motor</h1>
      <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
      </div>
      <div class="templatemo-nav-container">
        <nav class="templatemo-nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
          <?php
          if ($auth->isLoggedIn()): ?>
            <li><a href="logout.php">Odhlásiť sa</a></li>
          <?php endif; ?>
          <?php if ($auth->isLoggedIn() && $auth->getUserRole() == 0): ?>
            <li><a href="admin.php">Admin</a></li>
          <?php endif; ?>
          <?php if (!$auth->isLoggedIn()): ?>
            <li><a href="login.php">Login</a></li>
          <?php endif; ?>
          <?php if (!$auth->isLoggedIn()): ?>
            <li><a href="register.php">Register</a></li>
          <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>