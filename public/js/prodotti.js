$(document).ready(function () {

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
                toastr.success("Prodotto aggiunto al carrello!");
            }
        });
    }

    function addToWishList(e) {
        e.preventDefault();
        let itemToAdd = $(e.target).find("input.productId").val();
        console.log(itemToAdd); 

        $.ajax({
            url: "gestione_wishlist.php",
            type: "POST",
            cache: false,
            data: {
                itemToAdd: itemToAdd
            },
        });
    }

    $(".addToCartForm").submit(function (e) {
        addToCart(e);
    });

    $(".addToWishListForm").submit(function (e) {
        addToWishList(e);
    });
});