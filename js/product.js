let account_text = document.getElementById("account"),
drop_down = document.getElementById("nav_drop");

account_text.addEventListener("click" , ()=> {
    drop_down.classList.toggle("account_show");
});

// for open search input modal

let search_result = document.getElementById("search_result"),
search_input = document.getElementById("search_input"),
search_croos = document.getElementById("search_croos");

search_input.addEventListener("input" , ()=>{
if(search_input.value.trim() != ""){
    search_result.classList.add("open_search");
}else{
    search_result.classList.remove("open_search");
}
});
search_croos.addEventListener("click" , ()=>{
    search_result.classList.remove("open_search");
});


 // my cart

 let cart_click = document.getElementById("cart_click"),
 cart = document.getElementById("cart");
 
 cart_click.addEventListener("click" , (e)=> {
   e.preventDefault();
   cart.classList.toggle("show_cart");
 });

// responsive main navbar

let burger = document.getElementById("bar"),
main_nav = document.getElementById("main_nav");

burger.addEventListener("click" , ()=>{
    main_nav.classList.toggle("show_main_nav")
})

// scroll top

let scroll_btn = document.getElementById("scroll_top");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    scroll_btn.style.display = "block";
  } else {
    scroll_btn.style.display = "none";
  }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.body.style.transition = "2s";
    document.documentElement.scrollTop = 0;
    document.documentElement.style.transition = "2s";

  }
