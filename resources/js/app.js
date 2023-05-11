import './bootstrap';

const previousButton = document.querySelector('#prev')
const nextButton = document.querySelector('#next')
const submitButton = document.querySelector('#submit')
const tabTargets = document.querySelectorAll('.tab')
const tabPanels = document.querySelectorAll('.tabpanel')

let currentStep = 0


nextButton.addEventListener('click', (event) => {
    event.preventDefault()

    tabPanels[currentStep].classList.add('hidden')
    tabTargets[currentStep].classList.remove('active')

    tabPanels[currentStep + 1].classList.remove('hidden')
    tabTargets[currentStep + 1].classList.add('active')

    currentStep += 1

    updateStatusDisplay()
})

previousButton.addEventListener('click', (event) => {
    event.preventDefault()

    tabPanels[currentStep].classList.add('hidden')
    tabTargets[currentStep].classList.remove('active')

    tabPanels[currentStep - 1].classList.remove('hidden')
    tabTargets[currentStep - 1].classList.add('active')

    currentStep -= 1
    updateStatusDisplay()
})

function updateStatusDisplay() {
    if (currentStep === tabTargets.length - 1) {
        nextButton.classList.add('hidden')
        previousButton.classList.remove('hidden')
        submitButton.classList.remove('hidden')
    } else if (currentStep == 0) {
        nextButton.classList.remove('hidden')
        previousButton.classList.add('hidden')
        submitButton.classList.add('hidden')
    } else {
        nextButton.classList.remove('hidden')
        previousButton.classList.remove('hidden')
        submitButton.classList.add('hidden')
    }
}
