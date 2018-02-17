$( document ).ready(function() {
    function openSlideMenu(){
        $('#side-menu').css('width', '250px');
        $('#main').css('margin-left', '250px');
    }

    function closeSlideMenu(){
        $('#side-menu').css('width', '0');
        $('#main').css('margin-left', '0');
    }

    $('#button-open').click(function(){
        openSlideMenu();
    });    
    $('#button-close').click(function(){
        closeSlideMenu();
    });
});