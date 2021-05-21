const backdropEle = document.querySelector(".backdrop");
const sidebarBackgroundEle = document.querySelector(".sideBarBackground");
const sidebarBackgroundLeftEle = document.querySelector(".sideBarBackgroundLeft");
const sidebarBackgroundRightEle = document.querySelector(".sideBarBackgroundRight");
const bodyEle = document.querySelector("body");
const linkEles = document.querySelectorAll(".navItem");
const logoText = document.querySelector(".logoText");
const subSideNav = document.querySelector(".subSideNav .navList");

let lastClickedMenuItem = null;

const baseUrl = "http://localhost/stage/eindstage/wordpress/";
const menuItemsJson = '{"Branding": ["Merkstrategie", "Visuele identiteit", "Customer journey"], "Online marketing": ["Online strategie", "Website ontwerp", "Website realisatie", "Website optimalisatie", "Employer marketing", "Social media", "SEO - Zoekmachine optimalistie", "SEA - Zoekmachine advertising", "E-mail marketing", "Automatisatie", "Content creatie"], "Merkactivatie": [ "Shopper activatie", "Merkactivatie"]}';
const menuItems = JSON.parse(menuItemsJson);

const setSubItems = clickedParentName =>   {
    subSideNav.innerHTML = '';
    // Check if there is a menu item with this name
    if(menuItems[clickedParentName] !== undefined)   {
        const subMenuItems = menuItems[clickedParentName];

        // Create new nav items
        subMenuItems.forEach(subMenuItemText => {
            const subMenuItem = document.createElement("li");
            subMenuItem.classList.add("navItem", "black", "white");
            subMenuItem.innerText = subMenuItemText;
            subMenuItem.addEventListener("click", e => window.location.href = `${baseUrl}${e.target.textContent.replace(/ /g, '-').toLowerCase()}`);
            subSideNav.appendChild(subMenuItem);
            console.log(window.location.href);
        });
    } else  {
        window.location.href = `${baseUrl}/${clickedParentName}`;
    }
}

linkEles.forEach(linkEle => {
    linkEle.addEventListener("click", e => {
        if((linkEle.textContent.toLowerCase() == "blog") || (linkEle.textContent.toLowerCase() == "cases") || (linkEle.textContent.toLowerCase() == "contact") || (linkEle.textContent.toLowerCase() == "over ons")) {
            // alert("test");
        } else if (!backdropEle.classList.contains('fadein') && lastClickedMenuItem == null)    {
            
            // apply bronze color to clicked text
            lastClickedMenuItem = e.target;
            lastClickedMenuItem.classList.add("bronze");

            // turn all the navs white
            linkEles.forEach(linkEle => {
                linkEle.classList.add("white");
            });

            // prevent scrolling
            bodyEle.style.setProperty('overflow', 'hidden');

            // turn logo text white
            logoText.classList.add("white");

            // fade in backdrop
            backdropEle.classList.remove('fadeout');
            backdropEle.classList.add("fadein");

            // slide in side nav
            sidebarBackgroundEle.classList.add('slideIn');
            sidebarBackgroundLeftEle.classList.add('slideIn');

            setSubItems(e.target.textContent);

            setTimeout(() =>    {
                // slide in right nav after 300 ms
                sidebarBackgroundRightEle.classList.add('slideIn');
            }, 300);
        } else if (backdropEle.classList.contains('fadein') &&
            lastClickedMenuItem != null)    {
            // If a nav ele is clicked while the menu is still unfolded
            sidebarBackgroundRightEle.classList.remove('slideIn');

            // change bronze highlight
            lastClickedMenuItem.classList.remove("bronze");
            lastClickedMenuItem = e.target;
            lastClickedMenuItem.classList.add("bronze");

            // display the new menu again
            setTimeout(() =>    {            
                setSubItems(e.target.textContent);
                sidebarBackgroundRightEle.classList.add('slideIn');
            }, 300);
        }
    });
});

backdropEle.addEventListener("click", () => {
    if (backdropEle.classList.contains('fadein'))    {
        // hide nav element if the backdrop is clicked
        bodyEle.style.setProperty('overflow', 'initial');

        // remove the bronze highlight
        lastClickedMenuItem.classList.remove("bronze");
        lastClickedMenuItem = null;

        // fade out backdrop
        backdropEle.classList.remove("fadein");
        backdropEle.classList.add('fadeout');

        // slide away the nav
        sidebarBackgroundRightEle.classList.remove('slideIn');

        setTimeout(() =>    {
            // remove the white color
            linkEles.forEach(linkEle => {
                linkEle.classList.remove("white");
                logoText.classList.remove("white");
            });    

            // slide away the left part of nav after delay
            sidebarBackgroundEle.classList.remove('slideIn')
            sidebarBackgroundLeftEle.classList.remove('slideIn');
        }, 300);
    }
});