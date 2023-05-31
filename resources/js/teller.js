window.onload = () => {
    const wrappers = document.querySelectorAll(".wrapper");

    wrappers.forEach((wrapper) => {
        const minus = wrapper.querySelector(".minus");
        const plus = wrapper.querySelector(".plus");
        const num = wrapper.querySelector(".num");
        let a = 1;

        plus.addEventListener("click", () => {
            a++;
            if (a < 10) {
                num.innerText = a;
            } else {
                num.innerText = a;
            }
        });

        minus.addEventListener("click", () => {
            if (a > 1) {
                a--;
                if (a < 10) {
                    num.innerText = a;
                } else {
                    num.innerText = a;
                }
            }
        });
    });
};
