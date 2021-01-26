$(document).ready(function(){
    $(".deleteItem").click(function(e){
        const notificationId = $(this).parent('td').parent('tr').find('td:first-child').text();
        $.ajax({
            url: "notifications.php",
            type: "POST",
            cache: false,
            data: {
                notificationToDelete: notificationId
            }
        });
        $(this).parent('td').parent('tr').remove();
    });
});