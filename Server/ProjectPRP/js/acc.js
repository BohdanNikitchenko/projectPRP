function changeinfo() {
    document.getElementById('name').removeAttribute('disabled');
    document.getElementById('surename').removeAttribute('disabled');
    document.getElementById('father').removeAttribute('disabled');
    document.getElementById('mail').removeAttribute('disabled');

    document.getElementById('downloadphoto').style.visibility='visible';

    document.getElementById('numzno').style.visibility='visible';
    document.getElementById('bal1').removeAttribute('disabled');
    document.getElementById('bal2').removeAttribute('disabled');
    document.getElementById('bal3').removeAttribute('disabled');
    document.getElementById('bal4').removeAttribute('disabled');

    document.getElementById('zno2').removeAttribute('disabled');
    document.getElementById('zno3').removeAttribute('disabled');
    document.getElementById('zno4').removeAttribute('disabled');

    document.getElementById('save').style.visibility='visible';
};

function saveinfo(){
	document.getElementById('name').setAttribute("disabled", "disabled");
    document.getElementById('surename').setAttribute("disabled", "disabled");
    document.getElementById('father').setAttribute("disabled", "disabled");
    document.getElementById('mail').setAttribute("disabled", "disabled");

    document.getElementById('downloadphoto').style.visibility='hidden';

    document.getElementById('numzno').style.visibility='hidden';
    document.getElementById('bal1').setAttribute("disabled", "disabled");
    document.getElementById('bal2').setAttribute("disabled", "disabled");
    document.getElementById('bal3').setAttribute("disabled", "disabled");
    document.getElementById('bal4').setAttribute("disabled", "disabled");

    document.getElementById('zno2').setAttribute("disabled", "disabled");
    document.getElementById('zno3').setAttribute("disabled", "disabled");
    document.getElementById('zno4').setAttribute("disabled", "disabled");

    document.getElementById('save').style.visibility='hidden';
};