window.onload=function e(){var e=function o(){var e=$("li"),a=new TimelineLite;a.staggerFrom(e,1,{scale:.5,opacity:0,delay:.2,ease:Power1.easeOut,force3D:!0},.2)},a=function i(){var e=$(".card"),a=new TimelineLite;a.staggerFrom(e,1,{top:1,opacity:0,delay:0,ease:Expo.easeOut,y:20,x:0},.5)};a(),e()};