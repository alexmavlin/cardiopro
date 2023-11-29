import { animateHeight, fadeIn, fadeOut } from './functions'

let choisirPopupBtns = document.querySelectorAll('.sale__choisir')
let defExplorePopupBtns = document.querySelectorAll('.defExplore__choisir')

let price
let selectBox
let selectValue
let choisirPopup
let body
let closeBtn

if (choisirPopupBtns.length > 0)
{

    closeBtn = document.querySelector('#saleChoisirPopUp__close')
    choisirPopupBtns.forEach(function(element) {
        element.addEventListener("click", function(e) {
            e.preventDefault()

            setVarsChoisirPopup(this)
            showChoisirPopUp()
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
    console.log(selectValue, selectBox, selectBox.value)

    choisirPopup.style.display = "flex"
    body.style.overflow = "hidden"

    fadeIn(choisirPopup, 300, function() {
        choisirPopup.style.pointerEvents = "all"
        choisirPopup.classList.add('active')
    })
}

function setVarsChoisirPopup(element)
{
    price = element.parentElement.parentElement.querySelector('.sale__price__h2').innerText
    selectBox = document.querySelector('#pack')
    selectValue = document.querySelector('[data-price="' + price + '"]').value
    choisirPopup = document.querySelector('#saleChoisirPopUp')
    body = document.querySelector('body')
}
function showChoisirPopUp()
{
    selectBox.value = selectValue

    choisirPopup.style.display = "flex"
    body.style.overflow = "hidden"

    fadeIn(choisirPopup, 300, function() {
        choisirPopup.style.pointerEvents = "all"
        choisirPopup.classList.add('active')
    })
}