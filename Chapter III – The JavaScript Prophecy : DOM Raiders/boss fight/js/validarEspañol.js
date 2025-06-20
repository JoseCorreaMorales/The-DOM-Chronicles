function validarForm() {
    /* Observaciones */
    if (form1.Observaciones.value == null || form1.Observaciones.value.length == 0 
    || /^\s+$/.test(form1.Observaciones.value)) {
        alert('¡Hey! inserta una observación 👀');
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
            alert('¡Hey! Selecciona un tamaño ');
            form1.rad_tamano[0].focus();
            return false;
        }
    
    /*Lista */
    if (form1.lst_Color.value.length == 0 || form1.lst_Color.value == "Selecciona un color..."
        || form1.lst_Color.value == "Select a color...") {
        alert('¡Hey! Selecciona un color ')
        form1.lst_Color.focus();
        return false;
    }

    /*Campo ID*/
    if (form1.txt_Codigo.value.length == 0 ||
        isNaN(form1.txt_Codigo.value) ||
        form1.txt_Codigo.value <= 0) {
        if (form1.txt_Codigo.value.length == 0) {
            alert('Inserte un codigo');
        } else if (isNaN(form1.txt_Codigo.value)) {
            alert('El codigo debe ser numérico');
        } else if (form1.txt_Codigo.value <= 0){
            alert('El codigo debe de ser mayor que 0');
        }
        form1.txt_Codigo.focus();
        return false;
    }
        /*Campo precio*/
    if (form1.txt_Precio.value.length == 0 ||
        isNaN(form1.txt_Precio.value) ||
        form1.txt_Precio.value <= 0) {
        if (form1.txt_Precio.value.length == 0) {
            alert('Inserte un precio');
        } else if (isNaN(form1.txt_Precio.value)) {
            alert('El precio deben ser numérico');
        } else if (form1.txt_Precio.value <= 0){
            alert('El precio debe de ser mayor que 0');
        }
        form1.txt_Precio.focus();
        return false;
    }
        /*Campo cantidad*/
    if (form1.txt_Cantidad.value.length == 0 ||
        isNaN(form1.txt_Cantidad.value) ||
        form1.txt_Cantidad.value <= 0) {
        if (form1.txt_Cantidad.value.length == 0) {
            alert('Inserte una cantidad');
        } else if (isNaN(form1.txt_Cantidad.value)) {
            alert('La cantidad debe ser numérico');
        } else if (form1.txt_Cantidad.value <= 0){
            alert('La cantidad debe de ser mayor que 0');
        }
        form1.txt_Cantidad.focus();
        return false;
    }
 
    return true;
}