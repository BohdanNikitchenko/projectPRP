$("#like_button").on('click', function (e) {
    let id =$("#getId").val();
    let value =$("#like_btn").val();

    $.ajax({
        url: 'ajax/favorite.php',
        type: 'POST',
        cache: false,
        data: {id: id,value:value},

        success:function (data) {

        }
    });
})

