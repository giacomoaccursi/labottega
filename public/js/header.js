$(document).ready(function () {
    updateCartQuantity(); 

    function updateCartQuantity() {
        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                cartQuantity: true
            },
            success: function (value) {
                $(".cart-quantity").text(value);
            }
        });
    }

    $(window).scroll(function() {
        if ($(this).scrollTop() > 239){  
            $('.navbar-header, .search-header').slideUp("fast"); 
        }
        else{
            $('.navbar-header, .search-header').slideDown("fast"); 
        }
    });
 
});