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



