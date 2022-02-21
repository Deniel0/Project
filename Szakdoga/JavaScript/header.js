const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".navlinks");
const links = document.querySelectorAll(".navlinks li");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});