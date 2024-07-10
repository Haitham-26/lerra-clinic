new WOW().init();

const navlinks = document.querySelectorAll(".dropdown");

const netwroks = document.querySelectorAll(".pw-ntwrk");

netwroks.forEach((x) => {
    netwroks.forEach((x) => (x.style.opacity = 1));
    x.onmouseover = () => {
        netwroks.forEach((x) => (x.style.opacity = 0.5));
        x.style.opacity = 1;
    };
    x.onmouseleave = () => {
        netwroks.forEach((x) => (x.style.opacity = 1));
    };
});

const swiper = new Swiper(".socialProofSwiper", {
    grabCursor: true,
    slidesPerView: 1,
    breakpoints: {
        992: {
            slidesPerView: 1.2,
        },
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    effect: "creative",
    creativeEffect: {
        prev: {
            shadow: false,
            translate: [0, 0, -400],
        },
        next: {
            translate: ["100%", 0, 0],
        },
    },
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".heart-icon").forEach(function (icon) {
        icon.addEventListener("click", function () {
            this.classList.toggle("fa-solid");
            this.classList.toggle("fa-regular");
            this.style.color = this.style.color === "red" ? "" : "red";
        });
    });
});
