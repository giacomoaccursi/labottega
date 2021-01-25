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
                if(!$.isNumeric(value)){
                    value = 0;
                }
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

    function calculateOrderPrice() {
        let subTotal = 0;
        const shippingCost = 10;
        $(".productDetails").each(function () {
            let itemCost = $(this).find(".itemPrice").text().replace(/,/g, ".");
            itemCost = parseFloat(itemCost.substring(0, itemCost.length - 1)).toFixed(2);
            itemNumber = parseFloat($(this).find(".itemQuantity").val());
            subTotal += itemCost * itemNumber;

        });

        let total = subTotal + shippingCost;
        $("#orderInformation").find("#orderSubTotal > #subTotalPrice").text(subTotal.toString().replace(".", ",") + " €");
        $("#orderInformation").find("#orderTotal > #totalPrice").text(total.toString().replace(".", ",") + " €");
        $("#orderInformation").find("#orderShippingCost > #shippingCost").text(shippingCost + " €");

    }

    function checkItem() {
        if ($(".productDetails").length < 1) {
            $("#cartDetails").remove();
            $("div#noItem").show();
        }
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
        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                productId: productId,
                currentVal: currentVal
            },
            success: function (data) {
                if (data == false) {

                    currentVal -= 1;
                    $(e.target).closest(".productDetails").prev(".notAvailableQuantity").fadeIn().delay(3000).fadeOut();
                }
                parent.find('input[name=' + fieldName + ']').val(currentVal);
                calculateOrderPrice();
                updateCartQuantity(); 
            }
        });
    }

    function decrementValue(e) {
        e.preventDefault();
        let fieldName = $(e.target).data('field');
        let parent = $(e.target).closest('div');
        let productId = parent.siblings("input.productId").val();
        let currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
        if (!isNaN(currentVal) && currentVal > 1) {
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
        calculateOrderPrice();
        updateCartQuantity(); 
    }



    function changeValue(e) {
        e.preventDefault();
        let parent = $(e.target).closest('div');
        let productId = parent.siblings("input.productId").val();
        let currentVal = parseInt($(e.target).val(), 10);
        if (isNaN(currentVal)) {
            currentVal = 1;
        }

        $.ajax({
            url: "gestioneCarrello.php",
            type: "POST",
            cache: false,
            data: {
                productId: productId,
                currentVal: currentVal
            },
            success: function (data) {
                if (data == false) {
                    $(e.target).closest(".productDetails").prev(".notAvailableQuantity").fadeIn().delay(3000).fadeOut();
                    currentVal = 1;
                }
                $(e.target).val(currentVal);
                calculateOrderPrice();
                updateCartQuantity(); 
            }
        });
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
            },
            success: function () {
                updateCartQuantity();
            }
        });
        parent.parent().remove();
        checkItem();
        calculateOrderPrice();
        checkFooter();

    }



    $("div#noItem").hide();
    $(".notAvailableQuantity").hide();
    checkItem();
    calculateOrderPrice();
    checkFooter();


    $('.input-group').on('click', '.button-plus', function (e) {
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function (e) {
        decrementValue(e);
    });

    $('.input-group').on('focusout', '.itemQuantity', function (e) {
        changeValue(e);
    });


    $('.deleteItem').click(function (e) {
        deleteItem(e);
    });


}); 