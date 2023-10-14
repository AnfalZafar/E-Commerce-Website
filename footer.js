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

