export function fadeIn(element, duration, callback) {
    element.style.opacity = 0; // Не забыть для всех появляющихся элементов. Попробовать не менять

    let startTime = null;

    function animate(currentTime) {
        if (!startTime) {
            startTime = currentTime;
        }

        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        element.style.opacity = progress;

        if (progress < 1) {
            requestAnimationFrame(animate);
        } else {
            if (typeof callback === 'function') {
                callback();
            }
        }
    }

    requestAnimationFrame(animate);
}

export function fadeOut(element, duration, callback) {
    let startTime = null;
    const initialOpacity = getComputedStyle(element).opacity;

    function animate(currentTime) {
        if (!startTime) {
            startTime = currentTime;
        }

        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        element.style.opacity = (1 - progress) * initialOpacity;

        if (progress < 1) {
            requestAnimationFrame(animate);
        } else {
            element.style.opacity = 0;

            if (typeof callback === 'function') {
                callback();
            }
        }
    }

    requestAnimationFrame(animate);
}

export function animateHeight(element, duration, startHeight, endHeight, callback) {
    let startTime = null;

    function animate(currentTime) {
        if (!startTime) {
            startTime = currentTime;
        }

        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        // Calculate the current height based on the progress
        const currentHeight = startHeight + (endHeight - startHeight) * progress;

        // Set the height of the element
        element.style.height = currentHeight + 'px';

        if (progress < 1) {
            requestAnimationFrame(animate);
        } else {
            // Animation completed
            if (typeof callback === 'function') {
                callback();
            }
        }
    }

    requestAnimationFrame(animate);
}

export function animateRotation(element, duration, startAngle, endAngle, callback) {
    let startTime = null;

    function animate(currentTime) {
        if (!startTime) {
            startTime = currentTime;
        }

        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        // Calculate the current angle based on the progress
        const currentAngle = startAngle + (endAngle - startAngle) * progress;

        // Apply the rotation using the transform property
        element.style.transform = `rotate(${currentAngle}deg)`;

        if (progress < 1) {
            requestAnimationFrame(animate);
        } else {
            // Animation completed
            if (typeof callback === 'function') {
                callback();
            }
        }
    }

    requestAnimationFrame(animate);
}