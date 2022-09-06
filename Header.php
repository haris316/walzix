<?php
require("connection.inc.php");
?>

<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/23f1138391.js" crossorigin="anonymous"></script>

<body>
    <!-- <nav class="navbar">
        
        <img class="logo" src="assets/logo.png" />
      
        <ul class="nav-links">
           
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
           
            <div class="menu">
                <li class="services">
                    <a href="/">Services</a>

                    <ul class="dropdown">
                        <li><a href="/">IOS Development</a></li>
                        <li><a href="/">Android App Development</a></li>
                        <li><a href="/">Web App Development</a></li>
                        <li><a href="/">Game Development</a></li>
                        <li><a href="/">Blockchain Development</a></li>
                    </ul>
                </li>
                <li><a href="/">Solutions</a></li>
                <li><a href="/">Work</a></li>
                <li><a href="/">About</a></li>
                <li><a href="/">Contact</a></li>
                <button class="menu-button"><a href="/">Get A Quote</a></button>
            </div>
        </ul>
    </nav> -->
    <header class="header" id="myHeader">
        <div class="container">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="Home.php"><img /></a>
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center">
                    <div class="menu-overlay">
                    </div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main">
                            <li>
                                <a href="Portfolio.php">Portfolio</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a style="cursor:pointer">Services <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-main-item">
                                        <h3 class="main-title">Our Services</h3>
                                        <p class="main-desc">Leveraging cutting-edge technologies to build industry-leading digital products.</p>
                                    </div>
                                    <div class="list-item">
                                        <a href="AppDevelopment.php">
                                            <h4 class="title">Android Development</h4>
                                        </a>
                                        <p style="font-size:12px;">Smartphone Application, Android TV Application, & Android Tablet Application Development</p>
                                        <p class="submenu-spacer"></p>
                                        <a href="IOSDevelopment.php">
                                            <h4 class="title">IOS Development</h4>
                                        </a>
                                        <p style="font-size:12px;">Specialized IOS Appplication Consultaion & Development</p>
                                        <p class="submenu-spacer"></p>
                                        <a href="WebDevelopment.php">
                                            <h4 class="title">Web Development</h4>
                                        </a>
                                        <p style="font-size:12px;">Expert Web Design & Development using High-End Technologies and Stacks</p>
                                    </div>
                                    <div class="list-main-item">
                                        <h4 class="heading">Software Development Cycle</h4>
                                        <ul>
                                            <li>
                                                <h4 class="title">Creativity</h4></a>
                                                <p class="title-detail">which should be disruptive.</p>
                                            </li>
                                            <li>
                                                <h4 class="title">Responsiveness</h4></a>
                                                <p class="title-detail">which gives you an edge.</p>
                                            </li>
                                            <li>
                                                <h4 class="title">Execution</h4></a>
                                                <p class="title-detail">which can only be done right the first time.</p>
                                            </li>
                                            <li>
                                                <h4 class="title">Aesthetic</h4></a>
                                                <p class="title-detail">which gives you a little flair.</p>
                                            </li>
                                            <li>
                                                <h4 class="title">Time</h4></a>
                                                <p class="title-detail">which needs to be managed.</p>
                                            </li>
                                            <li>
                                                <h4 class="title">Expense</h4></a>
                                                <p class="title-detail">which should be minimized.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-img-item">
                                        <img src="assets/headerimg.jpg" style="height: 300px;" alt="img">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="Aboutus.php">About</a>
                            </li>
                            <li>
                                <a href="Insights.php">Insights</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menu end here -->
                <div class="header-item item-right">
                    <a href="Contactus.php"><i class="headerbutton">Get in Touch</i></a>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
<script src="Header.js"></script>
</head>

</html>