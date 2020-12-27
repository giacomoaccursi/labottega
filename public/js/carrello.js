$(document).ready(function () {

    function addToCart(e){
        e.preventDefault();
        let productId = $(e.target).find("input.productId").val();
        $.ajax({
            url: "addToCart.php",
            type: "POST",
            cache: false,
            data: {
                productId: productId
            }
        });
    }

    function incrementValue(e) {
        e.preventDefault();
        let fieldName = $(e.target).data('field');
        let parent = $(e.target).closest('div');
        let productId = parent.siblings("input.productId").val();
        let currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            currentVal += 1;
        } else {
            currentVal = 1;
        }

        console.log(currentVal);
        parent.find('input[name=' + fieldName + ']').val(currentVal);
        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                productId: productId,
                currentVal: currentVal
            }
        });
    }

    function decrementValue(e) {
        e.preventDefault();
        let fieldName = $(e.target).data('field');
        let parent = $(e.target).closest('div');
        let productId = parent.siblings("input.productId").val();
        let currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        console.log(currentVal);
        if (!isNaN(currentVal) && currentVal < 1) {
            currentVal -= 1;
        } else {
            currentVal = 1;
        }
        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                productId: productId,
                currentVal: currentVal
            }
        });
        parent.find('input[name=' + fieldName + ']').val(currentVal);
    }


    function deleteItem(e) {
        let parent = $(e.target).closest('div');
        let productId = parent.siblings("input.productId").val();
        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                itemToDelete: productId
            }
        });
        parent.parent().fadeOut(); 
    }

    $(".addToCartForm").submit(function (e) {
       addToCart(e);  
    });

    $('.input-group').on('click', '.button-plus', function (e) {
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function (e) {
        decrementValue(e);
    });

    $('.deleteItem').click(function (e) {
        deleteItem(e);
    });


}); 