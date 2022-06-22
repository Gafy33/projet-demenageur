
    // controller 
    var controller = new ScrollMagic.Controller();

    // Tween
    var tween_banner_text = TweenMax.staggerFromTo('#banner_text', 1,
            {opacity: 0, y: 100},
            {opacity: 1, y: 0}, 0.1);


    var tween_scan_text = TweenMax.staggerFromTo('#scan_meuble_text', 1,
            {opacity: 0, x: 100},
            {opacity: 1, x: 0}, 0.1);

    var tween_visu_text = TweenMax.staggerFromTo('#visualisation_3d_text', 1,
            {opacity: 0, x: -100},
            {opacity: 1, x: 0}, 0.1);

    var tween_depla = TweenMax.staggerFromTo('#deplacement_text', 1,
            {opacity: 0, x: 100},
            {opacity: 1, x: 0}, 0.1);

    var tween_box_qui = TweenMax.staggerFromTo('#box_qui', 1,
            {opacity: 0, y: 100},
            {opacity: 1, y: 0}, 0.1);

    // phase 1
    var tween_roadmap_left_1 = TweenMax.staggerFromTo('#roadmap_left_1', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_1 = TweenMax.staggerFromTo('#roadmap_right_1', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 2
    var tween_roadmap_left_2 = TweenMax.staggerFromTo('#roadmap_left_2', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_2 = TweenMax.staggerFromTo('#roadmap_right_2', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 3
    var tween_roadmap_left_3 = TweenMax.staggerFromTo('#roadmap_left_3', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_3 = TweenMax.staggerFromTo('#roadmap_right_3', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 4
    var tween_roadmap_left_4 = TweenMax.staggerFromTo('#roadmap_left_4', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_4 = TweenMax.staggerFromTo('#roadmap_right_4', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);

    // phase 5
    var tween_roadmap_left_5 = TweenMax.staggerFromTo('#roadmap_left_5', 0.5,
            {opacity: 0, x: 50},
            {opacity: 1, x: 0}, 0.1);

    var tween_roadmap_right_5 = TweenMax.staggerFromTo('#roadmap_right_5', 0.5,
            {opacity: 0, x: -50},
            {opacity: 1, x: 0}, 0.1);


    var tween_roadmap_cube_1 = TweenMax.staggerFromTo('#roadmap_cube_1', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_2 = TweenMax.staggerFromTo('#roadmap_cube_2', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_3 = TweenMax.staggerFromTo('#roadmap_cube_3', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_4 = TweenMax.staggerFromTo('#roadmap_cube_4', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);

    var tween_roadmap_cube_5 = TweenMax.staggerFromTo('#roadmap_cube_5', 0.5,
            {opacity: 0, scale: 0},
            {opacity: 1, scale: 1}, 0.1);
            


   // Scene ScrollMagic
    var scene = new ScrollMagic.Scene({triggerElement: "#scan__", offset: -100})
                                     .triggerHook(0.4)
                                     //.addIndicators({name: "scan", colorTrigger: "red", indent:200})
                                     .setTween(tween_scan_text)
                                     .reverse(false)
                                     .addTo(controller)

    var scene2 = new ScrollMagic.Scene({triggerElement: "#visualisation__", offset: -100})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "visu", colorTrigger: "blue", indent:300})
                                    .setTween(tween_visu_text)
                                    .reverse(false)
                                    .addTo(controller)

    var scene3 = new ScrollMagic.Scene({triggerElement: "#deplacement__", offset: -200})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_depla)
                                    .reverse(false)
                                    .addTo(controller)

    var scene4 = new ScrollMagic.Scene({triggerElement: "#qui__", offset: -200})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_box_qui)
                                    .reverse(false)
                                    .addTo(controller)

    //Phase 1
    var scene5 = new ScrollMagic.Scene({triggerElement: "#roadmap", offset: -150})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_1)
                                    .reverse(true)
                                    .addTo(controller)

    var scene6 = new ScrollMagic.Scene({triggerElement: "#roadmap", offset: -150})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_1)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube1 = new ScrollMagic.Scene({triggerElement: "#roadmap", offset: -150})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_1)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 2
    var scene7 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_1", offset: -250})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_2)
                                    .reverse(true)
                                    .addTo(controller)

    var scene8 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_1", offset: -250})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:600})
                                    .setTween(tween_roadmap_right_2)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube2 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_1", offset: -250})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_2)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 3
    var scene9 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_2", offset: -260})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_3)
                                    .reverse(true)
                                    .addTo(controller)

    var scene10 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_2", offset: -260})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_3)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube3 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_2", offset: -260})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_3)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 4
    var scene11 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_3", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_4)
                                    .reverse(true)
                                    .addTo(controller)

    var scene12 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_3", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_4)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube4 = new ScrollMagic.Scene({triggerElement: "#roadmap_right_3", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_4)
                                    .reverse(true)
                                    .addTo(controller)

    //phase 6
    var scene13 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_4", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla_1", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_left_5)
                                    .reverse(true)
                                    .addTo(controller)

    var scene14 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_4", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_right_5)
                                    .reverse(true)
                                    .addTo(controller)

    var scenecube5 = new ScrollMagic.Scene({triggerElement: "#roadmap_left_4", offset: -280})
                                    .triggerHook(0.4)
                                    //.addIndicators({name: "depla", colorTrigger: "yellow", indent:400})
                                    .setTween(tween_roadmap_cube_5)
                                    .reverse(true)
                                    .addTo(controller)
