const blackTextEle = document.querySelector(".innerText.black"),
    backgroundImage = document.querySelector(".globeBackground");

let blackTextPosNum;

// Get the top property from the black text
setTimeout(() => {
    // Get the top position of the black text
    const blackTextPosString = getComputedStyle(blackTextEle).top;
    blackTextPosNum = +blackTextPosString.substr(0, blackTextPosString.length - 2);

    // Check on load if the text is passed the border
    const scrollPos = window.scrollY;
    const textStopBorder = backgroundImage.clientHeight + 100;

    if (textStopBorder < blackTextPosNum + scrollPos &&
        !blackTextEle.classList.contains("stopScroll")) {
        // Unfreeze text
        blackTextEle.classList.add("stopScroll");
        blackTextEle.style.setProperty('top', `${textStopBorder}px`);
    }
}, 0);

window.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;
    // Scroll stop border
    const textStopBorder = backgroundImage.clientHeight + 100;
    
    // Check if you've scrolled past the border
    if (textStopBorder >= blackTextPosNum + scrollPos &&
        blackTextEle.classList.contains("stopScroll"))  {
        // Unfreeze text
        blackTextEle.classList.remove("stopScroll");
        blackTextEle.style.setProperty('top', `${blackTextPosNum}px`);
    } else if (textStopBorder < blackTextPosNum + scrollPos &&
        !blackTextEle.classList.contains("stopScroll")) {
        // Freeze text
        blackTextEle.classList.add("stopScroll");
        blackTextEle.style.setProperty('top', `${textStopBorder}px`);
    }
});
