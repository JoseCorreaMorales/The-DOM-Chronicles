function validarForm() {
    /* Observaciones */
    if (form1.Observaciones.value == null || form1.Observaciones.value.length == 0 
    || /^\s+$/.test(form1.Observaciones.value)) {
        alert('¡Hey! insert an observation 👀');
        form1.Observaciones.focus();
        return false;
    }
    
    /*Boton radio*/
    var seleccionado = false;
    for (var index = 0; index < form1.rad_tamano.length; index++) {
        if (form1.rad_tamano[index].checked) {
            seleccionado = true;
            break;
        }
    }
        if (!seleccionado) {
            alert('¡Hey! Please select a size ');
            form1.rad_tamano[0].focus();
            return false;
        }
    
    /*Lista */
    if (form1.lst_Color.value.length == 0 || form1.lst_Color.value == "Select a color...") {
        alert('¡Hey!  Select a color ')
        form1.lst_Color.focus();
        return false;
    }

    /*Campo ID*/
    if (form1.txt_Codigo.value.length == 0 ||
        isNaN(form1.txt_Codigo.value) ||
        form1.txt_Codigo.value <= 0) {
        if (form1.txt_Codigo.value.length == 0) {
            alert('Insert a code-ID');
        } else if (isNaN(form1.txt_Codigo.value)) {
            alert('The code must be numeric');
        } else if (form1.txt_Codigo.value <= 0){
            alert('The code must be greater than 0');
        }
        form1.txt_Codigo.focus();
        return false;
    }
        /*Campo precio*/
    if (form1.txt_Precio.value.length == 0 ||
        isNaN(form1.txt_Precio.value) ||
        form1.txt_Precio.value <= 0) {
        if (form1.txt_Precio.value.length == 0) {
            alert('Insert a price');
        } else if (isNaN(form1.txt_Precio.value)) {
            alert('The price must be numerical');
        } else if (form1.txt_Precio.value <= 0){
            alert('The price must be greater than 0');
        }
        form1.txt_Precio.focus();
        return false;
    }
        /*Campo cantidad*/
    if (form1.txt_Cantidad.value.length == 0 ||
        isNaN(form1.txt_Cantidad.value) ||
        form1.txt_Cantidad.value <= 0) {
        if (form1.txt_Cantidad.value.length == 0) {
            alert('Insert an quantity');
        } else if (isNaN(form1.txt_Cantidad.value)) {
            alert('The quantity must be numeric');
        } else if (form1.txt_Cantidad.value <= 0){
            alert('The quantity must be greater than 0');
        }
        form1.txt_Cantidad.focus();
        return false;
    }
 
    return true;
}