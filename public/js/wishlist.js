$(document).ready(function () {

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

    function checkFooter() {
        
        if (!($(document).height() > $(window).height())) {
            console.log("footer"); 
            $("footer").css("position", "fixed");
            $("footer").css("bottom", 0);
            $("footer").css("width", "100%");
        }
    }


    function checkItem() {
        if ($(".productDetails").length < 1) {
            $("wishlistDetails").remove();
            $("div#noItem").show();
        }
    }

    function addToCart(e) {
        e.preventDefault();
        let itemToAdd = $(e.target).find("input.productId").val();

        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                itemToAdd: itemToAdd
            },
            success: function () { 
                updateCartQuantity(); 
            }
        });
    }

    function deleteItem(e) {
        let itemToDelete = $(e.target).find("input.productId").val(); 
        $.ajax({
            url: "gestione_wishlist.php",
            type: "POST",
            cache: false,
            data: {
                itemToDelete: itemToDelete
            }
        });
        e.target.closest(".productDetails").remove(); 
        checkItem();
        checkFooter(); 

    }

    $("div#noItem").hide();
    checkItem();
    checkFooter(); 

    $(".addToCartForm").submit(function (e) {
        addToCart(e);
    });

    $('.deleteItemFromWishList').submit(function (e) {
        deleteItem(e);
    });


}); 