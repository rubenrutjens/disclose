// Prevents any transition from firing on page load.
// Body element must contain the stopTransition class
const stopTransitionEle = document.querySelector("body");

stopTransitionEle.classList.remove("stopTransition");