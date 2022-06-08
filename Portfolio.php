<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="Portfolio.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <title>Portfolio | Walzix Digitals</title>
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>

<body>
    <?php
    require('Header.php');
    ?>
    <div class="first_section">
        <div class="first_section_heading_part">
            <div class="first_section_heading">
                Our Portfolio
            </div>
            <div class="first_section_tagline">Turning concepts to reality is our bread and butter. And our clients love it.</div>
        </div>
    </div>

    <div class="second_section">
        <div class="second_section_element">
            <img src="assets/2.png" class="second_section_element_image" />
            <div class="second_section_element_items">
                <img class="case-study-logo" src="assets/skinslogo1.jpg" />
                <div class="second_section_element_items_head">SKINS APPAREL</div>
                <div class="second_section_element_items_text">
                    A streamlined platform created using agile methodologies in order to provide a one stop solution for potential buyers. Users can browse through a collection of luxury apparel, place orders, and have them delivered, all through a single platform.
                </div>
                <div class="second_section_element_items_button">View Case Study</div>
            </div>
        </div>
        <div class="second_section_element">
            <div class="second_section_element_items">
                <img src="assets/tcgfish.png" class="case-study-logo" />
                <div class="second_section_element_items_head">TCG FISH</div>
                <div class="second_section_element_items_text">
                    A card rating database designed for collectors and card enthusiasts. View real time stats, browse through the latest card statistics, and have the complete database information of millions of cards, in the palm of your hand.
                </div>
                <div class="second_section_element_items_button">View Case Study</div>
            </div>
            <img src="assets/1.png" class="second_section_element_image" />
        </div>
        <div class="second_section_element">
            <img src="assets/3.png" class="second_section_element_image" />
            <div class="second_section_element_items">
                <img src="assets/markit.png" class="case-study-logo" />
                <div class="second_section_element_items_head">MARK-IT</div>
                <div class="second_section_element_items_text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit
                </div>
                <div class="second_section_element_items_button">View Case Study</div>
            </div>
        </div>
    </div>

</body>
<?php require('Footer.php'); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="custom.js"></script>
</html>