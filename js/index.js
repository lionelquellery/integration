




window.onload = (function animation() {

    // animation des blocks li


    var home = function home() {

        var li = $('li');

        var tl = new TimelineLite();

        tl.staggerFrom(li, 1, {
            scale: 0.5,
            opacity: 0,
            delay: 0.2,
            ease: Power1.easeOut,
            force3D: true
        }, 0.2);
    }

    // animation opiciter de chaque li 



    home();
   
});


