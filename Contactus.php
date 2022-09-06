<?php 
require("connection.inc.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <title>Contact Us | Walzix Digitals</title>
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <script src="jquery-3.6.1.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="rowheader v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="Home.php"><img src="assets/logo.png" /></a>
                    </div>
                </div>
                <div class="header-item item-right">
                    <a class ="headerlink" href="mailto:contact@walzixdigitals.com"><i class="headerlink">contact@walzixdigitals.com</i></a>
                    <!-- mobile menu trigger -->
                    <a class="headerlink" href="tel:+923352835019"><i class="headerlink">+923352835019</i></a>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column" style=" background-image: linear-gradient(to right, #005665 , #00788d);">
            <div class="left">
                <h2 style="text-align: center;margin-bottom: 5px !important; font-weight:700">KARACHI</h2>
                <p style="margin-top: 0px;font-weight:500">A8, Bait-ul-Furqan Building, Block
                    13-C, Gulshan-e-Iqbal, Karachi.
                </p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <img style="align-items: center;" src="assets/dubai_location-copy.png">
            <!-- <h2 style="text-align: center;">MEL NYC DXB</h2> -->


        </div>
        <div class="column" style="background-color:#FFF;">
            <div class="contact-fields">
                <h1 style="color: black;">Let's Start a Project Together</h1>
                <div class="form">
                    <form action="#" method="$_POST">
                        <div class="col-75">
                            <input type="text" id="fname" name="fname" placeholder="Full Name">

                            <input type="text" id="email" name="email" placeholder="E-mail">

                            <input type="text" id="number" name="number" placeholder="+92 3132166047">

                            <input type="text" id="company" name="company" placeholder="Company">

                            <select id="project" name="project">
                                <option value="None">Select Project Type</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Android Application Development">Android Application Development</option>
                                <option value="IOS Application Development">IOS Application Development</option>
                                <option value="NFT Project Management">NFT Project Management</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select>
                            <textarea id="subject" name="subject" placeholder="Describe your project needs." style="height:100px;"></textarea>
                            <input type="submit" onclick="send_message();document.location.href='Home.php'" value="Get in Touch">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>