import { animateHeight, fadeIn, fadeOut} from './functions'

const formPageButtonsRow = document.getElementById('formPage__buttons')

if (formPageButtonsRow)
{
    let contentBlockWrappers
    let contentToShow
    let contentToHide
    let formToShow
    let formToHide
    let formType
    let formPrice
    let priceSpan
    let priceInput
    let typeInput
    let startHeight
    let targetHeight
    let currentButton

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
                formToShow = document.getElementById(this.getAttribute('data-form-id'))
                formPrice = this.getAttribute('data-form-price')
                formType = this.getAttribute('data-form-type')

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
                    priceSpan = document.getElementById('price1')
                    priceInput = document.getElementById('price1-input')
                    typeInput = document.getElementById('type1-input')
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

    /* Functionality when has URL Params */

    let urlParams = new URLSearchParams(window.location.search)

    let type = urlParams.get('type')
    let price = urlParams.get('price')

    if (type)
    {
        currentButton = document.querySelector('[data-link-id="' + type + '"]')
        contentToShow = document.getElementById(type)
        formToShow = document.getElementById('content-' + type)

        currentButton.classList.add('active')

        startHeight = 0
        targetHeight = contentToShow.offsetHeight + formToShow.offsetHeight

        if (!contentToShow.classList.contains('active'))
            {
                animateHeight(contentBlock, 300, startHeight, targetHeight, function() {
                    fadeIn(contentToShow, 150)
                    contentToShow.style.pointerEvents = "all"
                    contentToShow.style.position = "unset"
                    contentToShow.classList.add('active')

                    fadeIn(formToShow, 150, function() {
                        if (price)
                        {
                            priceSpan = formToShow.querySelector('.formPage__content--form__header--price__span')
                            if (type == 'location-form')
                            {
                                priceInput = formToShow.querySelector('#price1-input')
                                typeInput = formToShow.querySelector('#type1-input')
                                if (price == 39)
                                {
                                    typeInput.value = 'Location - Pack access'
                                }
                                if (price == 49)
                                {
                                    typeInput.value = 'Location - Pack zen'
                                }
                            }
                            if (type == 'achat-form')
                            {
                                priceInput = formToShow.querySelector('#price2-input')
                                typeInput = formToShow.querySelector('#type2-input')
                                if (price == 1190)
                                {
                                    typeInput.value = 'Achat - Pack access'
                                }
                                if (price == 1490)
                                {
                                    typeInput.value = 'Achat - Pack zen'
                                }
                            }
                            priceSpan.innerText = price
                            priceInput.value = price
                        }
                        let rect = formToShow.getBoundingClientRect()
                        let distance = rect.top + window.scrollY
                        window.scrollTo(0, distance)
                    })
                    formToShow.style.pointerEvents = "all"
                    formToShow.style.position = "unset"
                    formToShow.classList.add('active')
                })
            }
    }
}