$(document).ready(function() {
  // see about preloader @ https://perishablepress.com/press/2009/12/28/3-ways-preload-images-css-javascript-ajax/
    $('.carousel').carousel({
        interval: 2000
    });

    window.sr = ScrollReveal();
    sr.reveal('.services-box',{
        viewFactor: 0.3
    }, 300);

    sr.reveal('.card-dept',{
        viewFactor: 0.3
    }, 300);

    sr.reveal('.dept-cont',{
        viewFactor: 0.3,
        delay: 1000,
        origin: 'right'
    },500);

    sr.reveal('.plan-cont',{
        viewFactor: 0.3
    }, 300);

    sr.reveal('.plan-btn',{
        viewFactor: 0.3,
        delay: 700
    });

    sr.reveal('.footer-logo',{
        viewFactor: 0.3,
        origin: 'left'
    });
    
    sr.reveal('.footer-end',{
        viewFactor: 0.3,
        origin: 'bottom'
    });

    sr.reveal('.footer-posts',{
        viewFactor: 0.3,
        origin: 'right'
    });

    var app = document.getElementById('text');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('Estamos em manutenção!')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Não se preocupe!')
        .pauseFor(2500)
        .deleteChars(12)
        .typeString('por muito tempo!')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Em breve voltamos com postagens regulares!')
        .start();

});
