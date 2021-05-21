function calcu(){
  //cantidad que va ingresar
    let cantidad = parseInt($('#cantidad').val());
        if (cantidad < 1) {
            swal("La cantidad debe ser mayor a cero");
            return false;
        }
  //monedas a comprar
    let mac = $('input:radio[name=mac]:checked').val();
        if (mac == undefined) {
            swal("Debes seleccionar la medida!");
            return false;
        }
    resultado = total(cantidad,mac);
        $('#Total_Pagar').val("Total de compra en $" + resultado + " monedas");
        return false;
}
function total(cantidad,mac) {
    let total_a_pagar = 0;
    switch (mac) {
        case "bitcoin":
            total_a_pagar = cantidad / 800000;
        break;
        case "mana":
            total_a_pagar = cantidad / 24;
        break;
        case "etherium":
            total_a_pagar = cantidad / 70000;
        break;
        case "bat":
            total_a_pagar = cantidad / 21;
        break;
        case "xrp":
            total_a_pagar = cantidad / 30;
        break;
    }
    return total_a_pagar;
}
function limpiar(){
    $('#frm_monedas')[0].reset();
}
