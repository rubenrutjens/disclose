const logosNodeList = document.querySelectorAll(".logo");
const menuNodeList = document.querySelectorAll(".menuHeading");
const stramienBackground = document.querySelector(".stramienBackground");


const sideBarNodeList = document.querySelectorAll(".sideBar");
// Convert a nodelist to array
const logosArray = Array.prototype.slice.call(logosNodeList);
const menuArray = Array.prototype.slice.call(menuNodeList);

const sideBarArray = Array.prototype.slice.call(sideBarNodeList);

// The value of when the logo should shrink
const threshHold = stramienBackground.clientHeight - 189;

window.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;

    // Check if the current scroll position is passed the threshold
    if (scrollPos >= threshHold && !logosArray[0].classList.contains("shrink") && !menuArray[0].classList.contains("hide"))   {
        logosArray.map(logo => logo.classList.add("shrink"));
        menuArray.map(menu => menu.classList.add("hide"));
        sideBarArray.map(sideBar => sideBar.classList.add("new"));
        
    } else if (scrollPos < threshHold && logosArray[0].classList.contains("shrink") && menuArray[0].classList.contains("hide")) {
        logosArray.map(logo => logo.classList.remove("shrink"));
        menuArray.map(menu => menu.classList.remove("hide"));
        sideBarArray.map(sideBar => sideBar.classList.remove("new"));
    }
});

