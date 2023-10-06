// for slider

let a = 0;
let time = 3000;


function change(c){
    a = a + c;
slider(a);

}

slider(a);

function slider(e){
    let slide = document.getElementsByClassName("slide");

if(e == slide.length){
    e = 0;
    a = 0;
}
if(e < 0){
    e = slide.length-1;
    a = slide.length-1;
}
for(z of slide){
    z.style.display = "none";
}

    console.log(slide[e]);
    slide[e].style.display = "block";
}

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


// responsive main navbar

let burger = document.getElementById("bar"),
main_nav = document.getElementById("main_nav");

burger.addEventListener("click" , ()=>{
    main_nav.classList.toggle("show_main_nav")
})