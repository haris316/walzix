function toggleTech(evt, blogName) {
    var i, tabcontent;
    tabcontent = document.getElementsByClassName("web_fourth_section_tech_stack_content_box");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    document.getElementById(blogName).style.display = "flex";
  }
  var open = false;
  if (!open) {
    document.getElementById("angular").style.display = "flex";
    open=true;
  }


  function toggleGenre(evt, blogName) {
    var i, tabcontent;
    tabcontent = document.getElementsByClassName("web_third_section_right_selected");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    document.getElementById(blogName).style.display = "block";
    console.log(blogName);
    var image = document.getElementById("genre-img");
    if(blogName=="food"){
        image.src = "./assets/web/food.jpg";
    }
    else if(blogName=="ecommerce"){
        image.src = "./assets/CrumblePaper.jpeg";
    }
    else if(blogName=="marketplace"){
        image.src = "./assets/1.jpg";
    }
    else if(blogName=="social"){
        image.src = "./assets/header.jpg";
    }
    else if(blogName=="educational"){
        image.src = "./assets/meta1.jpg";
    }
  }
  var open = false;
  if (!open) {
    document.getElementById("food").style.display = "block";
    open=true;
  }