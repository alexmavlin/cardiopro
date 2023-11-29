import { animateHeight, fadeIn, fadeOut} from './functions'

const formPageButtonsRow = document.getElementById('formPage__buttons')

if (formPageButtonsRow)
{
    let contentBlockWrappers
    let contentToShow
    let contentToHide
    let formToHide
    let startHeight
    let targetHeight

    let formPageButtons = formPageButtonsRow.querySelectorAll('.formPage__button')
    let contentBlock = document.getElementById('formPage__content')

    formPageButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            
            contentBlockWrappers = contentBlock.querySelectorAll('.formPage__content--block')

            contentBlockWrappers.forEach(function(contentBlockWrapper) {
                if (contentBlockWrapper.classList.contains('active'))
                {
                    contentToHide = contentBlockWrapper
                }
            })
            
            formPageButtons.forEach(function(element) {
                element.classList.remove('active')
            })
            this.classList.add('active')

            contentToShow = document.getElementById(this.getAttribute('data-link-id'))
            formToHide = contentToShow.parentElement.querySelector('.formPage__content--form__block')
            console.log(formToHide, 'form to hide')

            startHeight = 0
            targetHeight = contentToShow.offsetHeight

            if (contentToHide)
            {
                if (formToHide) {
                    formToHide.style.pointerEvents = "none"
                    formToHide.style.position = "absolute"
                    formToHide.classList.remove('active')
                }
                if (!contentToShow.classList.contains('active'))
                {
                    startHeight = contentToHide.offsetHeight
                    fadeOut(contentToHide, 150, function() {
                        contentToHide.style.pointerEvents = "none"
                        contentToHide.style.position = "absolute"
                        contentToHide.classList.remove('active')

                        animateHeight(contentBlock, 150, startHeight, targetHeight, function() {
                            fadeIn(contentToShow, 150)
                            contentToShow.style.pointerEvents = "all"
                            contentToShow.style.position = "unset"
                            contentToShow.classList.add('active')
                        })
                    })
                }
            } else {
                if (!contentToShow.classList.contains('active'))
                {
                    animateHeight(contentBlock, 300, startHeight, targetHeight, function() {
                        fadeIn(contentToShow, 150)
                        contentToShow.style.pointerEvents = "all"
                        contentToShow.style.position = "unset"
                        contentToShow.classList.add('active')
                    })
                }
            }
        })
    })

    /* Append form functionality */
    let saleButtons = document.querySelectorAll('.sale__button--dynamic')

    if (saleButtons.length > 0)
    {
        saleButtons.forEach(function(element) {
            element.addEventListener("click", function(e) {
                e.preventDefault()
                let formToShow = document.getElementById(this.getAttribute('data-form-id'))
                let formPrice = this.getAttribute('data-form-price')
                let formType = this.getAttribute('data-form-type')

                if (!formToShow.classList.contains('active'))
                {
                    startHeight = contentBlock.offsetHeight
                    targetHeight = formToShow.offsetHeight + startHeight

                    animateHeight(contentBlock, 200, startHeight, targetHeight, function() {
                        fadeIn(formToShow, 200)
                        formToShow.style.position = "unset"
                        formToShow.style.pointerEvents = "all"
                    })

                    formToShow.classList.add('active')
                }
                if (this.getAttribute('data-form-id') == 'content-location-form')
                {
                    console.log(formPrice)
                    let priceSpan = document.getElementById('price1')
                    let priceInput = document.getElementById('price1-input')
                    let typeInput = document.getElementById('type1-input')
                    fadeOut(priceSpan, 150, function() {
                        priceSpan.innerText = formPrice
                        fadeIn(priceSpan, 150)
                    })
                    priceInput.setAttribute('value', formPrice)
                    typeInput.setAttribute('value', formType)
                }

                if (this.getAttribute('data-form-id') == 'content-achat-form')
                {
                    let priceSpan = document.getElementById('price2')
                    let priceInput = document.getElementById('price2-input')
                    let typeInput = document.getElementById('type2-input')
                    fadeOut(priceSpan, 150, function() {
                        priceSpan.innerText = formPrice
                        fadeIn(priceSpan, 150)
                    })
                    priceInput.setAttribute('value', formPrice)
                    typeInput.setAttribute('value', formType)
                    
                }
            })
        })
    }
}