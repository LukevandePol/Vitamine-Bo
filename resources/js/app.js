import './bootstrap';
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

sidebar.addEventListener("mouseenter", () => {
    sidebar.classList.add("open");
    sidebar.style.width = "200px";
    menuBtnChange(); // calling the function (optional)
});

sidebar.addEventListener("mouseleave", () => {
    sidebar.classList.remove("open");
    sidebar.style.width = "78px";
    menuBtnChange(); // calling the function (optional)
});



// following are the code to change sidebar button(optional)
function menuBtnChange() {
    if(sidebar.classList.contains("open")){
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
    }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
    }
}

