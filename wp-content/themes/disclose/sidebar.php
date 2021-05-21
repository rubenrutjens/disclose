<?php

function echoMenu(bool $blackText = true)  {
    $listItemClasses = "navItem" . ($blackText ? " black" : " white");

    echo '<aside class="sideBar">
        <nav class="sideNav">
            <ul class="navList">
                <li class="' . $listItemClasses . '">Branding</li>
                <li class="' . $listItemClasses . '">Online marketing</li>
                <li class="' . $listItemClasses . '">Merkactivatie</li>
                <li class="' . $listItemClasses . '"><a href="'.home_url().'/over-ons">Over Ons</a></li>
                <li class="' . $listItemClasses . '"><a href="'.home_url().'/cases">Cases</a></li>
                <li class="' . $listItemClasses . '"><a href="'.home_url().'/blog">Blog</a></li>
                <li class="navItem bronze"><a href="'.home_url().'/contact">Contact</a></li>
            </ul>
        </nav>
    </aside>';
    if ($blackText) {
        echo '<aside class="backdrop"></aside>
        <aside class="sideBarBackground">
            <div class="sideBarBackgroundLeft">       
                <div class="backgroundShade"></div>
            </div>
            <div class="sideBarBackgroundRight">
                <div class="backgroundShade"></div>
                <nav class="subSideNav">
                    <ul class="navList">
                    </ul>
                </nav>
            </div>
        </aside>';
    }
}

