let menuBtn = document.querySelector(".menu-toggle");
let menuList = document.querySelector (".container-lista");

menuBtn.addEventListener ("click", () => {
    menuList.classList.toggle("active");
})

