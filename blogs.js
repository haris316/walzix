function toggleBlog(evt, blogName) {
  var i, tabcontent;
  tabcontent = document.getElementsByClassName("second_section_blogs_list_items");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(blogName).style.display = "block";
}
var open = false;
if (!open) {
  document.getElementById("blog_section1").style.display = "block";
  open=true;
}