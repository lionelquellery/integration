




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

	var view = function view(){

		var card = $('.card');


		var tl = new TimelineLite();

		tl.staggerFrom(card, 1, {top:1,opacity:0, delay:0, ease: Expo.easeOut, y: 20 ,x:0}, 0.5);





	}

	view();

    home();
   
});


