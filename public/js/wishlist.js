$(document).ready(function () {
    function checkItem() {
        if ($(".productDetails").length < 1) {
            $("wishlistDetails").remove();
            $("div#noItem").show();
        }
    }

    function addToCart(e) {
        e.preventDefault();
        let itemToAdd = $(e.target).find("input.productId").val();
        console.log(itemToAdd); 

        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                itemToAdd: itemToAdd
            },
            success: function () { 
                toastr.success("Prodotto aggiunto al carrello!"); 
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
        e.target.closest("itemContainer").remove(); 
        checkItem();

    }

    $("div#noItem").hide();
    checkItem();

    $(".addToCartForm").submit(function (e) {
        addToCart(e);
    });

    $('.deleteItemFromWishList').submit(function (e) {
        deleteItem(e);
    });


}); 