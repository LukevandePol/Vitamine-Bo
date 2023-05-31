document.addEventListener("DOMContentLoaded", () => {
    const wrappers = document.querySelectorAll(".wrapper");
    const totalCounter = document.querySelector("#total-counter");
    const minusButtons = document.querySelectorAll(".minus");
    const plusButtons = document.querySelectorAll(".plus");
    const numSpans = document.querySelectorAll(".num");
    let totalCount = 0;

    // Loop to calculate initial total count
    numSpans.forEach((num) => {
        totalCount += parseInt(num.innerText);
    });

    // Update count and total counter for each wrapper
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
});
