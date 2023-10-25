import { animateHeight } from './functions'

let faq = document.getElementById('faq')

if (faq)
{
    let commonPadding = 40
    let itemHeaders = document.querySelectorAll('.faq__header')

    itemHeaders.forEach(function(itemHeader) {
        let itemParent = itemHeader.parentElement
        let itemContent = itemParent.querySelector('.faq__content')
        if (!itemParent.classList.contains("expanded"))
        {
            console.log(itemHeader.offsetHeight + commonPadding)
            itemParent.style.height = itemHeader.offsetHeight + commonPadding + "px"
            itemContent.style.opacity = 0
            console.log(itemParent.style)
        }
        itemHeader.addEventListener("click", function() {
            if (!itemParent.classList.contains("expanded"))
            {
                let currentItemHeigh = itemHeader.offsetHeight + commonPadding
                let targetHeight = currentItemHeigh + commonPadding + itemParent.querySelector('.faq__content').offsetHeight

                animateHeight(itemParent, 300, currentItemHeigh, targetHeight)
                console.log(targetHeight)
                itemContent.style.opacity = 1
            } else {
                let currentItemHeight = itemParent.offsetHeight
                let targetItemHieght = itemHeader.offsetHeight + commonPadding

                animateHeight(itemParent, 300, currentItemHeight, targetItemHieght)
                itemContent.style.opacity = 0
            }

            itemParent.classList.toggle("expanded")
        })
    })
}