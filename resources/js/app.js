import './bootstrap';

// const previousButton = document.querySelector('#prev')
// const nextButton = document.querySelector('#next')
// const submitButton = document.querySelector('#submit')
// const tabTargets = document.querySelectorAll('.tab')
// const tabPanels = document.querySelectorAll('.tabpanel')
//
// let currentStep = 0
//
// //
// // nextButton.addEventListener('click', (event) => {
// //     event.preventDefault()
// //
// //     tabPanels[currentStep].classList.add('hidden')
// //     tabTargets[currentStep].classList.remove('active')
// //
// //     tabPanels[currentStep + 1].classList.remove('hidden')
// //     tabTargets[currentStep + 1].classList.add('active')
// //
// //     currentStep += 1
// //
// //     updateStatusDisplay()
// // })
//
// previousButton.addEventListener('click', (event) => {
//     event.preventDefault()
//
//     tabPanels[currentStep].classList.add('hidden')
//     tabTargets[currentStep].classList.remove('active')
//
//     tabPanels[currentStep - 1].classList.remove('hidden')
//     tabTargets[currentStep - 1].classList.add('active')
//
//     currentStep -= 1
//     updateStatusDisplay()
// })
//
// function updateStatusDisplay() {
//     if (currentStep === tabTargets.length - 1) {
//         nextButton.classList.add('hidden')
//         previousButton.classList.remove('hidden')
//         submitButton.classList.remove('hidden')
//     } else if (currentStep == 0) {
//         nextButton.classList.remove('hidden')
//         previousButton.classList.add('hidden')
//         submitButton.classList.add('hidden')
//     } else {
//         nextButton.classList.remove('hidden')
//         previousButton.classList.remove('hidden')
//         submitButton.classList.add('hidden')
//     }
// }
// Carousel//

const carousel = document.querySelector(".carousel"),
    firstImg = carousel.querySelectorAll(".carousel-img")[0],
    arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
