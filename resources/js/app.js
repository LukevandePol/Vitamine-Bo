import './bootstrap';

// Sidebar
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
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
    }
}

// Carousel
// const carousel = document.querySelector(".carousel"),
//     firstImg = carousel.querySelectorAll(".carousel-img")[0],
//     arrowIcons = document.querySelectorAll(".wrapper i");
//
// let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
//
//
// const showHideIcons = () => {
//     // showing and hiding prev/next icon according to carousel scroll left value
//     let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
//     arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
//     arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
// }

// arrowIcons.forEach(icon => {
//     icon.addEventListener("click", () => {
//         let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
//         // if clicked icon is left, reduce width value from the carousel scroll left else add to it
//         carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
//         setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
//     });
// });
//
// const autoSlide = () => {
//     // if there is no image left to scroll then return from here
//     if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
//
//     positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
//     let firstImgWidth = firstImg.clientWidth + 14;
//     // getting difference value that needs to add or reduce from carousel left to take middle img center
//     let valDifference = firstImgWidth - positionDiff;
//
//     if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
//         return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
//     }
//     // if user is scrolling to the left
//     carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
// }
//
// const dragStart = (e) => {
//     // updatating global variables value on mouse down event
//     isDragStart = true;
//     prevPageX = e.pageX || e.touches[0].pageX;
//     prevScrollLeft = carousel.scrollLeft;
// }
//
// const dragging = (e) => {
//     // scrolling images/carousel to left according to mouse pointer
//     if(!isDragStart) return;
//     e.preventDefault();
//     isDragging = true;
//     carousel.classList.add("dragging");
//     positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
//     carousel.scrollLeft = prevScrollLeft - positionDiff;
//     showHideIcons();
// }

// const dragStop = () => {
//     isDragStart = false;
//     carousel.classList.remove("dragging");
//
//     if(!isDragging) return;
//     isDragging = false;
//     autoSlide();
// }
//
// carousel.addEventListener("mousedown", dragStart);
// carousel.addEventListener("touchstart", dragStart);
//
// document.addEventListener("mousemove", dragging);
// carousel.addEventListener("touchmove", dragging);
//
// document.addEventListener("mouseup", dragStop);
// carousel.addEventListener("touchend", dragStop);


window.onload = () => {
    const wrappers = document.querySelectorAll(".wrapper");
    const totalCounter = document.querySelector("#total-counter");
    const minusButtons = document.querySelectorAll(".minus");
    const plusButtons = document.querySelectorAll(".plus");
    const numSpans = document.querySelectorAll(".num");
    let totalCount = 0;

    wrappers.forEach((wrapper, index) => {
        const minus = minusButtons[index];
        const plus = plusButtons[index];
        const num = numSpans[index];
        let count = parseInt(num.innerText); // Initialize count based on the initial value

        plus.addEventListener("click", () => {
            if (totalCount < 30 && count < 30) {
                count++;
                num.innerText = count;
                updateTotal();
            }
        });

        minus.addEventListener("click", () => {
            if (count > 0) {
                count--;
                num.innerText = count;
                updateTotal();
            }
        });
    });

    function updateTotal() {
        totalCount = Array.from(numSpans).reduce((sum, span) => sum + parseInt(span.innerText), 0);
        totalCounter.innerText = `${totalCount} / 30`;

        if (totalCount >= 30) {
            totalCounter.style.color = "red";
        } else {
            totalCounter.style.color = "initial";
        }
    }

    // Initialize the total count
    updateTotal();
};
