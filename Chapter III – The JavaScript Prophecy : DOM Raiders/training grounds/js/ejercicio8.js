function validarForm() {
    /* TEXT */
    if (form1.txt_Name.value == null || form1.txt_Name.value.length == 0 || /^\s+$/.test(form1.txt_Name.value)) {//validar campo vacio
        alert('Insert your name');//enviar mensaje
        form1.txt_Name.focus();//enviar el cursor al campo instituto    
        return false;
    }
    /* NUMBER */
    if (form1.txt_Age.value.length == 0 || isNaN(form1.txt_Age.value)) {
        if (form1.txt_Age.value.length == 0) {
            alert('insert your age');
        } else if (isNaN(form1.txt_Age.value)) {
            alert('the age is number')
        }
        form1.txt_Age.focus();
        return false;
    }
    /* RADIO BUTTON */
    var seleccionado = false;
    for (var index = 0; index < form1.rad_Sex.length; index++) {
        if (form1.rad_Sex[index].checked) {
            seleccionado = true;
            break;
        }
    }
        if (!seleccionado) {
            alert('Select a sex');
            form1.rad_Sex[0].focus();
            return false;
        }
    

    /* telephone NUMBER */
    if (form1.txt_Telephone.value.length == 0 || !(/^\d{9}$/.test(txt_Telephone.value))) {
        alert('The telephone number');
        form1.txt_Telephone.focus();
        return false;
    }

    /* LIST */
    if (form1.lst_MaritalEstatus.value.length == 0 || form1.lst_MaritalEstatus.value == "Select..") {
        alert('Select marital estatus')
        form1.lst_MaritalEstatus.focus();
        return false;
    }
    /* CHECK */
    if (!form1.color1.checked && !form1.color2.checked && !form1.color3.checked) {
        alert('Select a color');
        form1.color1.focus();
        return false;
    }
    /* MAIL */
    if (!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(form1.txt_Mail.value))) {
        alert('verified email');
        form1.txt_Mail.focus();
        return false;
    }
    return true;
}