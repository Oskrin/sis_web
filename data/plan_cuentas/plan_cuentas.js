$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}

function openPDF(){
    window.open('../../ayudas/ayuda.pdf');
}
function enter(e) {
    if (e.which === 13 || e.keyCode === 13) {
        comprobar();
        return false;
    }
    return true;
}
function comprobar(){
    if($("#btnModificar").attr("disabled")){
        guardar_plan();
    }else{
        modificar_plan();
    }
}
function punto(e){
    var key;
    if (window.event) {
        key = e.keyCode;
    }
    else if (e.which) {
        key = e.which;
    }

    if (key < 48 || key > 57) {
        if (key === 46 || key === 8)     {
            return true;
        } else {
            return false;
        }
    }
    return true;   
}

function inicio() {
    $("#btnModificar").attr("disabled",true);
    alertify.set({ delay: 1000 });     
    $("#btnGuardar").on("click",guardar_plan);
    $("#btnModificar").on("click",modificar_plan);
    $("#btnNuevo").on("click",function (){
        location.reload();
    });
    $("#codigo_cuenta").on("keypress", enter);
    $("#nombre_cuenta").on("keypress", enter);

    jQuery(window).bind('resize', function () {
        jQuery("#list").setGridWidth(jQuery('#grid_container').width(), true);        
    }).trigger('resize');

    /*--------jqgrid---------*/
    jQuery("#list").jqGrid({
        url: 'xmlPlanCuentas.php',
        datatype: 'xml',
        colNames: ['ID','CÓDIGO','NOMBRE', 'TIPO CUENTA','ESTADO'],
        colModel: [
           {name: 'id_plan_cuentas', index: 'id_plan_cuentas', editable: false, search: false, hidden: false, editrules: {edithidden: false}, align: 'center', frozen: true, width: 50},
           {name: 'codigo_cuenta', index: 'codigo_plan', editable: false, search: true, hidden: false, editrules: {edithidden: false}, align: 'left', frozen: true, width: 150},
           {name: 'nombre_cuenta', index: 'descripcion', editable: true, search: true, hidden: false, editrules: {edithidden: false}, align: 'left', frozen: true, width: 200},
           {name: 'tipo_cuenta', index: 'cuenta', editable: true, search: true, hidden: false, editrules: {edithidden: false}, align: 'center', frozen: true, width: 200},
           {name: 'estado', index: 'estado', editable: true, search: false, hidden: false, editrules: {edithidden: false}, align: 'center', frozen: true, width: 100},           
        ],
        rowNum: 30,
        width: width,
        height: 300,
        sortable: true,
        rowList: [10, 20, 30],
        pager: jQuery('#pager'),                
        shrinkToFit: true,                
        sortname: 'id_plan_cuentas',
        sortorder: 'asc',
        viewrecords: true,              
        ondblClickRow: function(){
            var id = jQuery("#list").jqGrid('getGridParam', 'selrow');
            jQuery('#list').jqGrid('restoreRow', id);
        
            if (id) {
                var ret = jQuery("#list").jqGrid('getRowData', id);
                $("#id_plan_cuentas").val(ret.id_plan_cuentas);
                $("#codigo_cuenta").val(ret.codigo_cuenta);
                $("#nombre_cuenta").val(ret.nombre_cuenta);
                $("#tipo_cuenta").val(ret.tipo_cuenta);
                $("#btnModificar").attr("disabled",false);
                $("#btnGuardar").attr("disabled",true);                
            } else {
              alertify.alert("Seleccione una Cuenta");
            }
        }
        
    }).jqGrid('navGrid', '#pager',
    {
        add: false,
        edit: false,
        del: false,
        refresh: true,
        search: true,
        view: true
    },{
        recreateForm: true, 
        closeAfterEdit: true, 
        checkOnUpdate: true, 
        reloadAfterSubmit: true, 
        closeOnEscape: true
    },
    {
        reloadAfterSubmit: true, 
        closeAfterAdd: true, 
        checkOnUpdate: true, 
        closeOnEscape: true,
        bottominfo: "Todos los campos son obligatorios son obligatorios"
    },
    {
        width: 300, 
        closeOnEscape: true
    },
    {
        closeOnEscape: true,        
        multipleSearch: false, 
        overlay: false
    },
    {
    },
    {
        closeOnEscape: true
    });
    var width = jQuery("#list").setGridWidth(jQuery('#grid_container').width(), true);     
    /*-----------------------*/

}
function guardar_plan() {    
    if($("#codigo_cuenta").val() === "") {
        $("#codigo_cuenta").focus();
        alertify.error("Ingrese un código de cuenta");
    }else {
        if ($("#nombre_cuenta").val() === "") {
            $("#nombre_cuenta").focus();
            alertify.error("Ingrese un nombre de cuenta");
        }else {                                                
            $.ajax({
                type: "POST",
                url: "guardar_plan.php",
                data: $("#form_plan").serialize(),
                success: function(data) {
                    var val = data;
                    if (val == 0) {
                        alertify.success('Datos Agregados Correctamente');                                  
                        setTimeout(function() {
                        location.reload();
                        }, 1000);
                    }else{
                        if(val == 1){
                            alertify.error('Este código ya existe ingrese otro');                                  
                            $("#codigo_cuenta").val("");
                            $("#codigo_cuenta").focus();
                        }else{
                            if(val == 3){
                                alertify.error('Esta cuenta ya existe ingrese otro');                                  
                                $("#nombre_cuenta").val("");
                                $("#nombre_cuenta").focus();
                            }else{
                                alertify.error('Error al momento de enviar los datos');                                  
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
function modificar_plan() {    
    if($("#codigo_cuenta").val() === "") {
        $("#codigo_cuenta").focus();
        alertify.error("Ingrese un código de cuenta");
    }else {
        if ($("#nombre_cuenta").val() === "") {
            $("#nombre_cuenta").focus();
            alertify.error("Ingrese un nombre de cuenta");
        }else {                                                
            $.ajax({
                type: "POST",
                url: "modificar_plan.php",
                data: $("#form_plan").serialize(),
                success: function(data) {
                    var val = data;
                    if (val == 0) {
                        alertify.success('Datos Modificados Correctamente');                                  
                        setTimeout(function() {
                        location.reload();
                        }, 1000);
                    }else{
                        if(val == 1){
                            alertify.error('Este código ya existe ingrese otro');                                  
                            $("#codigo_cuenta").val("");
                            $("#codigo_cuenta").focus();
                        }else{
                            if(val == 3){
                                alertify.error('Esta cuenta ya existe ingrese otro');                                  
                                $("#nombre_cuenta").val("");
                                $("#nombre_cuenta").focus();
                            }else{
                                alertify.error('Error al momento de enviar los datos');                                  
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
