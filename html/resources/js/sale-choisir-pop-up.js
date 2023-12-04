import { animateHeight, fadeIn, fadeOut } from './functions'

let defExplorePopupBtns = document.querySelectorAll('.defExplore__choisir')
let boiterButtons = document.querySelectorAll('.boiter__choisir')

let price
let selectBox
let selectValue
let choisirPopup
let body
let closeBtn

if (defExplorePopupBtns.length > 0)
{
    closeBtn = document.querySelector('#defExplorePopUp__close')
    defExplorePopupBtns.forEach(function(element) {
        element.addEventListener("click", function(e) {
            e.preventDefault()

            setVarsDefExplorePopup(this)
            showDefExplorePopUp()
        })
    })

    closeBtn.addEventListener("click", function() {
        if (choisirPopup)
        {
            if (choisirPopup.classList.contains('active'))
            {
                choisirPopup.classList.remove('active')
                fadeOut(choisirPopup, 300, function() {
                    choisirPopup.style.pointerEvents = "none"
                    choisirPopup.style.display = "none"
                    body.style.overflow = "auto"
                })
            }
        }
    })
}

if (boiterButtons.length > 0)
{
    closeBtn = document.querySelector('#defExplorePopUp__close')
    boiterButtons.forEach(function(element) {
        element.addEventListener("click", function(e) {
            e.preventDefault()

            setVarsDefExplorePopup(this)
            showDefExplorePopUp()
        })
    })

    closeBtn.addEventListener("click", function() {
        if (choisirPopup)
        {
            if (choisirPopup.classList.contains('active'))
            {
                choisirPopup.classList.remove('active')
                fadeOut(choisirPopup, 300, function() {
                    choisirPopup.style.pointerEvents = "none"
                    choisirPopup.style.display = "none"
                    body.style.overflow = "auto"
                })
            }
        }
    })
}

function setVarsDefExplorePopup(element)
{
    selectBox = document.querySelector('#packDefExplore')
    selectValue = document.querySelector('[data-queue="' + element.getAttribute('data-queue-btn') + '"]').value
    choisirPopup = document.querySelector('#defExplorePopUp')
    body = document.querySelector('body')
}

function showDefExplorePopUp() 
{
    selectBox.value = selectValue

    choisirPopup.style.display = "flex"
    body.style.overflow = "hidden"

    fadeIn(choisirPopup, 300, function() {
        choisirPopup.style.pointerEvents = "all"
        choisirPopup.classList.add('active')
    })
}