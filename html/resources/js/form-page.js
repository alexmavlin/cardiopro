import { animateHeight, fadeIn, fadeOut} from './functions'

const formPageButtonsRow = document.getElementById('formPage__buttons')

if (formPageButtonsRow)
{
    let contentBlockWrappers
    let contentToShow
    let contentToHide
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

            startHeight = 0
            targetHeight = contentToShow.offsetHeight

            if (contentToHide)
            {
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
}