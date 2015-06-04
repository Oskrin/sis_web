$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}
function openPDF(){
window.open('../../ayudas/ayuda.pdf');
}
function abrirCuenta() {
    $("#sustentos").dialog("open");
}

function guardar_cliente() {
    if ($("#codigo_sustento").val() === "") {
        $("#codigo_sustento").focus();
            alertify.error("Ingrese un Código");
    }else {
        if ($("#nombre_sustento").val() === "") {
            $("#nombre_sustento").focus();
            alertify.error("Ingrese una Descripción");
        }else{             
            $.ajax({
                type: "POST",
                url: "guardar_sustento.php",
                data: "codigo_sustento=" + $("#codigo_sustento").val() +"&nombre_sustento=" + $("#nombre_sustento").val(),
                success: function(data) {
                    var val = data;
                    if (val == 1) {
                        alertify.success('Datos Agregados Correctamente');                                   
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }else{
                        if(val == 2){
                            alertify.error('Error.. el coódigo ya existe');                                                               
                            $("#codigo_sustento").focus();
                            $("#codigo_sustento").val("");
                        }else{
                            if(val == 3){
                                alertify.error('Error.. la descripción ya existe');                                                               
                                $("#nombre_sustento").focus();
                                $("#nombre_sustento").val("");
                            }else{
                                alertify.error('Error.. al enviar datos');                                   
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
                            }
                        }
                    }
                }
            });   
        }      
    }       
}

function modificar_cliente() {    
    if ($("#codigo_sustento").val() === "") {
        $("#codigo_sustento").focus();
            alertify.error("Ingrese un Código");
    }else {
        if ($("#nombre_sustento").val() === "") {
            $("#nombre_sustento").focus();
            alertify.error("Ingrese una Descripción");
        }else{             
            $.ajax({
                type: "POST",
                url: "modificar_sustento.php",
                data: "codigo_sustento=" + $("#codigo_sustento").val() +"&nombre_sustento=" + $("#nombre_sustento").val()+"&id_sustento="+$("#id_sustento").val(),
                success: function(data) {
                    var val = data;
                    if (val == 1) {
                        alertify.success('Datos Agregados Correctamente');                                   
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }else{
                        if(val == 2){
                            alertify.error('Error.. el coódigo ya existe');                                                               
                            $("#codigo_sustento").focus();
                            
                        }else{
                            if(val == 3){
                                alertify.error('Error.. la descripción ya existe');                                                               
                                $("#nombre_sustento").focus();
                                
                            }else{
                                alertify.error('Error.. al enviar datos');                                   
                                setTimeout(function() {
                                   location.reload();
                                }, 1000);
                            }
                        }
                    }
                }
            });   
        }      
    }        
}


function inicio() {
    var dialogo_cuenta ={
        autoOpen: false,
        resizable: false,
        width: 620,
        height: 400,
        modal: true,
        // position: "top",
        show: "explode",
        hide: "blind"
    }
    $("[data-mask]").inputmask();
    alertify.set({ delay: 1000 });    
    $("#codigo_grupo").focus();

    
    $("#btnModificar").attr("disabled",true);
    $("#btnGuardar").click(function(e) {
        e.preventDefault();
    });
    $("#btnModificar").click(function(e) {
        e.preventDefault();
    });
    $("#btnBuscar").click(function(e) {
        e.preventDefault();
    });
    $("#btnNuevo").click(function(e) {
        e.preventDefault();
    });
    $("#btnCuenta").click(function(e) {
        e.preventDefault();
    });
    $("#btnNuevo").click(function(e) {
        nuevo();
    });

    $("#btnGuardar").on("click", guardar_cliente);
    $("#btnModificar").on("click", modificar_cliente);
    $("#btnBuscar").on("click", abrirCuenta);   
    $("#sustentos").dialog(dialogo_cuenta);
    

    jQuery("#list").jqGrid({
        url: 'datos_sustento.php',
        datatype: 'xml',
        colNames: ['Id', 'Codigo', 'Descripción'],
        colModel: [
            {name: 'id_sustento_tributario', index: 'id_sustento_tributario',hide: true, editable: true, align: 'center', width: '120', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'codigo', index: 'codigo', editable: true, align: 'left', width: '120', search: false, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'descripcion', index: 'descripcion', editable: true, align: 'left', width: '350', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},            
        ],
        rowNum: 10,
        width: 580,
        height: 220,
        rowList: [10, 20, 30],
        pager: jQuery('#pager'),
        sortname: 'id_sustento_tributario',
        shrinkToFit: true,
        sortorder: 'asc',
        caption: 'Sustentos Tributarios',        
        viewrecords: true,
        ondblClickRow: function(){
            var id = jQuery("#list").jqGrid('getGridParam', 'selrow');
            jQuery('#list').jqGrid('restoreRow', id); 
            var ret = jQuery("#list").jqGrid('getRowData', id);
            $("#id_sustento").val(ret.id_sustento_tributario);
            $("#codigo_sustento").val(ret.codigo);         
            $("#nombre_sustento").val(ret.descripcion);         
            $("#btnGuardar").attr("disabled", true);
            $("#btnModificar").attr("disabled", false);
            $("#sustentos").dialog("close");    
        }
    }).jqGrid('navGrid', '#pager',{
        add: false,
        edit: false,
        del: false,
        refresh: true,
        search: true,
        view: true
    },{
        recreateForm: true, closeAfterEdit: true, checkOnUpdate: true, reloadAfterSubmit: true, closeOnEscape: true
    },{
        reloadAfterSubmit: true, closeAfterAdd: true, checkOnUpdate: true, closeOnEscape: true,
        bottominfo: "Todos los campos son obligatorios son obligatorios"
    },{
        width: 300, closeOnEscape: true
    },{
        closeOnEscape: true,        
        multipleSearch: false, overlay: false
    },{
    },{
        closeOnEscape: true
    });
    jQuery("#list").jqGrid('navButtonAdd', '#pager', {caption: "Añadir",
        onClickButton: function() {
            var id = jQuery("#list").jqGrid('getGridParam', 'selrow');
            jQuery('#list').jqGrid('restoreRow', id);
            var ret = jQuery("#list").jqGrid('getRowData', id);
            if (id) {
                $("#id_sustento").val(ret.id_sustento_tributario);
                $("#codigo_sustento").val(ret.codigo);         
                $("#nombre_sustento").val(ret.descripcion);         
                $("#btnGuardar").attr("disabled", true);
                $("#btnModificar").attr("disabled", false);
                $("#sustentos").dialog("close");      
            } else {
                alertify.alert("Seleccione un fila");
            }
        }
    });
}

function nuevo() {
    location.reload();
}