$(function () {
    $(".box").slice(0,4).show();

    $("loadMore").on('click', function (e) {
        e.preventDefault();

        $(".box:hidden").slice(0,5).slideDown();
        if ($(".box:hidden").length == 0){
            $("#load").fadeOut('slow');
        }

        $('html,body').animate({
            scrollTop: $(this).offset().top
        },1500);
    })
})