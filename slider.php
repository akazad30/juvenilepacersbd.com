<!DOCTYPE html>
<head>

<title>jquery.sldr</title>

<link href="css/styles.css" rel="stylesheet">
<!--[if lt IE 9]><link href="css/ie8.css" rel="stylesheet"><![endif]-->
<!--[if lt IE 8]><link href="css/ie7.css" rel="stylesheet"><![endif]-->

</head>

<body>

<div class="stage" style="width:1600px;height:563px">



    <div id="SLDR-ONE" class="sldr" >
        <ul class="wrp animate">
            <li class="elmnt-one"><div class="skew"><div class="wrap"><img src="slider_img/slider1.png" width="1000" height="563"></div></div></li>
            <li class="elmnt-two"><div class="skew"><div class="wrap"><img src="slider_img/slider2.png" width="1000" height="563"></div></div></li>
            <li class="elmnt-three"><div class="skew"><div class="wrap"><img src="slider_img/slider3.png" width="1000" height="563"></div></div></li>
            <li class="elmnt-four"><div class="skew"><div class="wrap"><img src="slider_img/slider4.png" width="1000" height="563"></div></div></li>
        </ul>
    </div>

    <div class="clear"></div>

    <div class="captions">
     <div class="focalPoint"><p><small>image_1</small></p></div>
     <div><p><small>image_2</small></p></div>
     <div><p><small>image_3</small></p></div>
     <div><p><small>image_4</small></p></div>
    </div>

    <button class="sldr-prv sldr-nav prev">Prev</button>
    <button class="sldr-nxt sldr-nav next">Next</button>

    

    <div class="clear"></div>

    <br>
    <br>
    <br>
    <br>
    <br>

</div>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.sldr.js"></script>
<script>

$( window ).load( function() {

    $( '.sldr' ).each( function() {
        var th = $( this );
        th.sldr({
            focalClass    : 'focalPoint',
            offset        : th.width() / 2,
            sldrWidth     : 'responsive',
            nextSlide     : th.nextAll( '.sldr-nav.next:first' ),
            previousSlide : th.nextAll( '.sldr-nav.prev:first' ),
            selectors     : th.nextAll( '.selectors:first' ).find( 'li' ),
            toggle        : th.nextAll( '.captions:first' ).find( 'div' ),
            sldrInit      : sliderInit,
            sldrStart     : slideStart,
            sldrComplete  : slideComplete,
            sldrLoaded    : sliderLoaded,
            sldrAuto      : true,
            sldrTime      : 5000,
            hasChange     : true
        });
    });

});

/**
 * Sldr Callbacks
 */

/**
 * When the sldr is initiated, before the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderInit( args ) {

}

/**
 * When individual slides are loaded
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideLoaded( args ) {

}

/**
 * When the full slider is loaded, after the DOM is manipulated
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function sliderLoaded( args ) {

}

/**
 * Before the slides change focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideStart( args ) {

}

/**
 * After the slides are done changing focal points
 * @param {object} args the slides, callback, and config of the slider
 * @return null
 */
function slideComplete( args ) {

}

</script>

</body>