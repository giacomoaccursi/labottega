$(document).ready(function () {
    $(window).scroll(function() {
        console.log("ciao"); 
        if ($(this).scrollTop() > 239){  
            $('.navbar-header, .search-header').slideUp("fast"); 
        }
        else{
            $('.navbar-header, .search-header').slideDown("fast"); 
        }
    });
 
});