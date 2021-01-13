$(document).ready(function () {

    function calculateOrderPrice(){
        let subTotal = 0; 
        const shippingCost = 10;  
        $(".productDetails").each(function() { 
            let itemCost = $(this).find(".itemPrice").text();
            itemCost = parseFloat(itemCost.substring(0, itemCost.length - 1)); 
            itemNumber = parseInt($(this).find(".itemQuantity").val()); 
            subTotal += ((itemCost*10) * itemNumber)/10; 
            console.log(itemNumber);
            console.log(itemCost);

        });
        
        let total = subTotal + shippingCost;
        $("#orderInformation").find("#orderTotal > #totalPrice").text(Math.round(total*10)/10 + " €"); 
        $("#orderInformation").find("#orderShippingCost > #shippingCost").text(shippingCost + " €"); 
        $("#orderInformation").find("#orderSubTotal > #subTotalPrice").text(Math.round(subTotal*10)/10  + " €"); 

    }

    function checkItem(){ 
        if($(".productDetails").length < 1){
            $("#cartDetails").remove(); 
            $("div#noItem").show(); 
        }
    }
    // function addToCart(e) {
    //     e.preventDefault();
    //     let itemToAdd = $(e.target).find("input.productId").val();

    //     $.ajax({
    //         url: "gestioneCarrello.php",
    //         type: "POST",
    //         cache: false,
    //         data: {
    //             itemToAdd: itemToAdd
    //         },
    //         success: function () { 
    //             toastr.success("Prodotto aggiunto al carrello!"); 
    //         }
    //     });
    // }

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
        calculateOrderPrice(); 
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
        parent.parent().remove(); 
        checkItem(); 
        calculateOrderPrice(); 
         
    }

    $("div#noItem").hide(); 
    checkItem(); 
    calculateOrderPrice(); 

    // $(".addToCartForm").submit(function (e) {
    //     addToCart(e);
    // });

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