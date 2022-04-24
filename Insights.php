<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="Insights.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <title>Insights | Walzix Digitals</title>
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>


<body>
    <?php require('Header.php'); ?>
    <div class="first_section">
    </div>

    <div class="second_section">
        <div class="second_section_buttons">
            <input type="radio" name="select" id="option-1" checked>
            <input type="radio" name="select" id="option-2">
            <input type="radio" name="select" id="option-3">
            <input type="radio" name="select" id="option-4">
            <input type="radio" name="select" id="option-5">
            <input type="radio" name="select" id="option-6">
            <label for="option-1" class="second_section_buttons_item option-1" onclick="toggleBlog(event, 'blog_section1')">
                <div class="second_section_buttons_item_text">Lorem Ipsum</div>
            </label>
            <label for="option-2" class="second_section_buttons_item option-2" onclick="toggleBlog(event, 'blog_section2')">
                <div class="second_section_buttons_item_text">Lorem Ipsum</div>
            </label>
            <label for="option-3" class="second_section_buttons_item option-3" onclick="toggleBlog(event, 'blog_section3')">
                <div class="second_section_buttons_item_text">Lorem Ipsum</div>
            </label>
            <label for="option-4" class="second_section_buttons_item option-4" onclick="toggleBlog(event, 'blog_section4')">
                <div class="second_section_buttons_item_text">Lorem Ipsum</div>
            </label>
            <label for="option-5" class="second_section_buttons_item option-5" onclick="toggleBlog(event, 'blog_section5')">
                <div class="second_section_buttons_item_text">Lorem Ipsum</div>
            </label>
            <label for="option-6" class="second_section_buttons_item option-6" onclick="toggleBlog(event, 'blog_section6')">
                <div class="second_section_buttons_item_text">Lorem Ipsum</div>
            </label>
        </div>
        <div class="second_section_blogs">
            <div class="second_section_blogs_list">
                <div class="second_section_blogs_list_items" id="blog_section1">
                    <div class="blog_head">Our First Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our First Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our First Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                </div>
                <div class="second_section_blogs_list_items" id="blog_section2">
                    <div class="blog_head">Our Second Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Second Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Second Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                </div>
                <div class="second_section_blogs_list_items" id="blog_section3">
                    <div class="blog_head">Our Third Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Third Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Third Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                </div>
                <div class="second_section_blogs_list_items" id="blog_section4">
                    <div class="blog_head">Our Fourth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Fourth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Fourth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                </div>
                <div class="second_section_blogs_list_items" id="blog_section5">
                    <div class="blog_head">Our Fifth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Fifth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Fifth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                </div>
                <div class="second_section_blogs_list_items" id="blog_section6">
                    <div class="blog_head">Our Sixth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Sixth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                    <div class="blog_head">Our Sixth Blog</div>
                    <div class="blog_profile">
                        <img class="blog_profile_picture" src="./assets/insights/profile.png" />
                        <div class="blog_profile_details">
                            <div class="blog_profile_details_name">John Doe</div>
                            <div class="blog_profile_details_date">Jan 11 2011, Blogs</div>
                        </div>
                    </div>
                    <div class="blog_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blog_picture_text">
                            <div class="blog_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blog_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blog_text">
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                        This is a blog text.This is a blog text.
                    </div>
                    <div class="blog_readmore">
                        <div class="blog_readmore_blue">
                        </div>
                        <div class="blog_readmore_text">
                            Continue Reading
                        </div>
                    </div>
                </div>
            </div>
            <div class="second_section_blogs_popular">
                <div class="blogs_popular_head">Most Popular</div>
                <div class="blogs_popular_item">
                    <div class="blogs_popular_item_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blogs_popular_item_picture_text">
                            <div class="blogs_popular_item_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blogs_popular_item_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blogs_popular_item_text">
                    <div class="blogs_popular_item_text_small">
                        This is a text. This is a text. 
                        This is a text. This is a text.
                        This is a text. This is a text. 
                        This is a text. This is a text.
                        This is a text. This is a text. 
                        This is a text. This is a text.
                    </div>    
                    <div class="blogs_popular_item_text_big">Lorem Ipsum</div>    
                    </div>
                </div>
                <div class="blogs_popular_item">
                    <div class="blogs_popular_item_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blogs_popular_item_picture_text">
                            <div class="blogs_popular_item_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blogs_popular_item_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blogs_popular_item_text">
                    <div class="blogs_popular_item_text_small">
                        This is a text. This is a text. 
                        This is a text. This is a text.
                        This is a text. This is a text. 
                        This is a text. This is a text.
                        This is a text. This is a text. 
                        This is a text. This is a text.
                    </div>    
                    <div class="blogs_popular_item_text_big">Lorem Ipsum</div>    
                    </div>
                </div>
                <div class="blogs_popular_item">
                    <div class="blogs_popular_item_picture" style="background-image: url(./assets/insights/teamwork.jpeg);">
                        <div class="blogs_popular_item_picture_text">
                            <div class="blogs_popular_item_picture_text_head">
                                Blog Heading
                            </div>
                            <div class="blogs_popular_item_picture_text_desc">
                                Blog Text
                            </div>
                        </div>
                    </div>
                    <div class="blogs_popular_item_text">
                    <div class="blogs_popular_item_text_small">
                        This is a text. This is a text. 
                        This is a text. This is a text.
                        This is a text. This is a text. 
                        This is a text. This is a text.
                        This is a text. This is a text. 
                        This is a text. This is a text.
                    </div>    
                    <div class="blogs_popular_item_text_big">Lorem Ipsum</div>    
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cta">
        <div class="cta_item">
            <!-- <div class="cta_item_head">Get In Touch</div> -->
            <div>
                <h2 class="cta_item_head">Want your idea turned into a reality?<br>Reach out to us!</h2>
            </div>
            <div class="cta_item_text">
                Bring your idea to life.
                Have a concept that you need to propel to success?
            </div>
        </div>
        <div class="cta_input_item">
            <div class="cta_item_text">
                Let’s discuss and streamline it, from ideation to fruition.
            </div>
            <div class="cta_input_boxes">
                <div class="cta_input_item_box">
                    <input class="cta_item_input" placeholder="Enter your Email" />
                </div>
                <div class="cta_input_item_box">
                    <input class="cta_item_input" placeholder="Enter your Email" />
                </div>
            </div>
            <div class="cta_input_boxes">
                <div class="cta_input_item_box">
                    <input class="cta_item_input" placeholder="Enter your Email" />
                </div>
                <div class="cta_input_item_box">
                    <input class="cta_item_input" placeholder="Enter your Email" />
                </div>
            </div>
            <div class="cta_button">
                Submit
            </div>
        </div>
    </div>
    <?php require('Footer.php'); ?>


</body>
<script src="blogs.js" defer></script>

</html>