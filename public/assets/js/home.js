$(document).ready(function() {
    $("#lightSlider").lightSlider({
        container: "#lightSlider",
        item: 1,
        slideBy: "page",
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,
        vertical: true,
        adaptiveHeight: true,
        
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 800, //ms
        auto: false,
        loop: false,
        slideEndAnimation: true,
        pause: 1000,

        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
    });
});

function moveToAbout() {
    window.scrollTo( 0, 1100 );
}

function goToGithub() {
    window.open('http://github.com/byteskill', '_blank');
}