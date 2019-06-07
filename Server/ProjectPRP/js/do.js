//Регестрация
$("#sendBtn").on("click", function () {

    let email = $("#inputEmail").val().trim();
    let pass= $("#inputPassword").val().trim();
    let name =$("#inputName").val().trim();
    let surname=$("#inputsurname").val().trim();
    let thirdname =$("#inputThirdName").val().trim();
    let selectsubj1=$("#selectSubj1").val().trim();
    let selectsubj2=$("#selectSubj2").val().trim();
    let selectsubj3=$("#selectSubj3").val().trim();


    if(email==="" || pass==="" || name==="" || surname==="" || thirdname==="" || selectsubj1==="" || selectsubj2==="" || selectsubj3===""){
        alert("error");
        return 0;
    }
    $.ajax({
        url: 'ajax/registration.php',
        type: 'POST',
        cache: false,
        data: {'email' : email, 'pass': pass, 'name' : name, 'surname' : surname, 'thirdname' : thirdname, 'subject1' : selectsubj1, 'subject2' : selectsubj2,'subject3' : selectsubj3},
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










