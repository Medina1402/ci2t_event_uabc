const burger = document.getElementById("burger");
const header = document.getElementById("header");
const main = document.getElementById("main");
let lastTopScroll = 0;
let isNotActive = true;
burger.onclick = () => EventBurgerMenu();
window.onkeyup = (e) => (e.key == "Escape" && !isNotActive)
    ? EventBurgerMenu() : null;
const EventBurgerMenu = () => {
    isNotActive = main.classList.toggle("showMain");
    if (!isNotActive)
        lastTopScroll = window.scrollY;
    return (!isNotActive)
        ? window.onscroll = () => window.scrollTo(0, lastTopScroll)
        : window.onscroll = () => ScrollEnable();
};
const ScrollEnable = () => {
    let windowScrollPX = window.scrollY;
    if (lastTopScroll < windowScrollPX && windowScrollPX > header.offsetHeight) {
        header.style.transform = `translateY(-${header.offsetHeight}px)`;
    }
    if (lastTopScroll > windowScrollPX && windowScrollPX > header.offsetHeight) {
        header.style.position = "fixed";
        header.style.transform = `translateY(0px)`;
    }
    if (windowScrollPX == 0) {
        header.style.position = "absolute";
        header.style.top = "0";
    }
    lastTopScroll = window.scrollY;
};
window.onscroll = () => ScrollEnable();
