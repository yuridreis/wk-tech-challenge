document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".close")[0].addEventListener("click", function (i) {
        i.preventDefault();
        document.querySelectorAll(".fade")[0].classList.remove("fade-off");
        document.querySelector("body").classList.remove("ov-hidden");
    });
    document.querySelectorAll(".close")[1].addEventListener("click", function (i) {
        i.preventDefault();
        document.querySelectorAll(".fade")[1].classList.remove("fade-off");
        document.querySelector("body").classList.remove("ov-hidden");
    });
    document.querySelectorAll(".close")[2].addEventListener("click", function (i) {
        i.preventDefault();
        document.querySelectorAll(".fade")[2].classList.remove("fade-off");
        document.querySelector("body").classList.remove("ov-hidden");
    });

    document.querySelectorAll(".button")[0].addEventListener("click", () => {
        document.querySelector(".fade-clientes").classList.add("fade-off");
        document.querySelector("body").classList.add("ov-hidden");
        scroll(0, 0);
    });

    document.querySelectorAll(".button")[1].addEventListener("click", () => {
        document.querySelector(".fade-produtos").classList.add("fade-off");
        document.querySelector("body").classList.add("ov-hidden");
        scroll(0, 0);
    });

    document.querySelectorAll(".button")[2].addEventListener("click", () => {
        document.querySelector(".fade-vendas").classList.add("fade-off");
        document.querySelector("body").classList.add("ov-hidden");
        scroll(0, 0);
    });

    document.querySelector(".reload").addEventListener("click", () => {
        window.location.href = window.location.href;
    });

    let forms = document.querySelectorAll(".popup form");
    forms.forEach(form => {
        form.addEventListener("submit", () => {
            window.location.href = window.location.href;
            console.log("hey");
        });
    });
});