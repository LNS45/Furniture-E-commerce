

//Funcionamiento de seleccion de link en Nav
let img_links = document.querySelectorAll(".main-nav a");

img_links.forEach((img_link)=>{
    img_link.addEventListener("click",()=>{
        img_links.forEach((img_link_)=>{
            img_link_.classList.remove("link_active")
        })
        img_link.classList.add("link_active");
    })
})