
   // var icon = $('.icon');
   // var context = $('situation');
   // var li = $('li');



// $("enviro").each(function(index, element){
//     var imagen = $(".icon");
//     var overlay = $(this).find(".overlay");
    // var texto1 = $(this).find(".situation");
    // var texto2 = $(this).find(".textoBox2");


//    var tl = new TimelineLite({paused:true});
//     tl.to(imagen, 2, { css:{display:block},scale: 1.2, ease: Power4.easeOut})
//       .to(overlay, .4, { bottom: 0, ease:Power3.easeInOut},".3")
//       .to(texto1, .4, { bottom: 65, autoAlpha: 1, ease:Power2.easeOut},".5")
//       .to(texto2, .4, { bottom: 30, autoAlpha: 1, ease:Power2.easeOut},".7");
//   element.animation = tl;
// });

// $("enviro").hover(over, out);
// function over(){ this.animation.play() };
// function out(){ this.animation.reverse() };


// li.mouseleave(function()
// {
//   var currentTime = tn1.time();
//   tn1.reverse(currentTime);
// });

window.onload = (function animation() {

    // animation des blocks li

    var home = function home() {

        var li = $('li');

        var tl = new TimelineLite();

        tl.staggerFrom(li, 1, {
            scale: 0.5,
            opacity: 0,
            delay: 0.5,
            ease: Power1.easeOut,
            force3D: true
        }, 0.2);
    }

    // animation opiciter de chaque li 



    home();
   






});