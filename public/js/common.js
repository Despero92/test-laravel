"use strict";

//  Makes the form validation
( function () {
    function validator( elem, regexp, titleEmpty, titleError ) {
        var value = elem.val();
        elem.tooltip( 'dispose' );
        if ( value.length === 0 ) {
            elem.addClass( 'denied' );
            elem.removeClass( 'granted' );
            elem.tooltip( {
                trigger: 'manual',
                placement: 'right',
                title: titleEmpty
            } ).tooltip( 'show' );
            return false;
        }
        if ( regexp.test( value ) ) {
            elem.addClass( 'granted' );
            elem.removeClass( 'denied' );
            elem.tooltip( 'dispose' );
            return true;
        } else {
            elem.addClass( 'denied' );
            elem.removeClass( 'granted' );
            elem.tooltip( {
                trigger: 'manual',
                placement: 'right',
                title: titleError
            } ).tooltip( 'show' );
            return false;
        }
    }
    var name = $( "#name" ),
        email = $( "#email" ),
        message = $("#message"),
        form = $( "#form" );
    var app = {
        initialize: function () {
            this.setUpListeners();
        },
        setUpListeners: function () {
            form.on( 'submit', app.submitForm );
            form.on( 'keydown', '.has-error', app.removeError );
            email.on( 'blur', app.requestEmail );
        },
        submitForm: function ( e ) {
            //e.preventDefault();
            var form = $( 'form' ),
                submitBtn = form.find( 'input[type="submit"]' );

            if ( app.checkValidate() === false ) return false;
            submitBtn.attr( {
                disabled: 'disabled'
            } );
        },
        checkValidate: function () {
            if ( app.validateName() === false ) return false;
            if ( app.validateEmail() === false ) return false;
            if ( app.validateMessage() === false ) return false;
        },
        validateName: function () {
            var regexp = /^([A-ZА-ЯЁ]{1}[a-zA-Zа-яёА-ЯЁ]+\s?){1,2}$/;
            return validator( name, regexp, 'Enter your name', 'Wrong name' );
        },
        validateEmail: function () {
            var regexp = /^([a-z0-9_-]{1,15}\.){0,3}[a-z0-9_-]{1,15}@[a-z0-9_-]{1,15}\.[a-z]{2,6}$/u;
            return validator( email, regexp, 'Enter your email', 'Wrong email' );
        },
        validateMessage: function () {
            var regexp = /("'\+)?[a-zA-Zа-яёА-ЯЁ0-9]+(\s{0,3})[!\?,\.:-]*("')?(@?\s*\.*)/gu;
            return validator( message, regexp, 'Enter your message', 'error')
        },
        removeError: function () {
            $( this ).removeClass( 'has-error' ).find( 'input' ).tooltip( 'destroy' );
        }
    }
    app.initialize();
}());

$( document ).ready( function () {
    heightDetect();
    hideSlider();
    clickHamburger();
    $( ".right " ).animated( "fadeInLeft", "fadeOutLeft" );
    $( ".left " ).animated( "fadeInRight", "fadeOutRight" );
    var swiper = new Swiper( '.swiper-container', {
        pagination: '.swiper-pagination',
        direction: 'vertical',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 0,
        loop: true,
        autoplay: 5000,
        mousewheelControl: false
    } );
    var containerEl = document.querySelector( '.mixitup' );
    var mixer = mixitup( containerEl );
    var imgHeight = [];
    $( ".image-box" ).each( function () {
        var el = $( this );
        imgHeight.push( el.outerHeight() );
    } );
    $( '.popup' ).magnificPopup( {
        closeOnContentClick: true,
        closeBtnInside: false
    } );
    $("#nav").find("li").click( function(){
        $("#nav li").removeClass('active');
        $(this).addClass('active');
    });
    $("#nav ul li a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector:"#navigation-menu ul li a"
    });

    /* demo functions */
    $("a[rel='next']").click(function(e){
        e.preventDefault();
        var to=$(this).parent().parent("section").next().attr("id");
        $.mPageScroll2id("scrollTo",to);
    });


    function heightDetect() {
        $( ".swiper-container, .bg-image-box" ).css( "height", $( window ).height() );
        $( window ).resize( function () {
            $( ".swiper-container, .bg-image-box" ).css( "height", $( window ).height() );
        } );
    }

    function hideSlider() {
        $( window ).resize( function () {
            var w = $( window ).width();
            if ( w <= 820 ) {
                $( ".bg-image-box" ).show();
            } else {
                $( ".bg-image-box" ).hide();
            }
        } );
    }

    var menu = $("#nav").find( "ul" );

    function clickHamburger() {
        $( ".hamburger" ).click( function ( e ) {
            $( this ).toggleClass( "is-active" );
            e.preventDefault();
            menu.slideToggle();
        } );
    }

    function calcHeight( elem ) {
        var boxHeight = [],
            result = [];
        $( elem ).each( function () {
            var el = $( this );
            boxHeight.push( el.outerHeight( true ) );
        } );
        var boxLength = boxHeight.length;
        boxHeight.splice( -1, 1 );
        for ( var j = 0; j < boxLength; j++ ) {
            result.push( boxHeight[ j ] - imgHeight[ j ] );
        }
        return result;
    }
    var result = calcHeight( ".about_theme" );
    function animateLine() {
        result = calcHeight( ".about_theme" );
        $( ".line-box" ).each( function ( i ) {
            $( this ).css( "top", imgHeight[ i ] ).waypoint( function ( direction ) {
                if ( direction === "down" ) {
                    $( this ).animate( { height: result[ i ] + 5, opacity: 1 }, 1800 );
                } else {
                    $( this ).animate( { height: 0, opacity: 1 }, 1600 );
                }
            }, {
                offset: "70%"
            } ).waypoint( function ( direction ) {
                if ( direction === "down" ) {
                    $( this ).animate( { height: result[ i ] + 5, opacity: 1 }, 1800 );
                } else {
                    $( this ).animate( { height: 0, opacity: 1 }, 1600 );
                }
            }, {
                offset: "80%"
            } );
        } );
    }

    function sliderTitlePos() {
        var $s = $( document.getElementsByClassName( "slider-title-box" ) ),
            margin = -($s.height() / 2);
        $s.css( "margin-top", margin ).css( "margin-left", margin );
        $( window ).resize( function () {
            $s.css( "margin-top", margin ).css( "margin-left", margin );
        } );
    }

    $( ".mixitup-controls li button" ).click( function () {
        $( ".mixitup-controls li button" ).removeClass( 'active-button' );
        $( this ).addClass( 'active-button' );
    } );
    //heightDetect();
    animateLine();
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();

    $("#tabs").click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
} );
$( window ).load( function () {
    $( ".loader_inner" ).fadeOut();
    $( ".loader" ).delay( 100 ).fadeOut( "slow" );
} );



