$(document).on("ready", inicio);

function openPDF(){
window.open('../../ayudas/ayuda.pdf');
}

function numeros(e) { 
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true;
patron = /\d/;
te = String.fromCharCode(tecla);
return patron.test(te);
}

function inicio() {
    $(window).bind('resize', function() {
        jQuery("#list").setGridWidth($('#centro'));
    }).trigger('resize');


    jQuery("#list").jqGrid({
        url: 'xmlRetencion.php',
        datatype: 'xml',
        colNames: ['Cod.', 'Establecimiento', 'Punto Emisión', 'N°. Secuencial', 'N°. AUT. SRI'],
        colModel: [
            {name: 'id_comprobante_retencion', index: 'id_comprobante_retencion', editable: true, align: 'center', width: '120', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'establecimiento', index: 'establecimiento', editable: true, align: 'center', width: '200', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}, editoptions:{maxlength: 3, size:20,dataInit: function(elem){$(elem).bind("keypress", function(e) {return numeros(e)})}}},
            {name: 'punto_emision', index: 'punto_emision', editable: true, align: 'center', width: '200', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}, editoptions:{maxlength: 3, size:20,dataInit: function(elem){$(elem).bind("keypress", function(e) {return numeros(e)})}}},
            {name: 'num_secuencial', index: 'num_secuencial', editable: true, align: 'center', width: '250', search: false, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}, editoptions:{maxlength: 10, size:20,dataInit: function(elem){$(elem).bind("keypress", function(e) {return numeros(e)})}}}, 
            {name: 'num_autorizacion', index: 'num_autorizacion', editable: true, align: 'center', width: '300', search: false, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}, editoptions:{maxlength: 10, size:20,dataInit: function(elem){$(elem).bind("keypress", function(e) {return numeros(e)})}}}, 
        ],
        rowNum: 10,
        rowList: [10, 20, 30],
        height: 255,
        pager: jQuery('#pager'),
        editurl: "procesoRetencion.php",
        sortname: 'id_comprobante_retencion',
        shrinkToFit: false,
        sortordezr: 'asc',
        caption: 'Lista Comprobantes de Retención',
        viewrecords: true
    }).jqGrid('navGrid', '#pager',
            {
                add: true,
                edit: true,
                del: false,
                refresh: true,
                search: true,
                view: true,
                addtext: "Nuevo",
                edittext: "Modificar",
                refreshtext: "Recargar",
                viewtext: "Consultar"
            },
    {
        recreateForm: true, closeAfterEdit: true, checkOnUpdate: true, reloadAfterSubmit: true, closeOnEscape: true
    },
    {
        reloadAfterSubmit: true, closeAfterAdd: true, checkOnUpdate: true, closeOnEscape: true,
        bottominfo: "Los campos marcados con (*) son obligatorios", width: 350, checkOnSubmit: false
    },
    {
        width: 300, closeOnEscape: true
    },
    {
        closeOnEscape: true,
        multipleSearch: false, overlay: false
    },
    {
        closeOnEscape: true,
        width: 400
    },
    {
        closeOnEscape: true
    });
    jQuery("#list").setGridWidth($('#centro').width());
}
function Defecto(e) {
    e.preventDefault();
}

