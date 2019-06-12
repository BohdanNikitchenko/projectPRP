
$(document).on('click', '#search_btn', function () {
    let search_inp =$("#search_inp").val();
    var id = $("#button_value").val();
    $.ajax({
        url: 'ajax/search_vnz.php',
        type: 'POST',
        cache: false,
        data: {'search_inp' : search_inp,id:id},
        success:function (data) {
            if (data != '') {
                $('#search_btn').html("Пошук");
                $('#load_div').remove();
                $('#conteiner_more').remove();
                $('#load_all').append(data);
            } else {
                $('#conteiner_more').remove();

                $('#search_btn').html("Запит не вірний");
            }
        }
    });
});

$(document).on('click', '#search_btn_more', function () {
    let search_inp =$("#search_inp_more").val();
    var id = $("#button_value").val();
    $.ajax({
        url: 'ajax/search_vnz.php',
        type: 'POST',
        cache: false,
        data: {'search_inp' : search_inp,id:id},
        success:function (data) {
            if (data != '') {
                $('#search_btn').html("Пошук");
                $('#load_div').remove();
                $('#conteiner_more').remove();
                $('#load_all').append(data);
            } else {

                $('#conteiner_more').remove();
                $('#search_btn').html("Запит не вірний");
            }
        }
    });
});