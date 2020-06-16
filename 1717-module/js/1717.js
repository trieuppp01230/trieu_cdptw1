$(document).ready(function(){

    $(".nav_menu_list_item_link").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
        if ($(".nav_menu_list_item_link").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");
        
    });
});