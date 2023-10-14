// for slider

// let a = 0;
// let time = 3000;


// function change(c){
//     a = a + c;
// slider(a);

// }

// slider(a);

// function slider(e){
//     let slide = document.getElementsByClassName("slide");

// if(e == slide.length){
//     e = 0;
//     a = 0;
// }
// if(e < 0){
//     e = slide.length-1;
//     a = slide.length-1;
// }
// for(z of slide){
//     z.style.display = "none";
// }

//     console.log(slide[e]);
//     slide[e].style.display = "block";
// }

// for drop down

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


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

 
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


  // responsive footer

  
  let footer2 = document.getElementById("footer_2"),
footer3 = document.getElementById("footer_3"),
footer4 = document.getElementById("footer_4"),
ul_2 = document.getElementById("ul_2"),
ul_3 = document.getElementById("ul_3"),
ul_4 = document.getElementById("ul_4");

footer2.addEventListener("click" , ()=>{
    ul_2.classList.toggle('ul2_open');
    ul_3.classList.remove("ul3_open");
    ul_4.classList.remove("ul4_open");

})

footer3.addEventListener("click" , ()=>{
    ul_3.classList.toggle("ul3_open");
    ul_2.classList.remove('ul2_open');
    ul_4.classList.remove("ul4_open");

})

footer4.addEventListener("click" , ()=>{
    ul_4.classList.toggle("ul4_open");
    ul_3.classList.remove("ul3_open");
    ul_2.classList.remove('ul2_open');

})

