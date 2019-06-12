$("#btnRes").on("click", function () {

    var Id_specialty = document.getElementById("inputSpec");
    var Name_Universities = document.getElementById("inputUniver");
    $result = 0;
    $success = false;
    if( Name_Universities.value.length > 0 && Id_specialty.value.length > 0){
        $.ajax({
            url: 'ajax/Budjet.php',
            type: 'POST',
            cache: false,
            data: {'Id_specialty' : Id_specialty.value, 'Name_Universities': Name_Universities.value},
            beforeSend: function () {
                $("#btnRes").prop("disabled",true);
            },
            success:function (data) {
                //alert("qweqeqe");
                alert(data);
                if(data == "fail"){
                    alert("db select error");
                }else{
                    //alert(data);
                    //document.location.href = data;
                    $result = data;
                    $success = true;
                }
                $("#sendBtn").prop("disabled",false);
            }
        });
    }
    //alert(Name_Specialty.value);
    //res.style.display = "block";
});

function Probability(min_budg) {

}