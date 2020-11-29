document.addEventListener("turbolinks:load", function () {

    window.fadeUp = new ScrollReveal();
    fadeUp.reveal('.reveal-fade-up', {
        reset: true,
        duration: 1000,
        delay: 100,
        origin: 'bottom',
        distance: '75px',
        interval: 100,
        useDelay: 'onload'
    })

    window.fadeBottom = new ScrollReveal();
    fadeBottom.reveal('.reveal-fade-bottom', {
        reset: true,
        duration: 1000,
        delay: 100,
        origin: 'top',
        distance: '75px',
        interval: 100
    })

})

document.addEventListener("turbolinks:visit", function() {
    ScrollReveal().destroy();
})