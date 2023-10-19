let sidebar_main_ul_ul = document.getElementById("side_bar_head"),
sidebar_main_ul_others_content = document.getElementById("side_bar_content");

sidebar_main_ul_ul.addEventListener("click" , ()=>{
    sidebar_main_ul_others_content.classList.toggle("show_sidebar")
})