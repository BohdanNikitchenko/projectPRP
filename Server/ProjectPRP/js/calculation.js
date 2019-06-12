$("#btnRes").on("click", function () {
    //let errorMes;
    let error = document.getElementById("error");
    let res = document.getElementById("result");
    error.innerText="";
    var Id_specialty = document.getElementById("inputSpec");
    var Name_Universities = document.getElementById("inputUniver");
    //var flag = true;
    if(Name_Universities.value.length <= 0){
        error.innerHTML = "Університет не обран";
        res.style.display = "none";
        return;
    }
    if(Id_specialty.value.length <= 0){
        error.innerHTML = "Спеціальність не обрана";
        res.style.display = "none";
        return;
    }
    /*$.ajax({
        url: 'ajax/validateSpec.php',
        type: 'POST',
        cache: false,
        data: {'Id_specialty' : Id_specialty.value, 'Name_Universities': Name_Universities.value},
        // отключаем обработку передаваемых данных, пусть передаются как есть
        processData : false,
        beforeSend: function () {
            $("#btnRes").prop("disabled",true);
        },
        success:function (data) {
            //alert("qweqeqe");
            //alert(data);
            if(data == "fail"){
                alert("db select error");
            }
                 alert(data);
                 if(data === "bad"){
                     //alert('error');

                     error.innerHTML = "Данна спеціальність відсутня в обраному вузі";
                     $("#btnRes").prop("disabled",false);
                 }
                //alert(data);
                 //alert(data);
                //alert(b);

           // $("#btnRes").prop("disabled",false);
        }
    });*/
    //let result = 0;
    //alert(flag);
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
                //alert(data);
                if(data == "fail"){
                    alert("db select error");
                }else{
                    //alert(data);
                    //document.location.href = data;
                    let result = data;
                    $success = true;
                    var b = Probability(result);
                    //alert(b);
                }
                $("#btnRes").prop("disabled",false);
            }
        });
    }else {
        //Id_specialty.style.borderColor = "#FF0000";

    }
    //alert(Name_Specialty.value);
    //res.style.display = "block";
    return;
});

function Probability(result) {
    let error = document.getElementById("error");
    let res = document.getElementById("result");
    var stringArray = result.split(",");
    let min = stringArray[0];
    let current = 0;
    var kArr = new Array();
    kArr["Математика"] = stringArray[1];
    kArr["Українська мова та література"] = stringArray[2];
    kArr["Англійська мова"] = stringArray[3];
    kArr["Фізика"] = stringArray[4];
    kArr["Історія України"] = stringArray[5];
    kArr["Біологія"] = stringArray[6];
    kArr["Географія"] = stringArray[7];
    kArr["Хімія"] = stringArray[8];
    kArr["Школа"] = stringArray[9];
    //let res = kArr["Українська мова та література"];
    let selectSubj1=document.getElementById("selectSubj1").value;
    let selectSubj2=document.getElementById("selectSubj2").value;
    let selectSubj3=document.getElementById("selectSubj3").value;
    let Subj1Mark=document.getElementById("Subj1Mark").value;
    let Subj2Mark=document.getElementById("Subj2Mark").value;
    let Subj3Mark=document.getElementById("Subj3Mark").value;
    let SchoolMark = document.getElementById("Subj4Mark").value;
    //alert(selectSubj3);
    let markArr = new Array();
    markArr[selectSubj1] = Subj1Mark;
    markArr[selectSubj2] = Subj2Mark;
    markArr[selectSubj3] = Subj3Mark;
    markArr["Школа"] = SchoolMark;
    //alert(selectSubj1);
/*    if(res.length == 0){
        alert(res);
    }else{
        alert(kArr["Українська мова та література"]*"150");
    }*/
    /*for (let i in markArr){
        alert(i);
    }*/

    for (var i in markArr){
        if(kArr[i].length > 0){
            current+= markArr[i] * kArr[i];
            //alert(current);
        }else {
            res.style.display = "none";
            error.innerHTML = i + " не підходить для вступу на цю специальність";
            //alert(i + "не подходит для поступления на эту специальность");
            return false;
        }
    }
    //alert(current);
    mesProbability(min, current);
    return true;
        //alert("Ключ = " + i + "; Значение = " + array[i]);
    //alert(markArr["Історія України"]);

    /*for(var str in stringArray)
        alert(stringArray[str]);*/
}

function mesProbability(min, current) {
    let probability = 0;
    let mes;
    let difference = current - min;
    //alert(difference);
    if(difference > 0 && difference <= 2){
        mes = "Середня вірогідність вступу. Поточний результат приблизно співпадає з прохідним балом попереднього року";
        probability = 60;
    }
    if(difference > 2 && difference <= 5){
        mes = "Середня вірогідність вступу. Поточний результат трохи більший за прохідний бал попереднього року";
        probability = 65;
    }
    if(difference > 5 && difference <= 7){
        mes = "Висока вірогідність вступу. Поточний результат більший за прохідний бал попереднього року";
        probability = 70;
    }
    if(difference > 7 && difference <= 10){
        mes = "Висока вірогідність вступу. Поточний результат більший за прохідний бал попереднього року";
        probability = 80;
    }
    if(difference > 10){
        mes = "Висока вірогідність вступу. Поточний результат значно більший за прохідний бал попереднього року";
        probability = 100;
    }
    if(difference < 0 && difference >= -2){
        mes = "Вірогідність вступу нижче середнього. Поточний результат трохи менше за прохідний бал попереднього року";
        probability = 45;
    }
    if(difference < -2 && difference >= -5){
        mes = "Вірогідність вступу малоймовірна. Поточний результат менше за прохідний бал попереднього року";
        probability = 40;
    }
    if(difference < -5 && difference >= -10){
        mes = "Вірогідність вступу низька. Поточний результат менше за прохідний бал попереднього року";
        probability = 20;
    }
    if(difference < -10 && difference >= -20){
        mes = "Вірогідність вступу дуже низька. Поточний результат значно менше за прохідний бал попереднього року";
        probability = 10;
    }
    if(difference < -20){
        mes = "Вступ з поточними балами на данну спеціальність неможливий.";
        probability = 1;
    }
    let res = document.getElementById("result");
    res.style.display = "block";
    let val = document.getElementById("value");
    //let pr = document.getElementById("probability");
    let tx = document.getElementById("text");
    let m = document.getElementById("min");
    let c = document.getElementById("current");
    let progress = document.getElementById("progress");
    val.innerHTML = probability.toString() + "%";
    //pr.innerHTML=probability.toString();
    tx.innerHTML= mes.toString();
    m.innerHTML="Мінімальний прохідний бал минулого року: " + min.toString();
    c.innerHTML = "Поточний бал: " + current.toString();
    progress.value = probability.toString();

}