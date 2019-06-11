$("#btnRes").on("click", function () {

    var Id_specialty = document.getElementById("inputSpec");

    var Name_Universities = document.getElementById("inputUniver");

    if( Name_Universities.value.length > 0){
        $.ajax({
            url: 'ajax/Budjet.php',
            type: 'POST',
            cache: false,
            data: {'Id_specialty' : Id_specialty.value, 'Name_Universities': Name_Universities.value},
            beforeSend: function () {
                $("#btnRes1").prop("disabled",true);
            },
            success:function (data) {
                //alert("qweqeqe");
                alert(data);
                /*if(data == "fail"){
                    alert("db insert error");
                }else{
                    //alert(data);
                    document.location.href = data;

                }*/

                $("#sendBtn1").prop("disabled",false);

            }
        });
    }
    //alert(Name_Specialty.value);
    res.style.display = "block";
});