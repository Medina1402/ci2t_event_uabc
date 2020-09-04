const burger = document.getElementById("burger")
const header = document.getElementById("header")
const main = document.getElementById("main")
let lastTopScroll = 0
let isNotActive = true

/**
 * Event on click burger
 */
burger.onclick = () => EventBurgerMenu()
window.onkeyup = (e) => (e.key == "Escape" && !isNotActive)
    ? EventBurgerMenu() :null


/**
 * Show Menu and disabled scroll window
 */
const EventBurgerMenu = () => {
    isNotActive = main.classList.toggle("showMain")
    if (!isNotActive) lastTopScroll = window.scrollY

    if(window.location.pathname != "/") document.getElementById("main").style.filter = "invert(1)"

    return (!isNotActive)
        ? window.onscroll = () => window.scrollTo(0, lastTopScroll)
        : window.onscroll = () => ScrollEnable()
}


/**
 * Event on scroll
 */
const ScrollEnable = () => {
    let windowScrollPX = window.scrollY

    /**
     * Scroll down
     */
    if (lastTopScroll < windowScrollPX && windowScrollPX > header.offsetHeight) {
        header.style.transform = `translateY(-${header.offsetHeight}px)`
    }

    /**
     * Scroll Up
     */
    if (lastTopScroll > windowScrollPX && windowScrollPX > header.offsetHeight) {
            header.style.position = "fixed"
            header.style.transform = `translateY(0px)`
    }

    /**
     * Scroll top fixed
     */
    if (windowScrollPX == 0) {
        header.style.position = "absolute"
    }

    lastTopScroll = window.scrollY
}

/**
 * Default init scroll
 */
window.onscroll = () => ScrollEnable()