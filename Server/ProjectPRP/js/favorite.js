$("#like_button").on('click', function (e) {
    let id =$('#getId').val();
    let value=document.getElementById("like_button").value;
    alert(id);
alert(value.innerHTML);
    $.ajax({
        url: 'ajax/favorite.php',
        type: 'POST',
        cache: false,
        data: {id: id, value:value},
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
})

