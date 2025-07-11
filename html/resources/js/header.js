import { fadeIn } from "./functions";
import { fadeOut } from "./functions";
import { animateHeight } from "./functions";
import { animateRotation } from "./functions";
import { setVarsChoisirPopup } from "./sale-choisir-pop-up"

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
                // e.preventDefault()

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

let devisBtn = document.getElementById('devis_en_ligne_btn')
if (devisBtn)
{
    if (window.scrollY != 0)
    {
        fadeIn(devisBtn, 300)
        devisBtn.style.pointerEvents = "all"
        devisBtn.classList.add('active')
    }
    window.addEventListener("scroll", function() {

        let scrollTop = window.scrollY
        
        if (scrollTop === 0)
        {
            fadeOut(devisBtn, 300)
            devisBtn.style.pointerEvents = "none"
            devisBtn.classList.remove('active')
        } else {
            if (!devisBtn.classList.contains('active'))
            {
                fadeIn(devisBtn, 300)
                devisBtn.style.pointerEvents = "all"
                devisBtn.classList.add('active')
            }
        }
    })
}

/* Error widget functionality */
let errorWidget = document.getElementById('form_error_widget')

if (errorWidget)
{
    setTimeout(function() {
        fadeOut(errorWidget, 300)
        errorWidget.style.pointerEvents = "none"
    }, 5000)

    let formId = errorWidget.getAttribute('data-form-id')

    if (formId != 'default') {
    

        

        if (formId == 'achat-form')
        {
            let form = document.getElementById(formId)
            let btn = document.querySelector('[data-link-id="' + formId + '"]')

            let startHeight
            let targetHeight

            btn.classList.add('active')
            form.style.position = "unset"
            form.style.pointerEvents = "all"
            form.style.opacity = 1
            form.classList.add('active')

            let achatForm = form.querySelector('#content-achat-form')
            let priceSpan = form.querySelector('#price2')

            startHeight = form.offsetHeight
            targetHeight = startHeight + achatForm.offsetHeight
            animateHeight(form, 150, startHeight, targetHeight, function() {
                fadeIn(achatForm, 150, function() {
                    let formPrice = form.querySelector('#price2-input').getAttribute('value')
                    priceSpan.innerText = formPrice
                })
                achatForm.style.pointerEvents = "all"
                achatForm.style.position = "unset"
                achatForm.classList.add('active')

                let rect = achatForm.getBoundingClientRect()
                let distance = rect.top + window.scrollY
                window.scrollTo(0, distance)

            })
        }
        if (formId == 'location-form')
        {
            let form = document.getElementById(formId)
            let btn = document.querySelector('[data-link-id="' + formId + '"]')

            let startHeight
            let targetHeight

            btn.classList.add('active')
            form.style.position = "unset"
            form.style.pointerEvents = "all"
            form.style.opacity = 1
            form.classList.add('active')

            let locationForm = form.querySelector('#content-location-form')
            let priceSpan = form.querySelector('#price1')

            startHeight = form.offsetHeight
            targetHeight = startHeight + locationForm.offsetHeight
            animateHeight(form, 150, startHeight, targetHeight, function() {
                fadeIn(locationForm, 150, function() {
                    let formPrice = form.querySelector('#price1-input').getAttribute('value')
                    priceSpan.innerText = formPrice
                })
                locationForm.style.pointerEvents = "all"
                locationForm.style.position = "unset"
                locationForm.classList.add('active')

                let rect = locationForm.getBoundingClientRect()
                let distance = rect.top + window.scrollY
                window.scrollTo(0, distance)
            })
        }

        if (formId == 'saleChoisirPopUp')
        {
            let choisirPopup = document.querySelector('#saleChoisirPopUp')
            let body = document.querySelector('body')
            let closeBtn

            choisirPopup.style.display = "flex"
            body.style.overflow = "hidden"

            closeBtn = document.getElementById('saleChoisirPopUp__close')

            fadeIn(choisirPopup, 200, function() {
                choisirPopup.style.pointerEvents = "all"
                choisirPopup.classList.add('active')
            })

            closeBtn.addEventListener("click", function() {
                if (choisirPopup)
                {
                    if (choisirPopup.classList.contains('active'))
                    {
                        fadeOut(choisirPopup, 300, function() {
                            choisirPopup.style.pointerEvents = "none"
                            choisirPopup.style.display = "none"
                            choisirPopup.classList.remove('active')
                            body.style.overflow = "auto"
                        })
                    }
                }
            })
        }

        if (formId == 'defExplorePopUp')
        {
            let choisirPopup = document.querySelector('#defExplorePopUp')
            let body = document.querySelector('body')
            let closeBtn

            choisirPopup.style.display = "flex"
            body.style.overflow = "hidden"

            closeBtn = document.getElementById('defExplorePopUp__close')

            fadeIn(choisirPopup, 200, function() {
                choisirPopup.style.pointerEvents = "all"
                choisirPopup.classList.add('active')
            })

            closeBtn.addEventListener("click", function() {
                if (choisirPopup)
                {
                    if (choisirPopup.classList.contains('active'))
                    {
                        fadeOut(choisirPopup, 300, function() {
                            choisirPopup.style.pointerEvents = "none"
                            choisirPopup.style.display = "none"
                            choisirPopup.classList.remove('active')
                            body.style.overflow = "auto"
                        })
                    }
                }
            })
        }
    }
}
/* // Error widget functionality */

/* Success Widget functionality */
let successWidget = document.getElementById('form_success_widget')
if (successWidget)
{
    setTimeout(function() {
        fadeOut(successWidget, 300)
    }, 5000)
}
/* // Success Widget functionality */
