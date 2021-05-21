const logosNodeList = document.querySelectorAll(".logo");
const menuNodeList = document.querySelectorAll(".menuHeading");


const sideBarNodeList = document.querySelectorAll(".sideBar");
// Convert a nodelist to array
const logosArray = Array.prototype.slice.call(logosNodeList);
const menuArray = Array.prototype.slice.call(menuNodeList);

const sideBarArray = Array.prototype.slice.call(sideBarNodeList);

// The value of when the logo should shrink
const threshHold = backgroundImage.clientHeight - 189;

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





// MENU SECTION. CHANGES COLOR BASED ON POSITION ON THE WEBPAGE
const getOffsetTop = function(element) {
    if (!element) return 0;
    return getOffsetTop(element.offsetParent) + element.offsetTop + 200;
};

const bannerBlok = document.querySelector("#changecolor_uitleg");
const navNodeList = document.querySelectorAll(".navItem");
const navArray = Array.prototype.slice.call(navNodeList);
const banner = document.querySelector(".banner-blok");

window.addEventListener("scroll", function() {

    const scrollPos = window.scrollY;
    
    var h1selector = $(".frontpage-blogs");
    var distance_from_top = h1selector.offset().top - 200;

    if(($(window)).scrollTop() > distance_from_top && navArray[0].classList.contains("hide")) {
        navArray.map(sideBar => sideBar.classList.remove("hide"));
    
    } else if ($(window).scrollTop() < distance_from_top && !navArray[0].classList.contains("hide")) {
        navArray.map(sideBar => sideBar.classList.add("hide"));

    }    
    if (window.scrollY + window.innerHeight > getOffsetTop(banner) && window.scrollY - window.innerHeight < getOffsetTop(banner) && !navArray[0].classList.contains("hide"))   {
        navArray.map(sideBar => sideBar.classList.add("hide"));
        
    } else if (window.scrollY + window.innerHeight < getOffsetTop(banner) && navArray[0].classList.contains("hide")) {
        navArray.map(sideBar => sideBar.classList.remove("hide"));
    }
});