
let sidebar_main_ul_ul = document.getElementById("side_bar_head"),
sidebar_main_ul_others_content = document.getElementById("side_bar_content");

sidebar_main_ul_ul.addEventListener("click" , ()=>{
    sidebar_main_ul_others_content.classList.toggle("show_sidebar")
})


let bar = document.getElementById("bar"),
sidebar = document.getElementById("sidebar");

bar.addEventListener("click" , ()=> {
    sidebar.classList.toggle("show_sidebar")
})

let profile = document.getElementById("profile"),
profile_detail = document.getElementById("profile_detail");

profile.addEventListener("click" , ()=> {
    profile_detail.classList.toggle("see_profile");
})


let add_about = document.getElementById("add_about"),
about_form = document.getElementById("about_form");

add_about.addEventListener("click" , function() {
   about_form.classList.toggle("open_modal");
})