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
$("#EditBtn").on("click",function () {

document.getElementById("SubjL").style.visibility='visible';
});
$("#SaveEditBtn").on("click",function () {
    let SerName=$("#SerName").val().trim();
    let name =$("#name").val().trim();
    let ThirdName=$("#ThirdName").val().trim();
    let email=$("#email").val().trim();
    let password=$("#password").val().trim();
    let NewPassword=$("#NewPassword").val().trim();
    let selectSubj1=$("#selectSubj1").val().trim();
    let selectSubj2=$("#selectSubj2").val().trim();
    let selectSubj3=$("#selectSubj3").val().trim();


    $.ajax({
        url: 'ajax/Edition.php',
        type: 'POST',
        cache: false,
        data: {'SerName' : SerName, 'name': name, 'ThirdName' : ThirdName, 'email' : email, 'password' : password, 'NewPassword' : NewPassword,'selectSubj1' : selectSubj1,'selectSubj2' : selectSubj2,'selectSubj3' : selectSubj3},
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















