import { fadeIn } from "./functions";
import { fadeOut } from "./functions";
import { animateHeight } from "./functions";
import { animateRotation } from "./functions";

const mediaQuery = window.matchMedia("(min-width: 1121px)")
if (mediaQuery.matches) {
    headerAbove1120px()
} else {
    headerBelow1120px()
}

function headerBelow1120px() {

    let burgerBtn = document.getElementById('header__burger')
    burgerBtn.addEventListener("click", function(event) {
        event.preventDefault()
        burgerBtn.classList.toggle("active")

        let navWrapper = document.getElementById('header__nav--wrapper')
        navWrapper.classList.toggle("active")
    })

    let lis = document.querySelectorAll('.header__nav--dropdown__li');

    if (lis.length > 0)
    {
        lis.forEach(function(li) {
            li.addEventListener("click", function(e) {
                e.preventDefault()

                if(!li.classList.contains("active")) {
                    let dropdown = li.querySelector('.header__nav--dropdown')
                    let links = dropdown.querySelectorAll('a')
                    let svg = li.querySelector('a > svg')

                    animateRotation(svg, 200, -90, 0)
    
                    let linksHeight = 0
                    links.forEach(function(link) {
                        linksHeight += link.offsetHeight
                    })

                    let dropdownStartHeight = dropdown.offsetHeight
                    let dropdownEndHeight = linksHeight + ((links.length - 1) * 8) + 24

                    animateHeight(dropdown, 300, dropdownStartHeight, dropdownEndHeight)

                    dropdown.style.paddingTop = "12px"
                    dropdown.style.paddingBottom = "12px"

                    li.classList.add("active")
                } else {
                    let dropdown = li.querySelector('.header__nav--dropdown')
                    let svg = li.querySelector('a > svg')

                    animateRotation(svg, 200, 0, -90)
                    
                    let dropdownStartHeight = dropdown.offsetHeight
                    let dropdownEndHeight = 0

                    animateHeight(dropdown, 300, dropdownStartHeight, dropdownEndHeight)

                    dropdown.style.paddingBottom = "0px"
                    dropdown.style.paddingTop = "0px"

                    li.classList.remove("active")
                }
            })
        })
    }
}

function headerAbove1120px() {
    /* Dropdowns functionality */
    let lis = document.querySelectorAll('.header__nav--dropdown__li');
    
    if (lis.length > 0) {
        lis.forEach(function(li) {
    
            let link = li.querySelector('a')
            let dropdown = li.querySelector('.header__nav--dropdown')
    
            /* Preventing default action on clicking a nav bar link */
            link.addEventListener("click", function(event) {
                event.preventDefault()
            })
            /* // Preventing default action on clicking a nav bar link */
    
            /* Show dropdowns on li mouseover */
            li.addEventListener("mouseover", function(event)
            {
                const initialOpacity = getComputedStyle(dropdown).opacity;
                if (initialOpacity == 0)
                {
                    fadeIn(dropdown, 300)
                    dropdown.style.pointerEvents = "all"
                    li.classList.add("active")
                }
            })
            /* // Show dropdowns on li mouseover */
    
            /* Hide dropdowns on li mouseout */
            li.addEventListener("mouseout", function(event)
            {
                if (!li.contains(event.relatedTarget))
                {
                    fadeOut(dropdown, 300)
                    li.classList.remove("active")
                    dropdown.style.pointerEvents = "none"
                }
            })
            /* // Hide dropdowns on li mouseout */
        });
    }
    /* // Dropdowns functionality */
}
