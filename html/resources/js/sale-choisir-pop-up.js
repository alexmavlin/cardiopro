import { animateHeight, fadeIn, fadeOut } from './functions'

let defExplorePopupBtns = document.querySelectorAll('.defExplore__choisir')
let choisirButtons = document.querySelectorAll('.sale__choisir')

console.log(choisirButtons)


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

if (choisirButtons.length > 0)
{
    closeBtn = document.querySelector('#saleChoisirPopUp__close')
    choisirButtons.forEach(function(element) {
        element.addEventListener("click", function(e) {
            e.preventDefault()

            setVarsChoisirPopup(this)
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

function setVarsChoisirPopup(element)
{
    selectBox = document.querySelector('#choisir-pack')
    selectValue = document.querySelector('[data-price="' + element.getAttribute('data-price') + '"]').value
    choisirPopup = document.querySelector('#saleChoisirPopUp')
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