let menuBtn = document.querySelector(".menu-toggle");
let menuList = document.querySelector (".container-lista");
let linkedinButton = document.querySelector(".linkedin-btn");
let alertClick = document.querySelector(".alert-click");
linkedinButton.addEventListener("click", ()=>{
    alertClick.classList.toggle("alert-click-active");
    alertClick.classList.toggle("alert-click");
    setTimeout(function() {
        alertClick.classList.toggle("alert-click-active");
        alertClick.classList.toggle("alert-click");
    }, 5000);
})

menuBtn.addEventListener ("click", () => {
    menuList.classList.toggle("active");
})

var slideLeft = {

};
ScrollReveal().reveal('.whois, .whois-desc, .whois-line',
    {
        delay: '100',
        easing: "cubic-bezier(.6,-0.01,0,.98)",
    distance: '150%',
    duration: '1200',
    origin: 'left',
    });

ScrollReveal().reveal('.linkedin-btn',
    {
        delay: '100',
        easing: "cubic-bezier(.6,.09,.1,.97)",
        distance: '250%',
        duration: '3000',
        origin: 'left',
    });

ScrollReveal().reveal('.projects',
    {
        delay: '100',
        easing: "cubic-bezier(.6,.09,.1,.97)",
        distance: '250%',
        duration: '3200',
        origin: 'bottom',
    });

ScrollReveal().reveal('.container-right',
    {
        delay: '1600',
        duration: '2000',
        scale: '0.3'
    });

