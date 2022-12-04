const menu = document.querySelector(".menu-cel");
const navLinks = document.querySelector(".lista-paginas");
const links = document.querySelectorAll(".lista-paginas li");

menu.addEventListener('click', ()=>{
   //Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Animation
    hamburger.classList.toggle("toggle");
});