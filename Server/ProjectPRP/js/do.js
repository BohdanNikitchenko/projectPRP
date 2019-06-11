//Регестрация
$("#sendBtn").on("click", function () {

    let email = $("#inputEmail").val().trim();
    let pass= $("#inputPassword").val().trim();
    let name =$("#inputName").val().trim();
    let surname=$("#inputsurname").val().trim();
    let thirdname =$("#inputThirdName").val().trim();
    let phone =$("#inputPhone").val().trim();



    if(email==="" || pass==="" || name==="" || surname==="" || thirdname===""){
        alert("error");
        return 0;
    }
    $.ajax({
        url: 'ajax/registration.php',
        type: 'POST',
        cache: false,
        data: {'email' : email, 'pass': pass, 'name' : name, 'surname' : surname, 'thirdname' : thirdname, 'phone' : phone},
        beforeSend: function () {
            $("#sendBtn").prop("disabled",true);
        },
        success:function (data) {

            if(data == "fail"){
                alert("db insert error");
            }else{
                document.location.href = data;
            }

            $("#sendBtn").prop("disabled",false);
        }
    });
});
// Рейтинг специальностей
$("#Rate").on("click", function () {
    let SpecNum = $("#SpecInput").val().trim().substring(0, 3);

    $.ajax({
        url: 'ajax/rating.php',
        type: 'POST',
        cache: false,
        data: {'SpecNum' : SpecNum},
        beforeSend: function () {
            $("#Rate").prop("disabled",true);
        },
        success:function (data) {
        alert(data);
            if(data == "fail"){
                alert("db insert error");
            }else{
                document.location.href = data;
            }

            $("#Rate").prop("disabled",false);
        }
    });
});


//авторизация
$("#Sbut").on("click",function () {
    let login=$("#inputEmail").val().trim();
    let password=$("#inputPassword").val().trim();

    $.ajax({
        url: 'ajax/autorization.php',
        type: 'POST',
        cache: false,
        data: {'login':login,'password':password},
        beforeSend: function () {
            $("#Sbut").prop("disabled",true);
        },
        success:function (data) {
            if(data == "fail"){
                alert("db insert error");
            }else{
                document.location.href = data;
            }

            $("#Sbut").prop("disabled",false);
        }
    });
});
//Выход с акаунта
$("#ex").on("click",function(){
    document.location.href = "http://localhost/dashboard/projectPRP/autorization.php";
});



//Редактирование
$("#SaveEditBtn").on("click",function () {
        let SerName=$("#SerName").val().trim();
    let name =$("#name").val().trim();
    let ThirdName=$("#ThirdName").val().trim();
    let email=$("#email").val().trim();
    let phone=$("#phone").val().trim();
    let password=$("#password").val().trim();
    let NewPassword=$("#NewPassword").val().trim();
    let selectSubj1=$("#selectSubj1").val().trim();
    let selectSubj2=$("#selectSubj2").val().trim();
    let selectSubj3=$("#selectSubj3").val().trim();
    let Subj1Mark=$("#Subj1Mark").val().trim();
    let Subj2Mark=$("#Subj2Mark").val().trim();
    let Subj3Mark=$("#Subj3Mark").val().trim();



    $.ajax({
        url: 'ajax/Edition.php',
        type: 'POST',
        cache: false,
        data: {'SerName' : SerName, 'name': name, 'ThirdName' : ThirdName, 'email' : email,'phone' : phone, 'password' : password, 'NewPassword' : NewPassword,'selectSubj1' : selectSubj1,'selectSubj2' : selectSubj2,'selectSubj3' : selectSubj3, 'Subj1Mark': Subj1Mark,'Subj2Mark': Subj2Mark, 'Subj3Mark': Subj3Mark},
        beforeSend: function () {
            $("#sendBtn").prop("disabled",true);
        },
        success:function (data) {
            document.getElementById('p1').innerText=SerName+" "+name+" "+ThirdName;
            if(data == "fail"){
                alert("db insert error");
            }else{

                document.location.href = data;
            }

            $("#sendBtn").prop("disabled",false);
        }
    });
});


//Редактирования фото
var files; // переменная. будет содержать данные файлов
files = this.files;
// заполняем переменную данными, при изменении значения поля file
// обработка и отправка AJAX запроса при клике на кнопку upload_files
$('input[type=file]').on('change', function( event ){

    files = this.files;

    event.stopPropagation(); // остановка всех текущих JS событий
    event.preventDefault();  // остановка дефолтного события для текущего элемента - клик для <a> тега

    // ничего не делаем если files пустой
    if( typeof files == 'undefined' ) return;

    // создадим объект данных формы
    var data = new FormData();

    // заполняем объект данных файлами в подходящем для отправки формате
    $.each( files, function( key, value ){
        data.append( key, value );
    });
    let filePath;
    // добавим переменную для идентификации запроса
    data.append( 'my_file_upload', 1 );

    // AJAX запрос
    $.ajax({
        url         : 'ajax/changePhoto.php',
        type        : 'POST', // важно!
        data        : data,
        cache       : false,
        dataType    : 'json',
        // отключаем обработку передаваемых данных, пусть передаются как есть
        processData : false,
        // отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
        contentType : false,
        // функция успешного ответа сервера
        success     : function( respond, status, jqXHR ){

            // ОК - файлы загружены
            if( typeof respond.error === 'undefined' ){
                // выведем пути загруженных файлов в блок '.ajax-reply'
                var files_path = respond.files;
                filePath = files_path;
                var html = '';
                $.each( files_path, function( key, val ){
                    html += val +'<br>';
                } )
                $('.ajax-reply').html( html );
                window.location.reload();
            }

            // ошибка
            else {
                console.log('ОШИБКА: ' + respond.error );
            }
        },
        // функция ошибки ответа сервера
        error: function( jqXHR, status, errorThrown ){
            console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
        }

    });
});


/*$('#ChangePhotoBtn').on( 'click', function( event ){

    event.stopPropagation(); // остановка всех текущих JS событий
    event.preventDefault();  // остановка дефолтного события для текущего элемента - клик для <a> тега

    // ничего не делаем если files пустой
    if( typeof files == 'undefined' ) return;

    // создадим объект данных формы
    var data = new FormData();

    // заполняем объект данных файлами в подходящем для отправки формате
    $.each( files, function( key, value ){
        data.append( key, value );
    });
    let filePath;
    // добавим переменную для идентификации запроса
    data.append( 'my_file_upload', 1 );

    // AJAX запрос
    $.ajax({
        url         : 'ajax/changePhoto.php',
        type        : 'POST', // важно!
        data        : data,
        cache       : false,
        dataType    : 'json',
        // отключаем обработку передаваемых данных, пусть передаются как есть
        processData : false,
        // отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
        contentType : false,
        // функция успешного ответа сервера
        success     : function( respond, status, jqXHR ){

            // ОК - файлы загружены
            if( typeof respond.error === 'undefined' ){
                // выведем пути загруженных файлов в блок '.ajax-reply'
                var files_path = respond.files;
                filePath = files_path;
                var html = '';
                $.each( files_path, function( key, val ){
                    html += val +'<br>';
                } )
                $('.ajax-reply').html( html );
                window.location.reload();
            }

            // ошибка
            else {
                console.log('ОШИБКА: ' + respond.error );
            }
        },
        // функция ошибки ответа сервера
        error: function( jqXHR, status, errorThrown ){
            console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
        }

    });
});*/




//Тесты Рейтинг

if(document.getElementById("01").cheked){
    alert("fdtuyujlkjhjhj");
}

//VNZ
$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
});








