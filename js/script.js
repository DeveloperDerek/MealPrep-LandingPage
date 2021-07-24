jQuery(document).ready(function($) {

    // hide modal tabs
    jQuery( '#modal2, #modal3, #modal4' ).hide();
    jQuery( '#price-modal, #modal-price2, #modal-price3, #gif-modal' ).hide();

    // show modal meal plan tab 1
    $( '#modal1-btn' ).click(function() {
        $( '#modal1' ).show();
        $( '#modal1-btn' ).addClass( 'active-btn' );
        $( '#modal2, #modal3, #modal4' ).hide();
        $( '#modal2-btn, #modal3-btn, #modal4-btn' ).removeClass( 'active-btn' );
    });

    // show modal meal plan tab 2
    $( '#modal2-btn' ).click(function() {
        $( '#modal2' ).show();
        $( '#modal2-btn' ).addClass( 'active-btn' );
        $( '#modal1, #modal3, #modal4' ).hide();
        $( '#modal1-btn, #modal3-btn, #modal4-btn' ).removeClass( 'active-btn' );
    });

    // show modal meal plan tab 3
    $( '#modal3-btn' ).click(function() {
        $( '#modal3' ).show();
        $( '#modal3-btn' ).addClass( 'active-btn' );
        $( '#modal1, #modal2, #modal4' ).hide();
        $( '#modal1-btn, #modal2-btn, #modal4-btn' ).removeClass( 'active-btn' );
    });
    
    // show modal meal plan tab 4
    $( '#modal4-btn' ).click(function() {
        $( '#modal4' ).show();
        $( '#modal4-btn' ).addClass( 'active-btn' );
        $( '#modal1, #modal2, #modal3' ).hide();
        $( '#modal1-btn, #modal2-btn, #modal3-btn' ).removeClass( 'active-btn' );
    });

    // slide meal modal button and show prices
    $( '#next-btn1' ).on("click", function() {
        $( this ).animate({ "left": 400 }, 750);
        setTimeout(() => {
            $( '#mealplan-modal' ).hide();
            $( '#price-modal' ).show();
        }, 751);
    });

    // show price modal tab 1
    $( '#basic-btn' ).click(function() {
        $( '#modal-price1' ).show();
        $( '#basic-btn' ).addClass( 'active-btn' );
        $( '#modal-price2, #modal-price3' ).hide();
        $( '#standard-btn, #ultra-btn' ).removeClass( 'active-btn' );
    });

    // show price modal tab 2
    $( '#standard-btn' ).click(function() {
        $( '#modal-price2' ).show();
        $( '#standard-btn' ).addClass( 'active-btn' );
        $( '#modal-price1, #modal-price3' ).hide();
        $( '#basic-btn, #ultra-btn' ).removeClass( 'active-btn' );
    });

    // show price modal tab 3
    $( '#ultra-btn' ).click(function() {
        $( '#modal-price3' ).show();
        $( '#ultra-btn' ).addClass( 'active-btn' );
        $( '#modal-price1, #modal-price2' ).hide();
        $( '#basic-btn, #standard-btn' ).removeClass( 'active-btn' );
    });

    // next button price modal to final gif modal
    $( '#next-btn2' ).click(function() {
        $( this ).animate( { "left": 310 }, 700);
        setTimeout(() => {
            $( '#price-modal' ).hide();
            $( '#gif-modal' ).show();
        }, 701);
    })

    // previous button1 price modal to meal plan modal
    $( '#prev-btn' ).on("click", function() {
        $( '#mealplan-modal' ).show();
        $( '#price-modal' ).hide();
        $( '#next-btn1').css('left', 0)
    });


    // previous button3 gif modal to price.modal
    $( '#prev-btn3' ).on("click", function() {
        $( '#price-modal' ).show();
        $( '#gif-modal' ).hide();
        $( '#next-btn2').css('left', 0)
    });


    // animate howitworks icons
    $( '.box' ).on('mouseover', function() {
        $(this).children('i')
            .animate({ fontSize: "75px" } )
    });
    $( '.box' ).on('mouseleave', function() {
        $(this).children('i')
            .animate({ fontSize: "50px" } )
    });
})