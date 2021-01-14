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

        $.ajax({
            url: "gestione_wishlist.php",
            type: "POST",
            cache: false,
            data: {
                itemToAdd: itemToAdd
            },
        });
        $(e.target).removeClass("addToWishListForm");
        $(e.target).addClass("removeFromWishListForm");
        $(e.target).find("i").removeClass("far");
        $(e.target).find("i").addClass("fas");
        $(e.target).find("i").addClass("red-icon");


    }

    function removeFromWishList(e) {
        e.preventDefault();
        let itemToDelete = $(e.target).find("input.productId").val();
        $.ajax({
            url: "gestione_wishlist.php",
            type: "POST",
            cache: false,
            data: {
                itemToDelete: itemToDelete
            },
        });
        $(e.target).removeClass("removeFromWishListForm");
        $(e.target).addClass("addToWishListForm");
        $(e.target).find("i").removeClass("fas");
        $(e.target).find("i").addClass("far");
        $(e.target).find("i").removeClass("red-icon");
    }

    $(".addToCartForm").submit(function (e) {
        addToCart(e);
    });

    $(document).on("submit", "form.addToWishListForm", function(e){
        addToWishList(e);
    })
    $(document).on("submit", "form.removeFromWishListForm", function(e){
        removeFromWishList(e);
    })
});