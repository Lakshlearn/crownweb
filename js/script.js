// script.js

const zoomElements = document.querySelectorAll('.zoom-scroll');

function imageZoomEffect() {

    zoomElements.forEach((element) => {

        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top < windowHeight && rect.bottom > 0) {

            let visible = 1 - (rect.top / windowHeight);

            visible = Math.max(0, Math.min(1, visible));

            // MAX ZOOM 15%
            const scale = 1 + (visible * 0.15);

            element.querySelector('img').style.transform =
                `scale(${scale})`;

        }

    });

}

// RUN ON SCROLL
window.addEventListener('scroll', imageZoomEffect);

// RUN ON LOAD
imageZoomEffect();