jQuery(document).ready(function($) {

    // hide modal tabs
    jQuery( '#modal2, #modal3, #modal4' ).hide();

    // show modal tab 1
    $( '#modal1-btn' ).click(function() {
        $( '#modal1' ).show();
        $( '#modal2, #modal3, #modal4' ).hide();
    })

    // show modal tab 2
    $( '#modal2-btn' ).click(function() {
        $( '#modal2' ).show();
        $( '#modal1, #modal3, #modal4' ).hide();
    })
    

    // show modal tab 3
    $( '#modal3-btn' ).click(function() {
        $( '#modal3' ).show();
        $( '#modal1, #modal2, #modal4' ).hide();
    })
    
    // show modal tab 4
    $( '#modal4-btn' ).click(function() {
        $( '#modal4' ).show();
        $( '#modal1, #modal2, #modal3' ).hide();
    })
})

