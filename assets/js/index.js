// =========== Xử lý Hero image trượt ===========
const slides = document.querySelectorAll(".hero__img-wrap");
let currentSlide = 0;

const moveSlide = function (currSlide) {
    slides.forEach((slide, index) => {
        // Xử lý không dựt lại khi tới ảnh cuối
        let slidePosition = index - currSlide;
        if (slidePosition < 0) {
            slidePosition += slides.length;
        }
        // Lấy transform
        slide.style.transform = `translateX(${100 * slidePosition}%)`;
    });
};

// Slide tiến
function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    moveSlide(currentSlide);
    // Gắn Active cho dot
    activeDot(currentSlide);
}

// Slide lùi
function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    moveSlide(currentSlide);
    // Gắn Active cho dot
    activeDot(currentSlide);
}

// Xử lý khi click vào nút Next hoặc Prev
document
    .querySelector(".review__control-left")
    .addEventListener("click", prevSlide);
document
    .querySelector(".review__control-right")
    .addEventListener("click", nextSlide);

// Xử lý khi ấn phím mũi trên Keyboard
document.addEventListener("keydown", function (e) {
    if (e.key === "ArrowLeft") prevSlide();
    if (e.key === "ArrowRight") nextSlide();
});

// Xử lý Dots
const dots = document.querySelector(".review__dots");

// Tạo Dot
const createDot = () => {
    slides.forEach((_, index) => {
        dots.insertAdjacentHTML(
            "beforeend",
            `<div class="review__dot" data-slide="${index}"></div>`
        );
    });
};

// Gắn Active vào dot
const activeDot = (slide) => {
    document
        .querySelectorAll(".review__dot")
        .forEach((dot) => dot.classList.remove("review__dot-active"));
    document
        .querySelector(`.review__dot[data-slide="${slide}"]`)
        .classList.add("review__dot-active");
};

// Khởi tạo giá trị
const init = () => {
    moveSlide(0);
    createDot();
    activeDot(0);
};
init();

// Chuyển Slide khi Click dot
dots.addEventListener("click", (e) => {
    if (e.target.classList.contains("review__dot")) {
        const slide = parseInt(e.target.dataset.slide);
        moveSlide(slide);
        prevSlide();
        activeDot(slide);
    }
});

// Xử lý lặp lại sau 3s
// setInterval(nextSlide, 3000);

//=========== Xử lý nút Back to top ===========
window.onscroll = () => {
    scrollFunction();
};

function scrollFunction() {
    // Khi thanh scroll xuống 30px
    if (document.documentElement.scrollTop > 30) {
        // Đúng thì block
        document.querySelector(".back-to-top").style.display = "block";
    } else {
        // Sai thì none
        document.querySelector(".back-to-top").style.display = "none";
    }
}

// Xử lý khi click Back to top
document.querySelector(".back-to-top").onclick = () => {
    document.documentElement.scrollTop = 0;
};
