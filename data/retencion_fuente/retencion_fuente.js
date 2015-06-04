$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}

function scrollToBottom() {
    $('html, body').animate({
        scrollTop: $(document).height()
    }, 'slow');
}

function openPDF(){
window.open('../../ayudas/ayuda.pdf');
}

function scrollToTop() {
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
}

var dialogo =
{
    autoOpen: false,
    resizable: false,
    width: 860,
    height: 350,
    modal: true
};

var dialogo3 =
{
    autoOpen: false,
    resizable: false,
    width: 400,
    height: 210,
    modal: true,
    position: "top",
    show: "explode",
    hide: "blind"    
}

var dialogo4 = 
{
    autoOpen: false,
    resizable: false,
    width: 240,
    height: 150,
    modal: true,
    position: "top",
    show: "explode",
    hide: "blind"
}

var dialogo_cuenta = 
{
    autoOpen: false,
    resizable: false,
    width: 620,
    height: 400,
    modal: true,
    // position: "top",
    show: "explode",
    hide: "blind"
}

function abrirDialogo() {
    $("#clientes").dialog("open");
}

function abrirCuenta() {
    $("#cuentas").dialog("open");
}

function guardar_retencion() {
  if ($("#codigo_anexo").val() === "") {
    $("#codigo_anexo").focus();
    alertify.error("Ingrese un Código");
    } else {
      if ($("#nombre_grupo").val() === "") {
         $("#nombre_grupo").focus();
         alertify.error("Ingrese un Nombre");
        }else{
         if ($("#id_plan_cuentas").val() === "") {
         alertify.error("Seleccione una Cuenta Contable");
        }else{
         $.ajax({
            type: "POST",
            url: "guardar_retencio.php",
            data: "id_plan_cuentas=" + $("#id_plan_cuentas").val() + "&codigo_grupo=" + $("#codigo_grupo").val() +
            "&nombre_grupo=" + $("#nombre_grupo").val(),
            success: function(data) {
                var val = data;
                if (val == 1) {
                    alertify.success('Datos Agregados Correctamente');                                   
                    setTimeout(function() {
                    location.reload();
                    }, 1000);
                }
            }
        });   
        }
      }
   }
}

function modificar_grupo() {
   if ($("#id_grupo").val() === "") {
    alertify.error("Seleccione un grupo");
    } else { 
        if ($("#codigo_grupo").val() === "") {
        $("#codigo_grupo").focus();
        alertify.error("Ingrese un Código");
        } else {
          if ($("#nombre_grupo").val() === "") {
             $("#nombre_grupo").focus();
             alertify.error("Ingrese un Nombre");
            }else{
             if ($("#id_plan_cuentas").val() === "") {
             alertify.error("Seleccione una Cuenta Contable");
            }else{
             $.ajax({
                type: "POST",
                url: "guardar_grupo.php",
                data: "id_plan_cuentas=" + $("#id_plan_cuentas").val() + "&codigo_grupo=" + $("#codigo_grupo").val() +
                "&nombre_grupo=" + $("#nombre_grupo").val(),
                success: function(data) {
                    var val = data;
                    if (val == 1) {
                        alertify.success('Datos Agregados Correctamente');                                   
                        setTimeout(function() {
                        location.reload();
                        }, 1000);
                    }
                }
            });   
            }
          }
        }
    }   
}
function eliminar_cliente() {
    if ($("#id_cliente").val() === "") {
        alertify.error("Seleccione un cliente");
    } else {
        $("#clave_permiso").dialog("open");     
    }
}
function validar_acceso(){
    if($("#clave").val() == "") {
        $("#clave").focus();
        alertify.error("Ingrese la clave");
    }else{
        $.ajax({
            url: '../procesos/validar_acceso.php',
            type: 'POST',
            data: "clave=" + $("#clave").val(),
            success: function(data) {
                var val = data;
                if (val == 0) {
                    $("#clave").val("");
                    $("#clave").focus();
                    alertify.error("Error... La clave es incorrecta ingrese nuevamente");
                } else {
                    if (val == 1) {
                        $("#seguro").dialog("open");   
                    }
                }
            }
        });
    }   
}

function aceptar(){
    $.ajax({
        type: "POST",
        url: "eliminar_clientes.php",
        data: "id_cliente=" + $("#id_cliente").val(),
        success: function(data) {
            var val = data;
            if (val == 1) {
                alertify.error('Error.. El Cliente tiene movimientos en el sistema');						    		
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }else{
                alertify.success('Cliente Eliminado Correctamente');						    		
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }
        }
    });  
}

function cancelar(){
    $("#seguro").dialog("close");   
    $("#clave_permiso").dialog("close");    
    $("#clave").val("");    
}

function cancelar_acceso(){
    $("#clave_permiso").dialog("close");     
    $("#clave").val("");
}

function nuevo_cliente() {
    location.reload();
}

function ValidNum() {
    if (event.keyCode < 48 || event.keyCode > 57) {
        event.returnValue = false;
    }
    return true;
}

function Num_Let() {
    if ((event.keyCode !== 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122)) {
        event.returnValue = false;
    }
    return true;
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
    $("[data-mask]").inputmask();
    alertify.set({ delay: 1000 });    
    $("#codigo_grupo").focus();

    
    $("#btnGuardar").click(function(e) {
        e.preventDefault();
    });
    $("#btnModificar").click(function(e) {
        e.preventDefault();
    });
    $("#btnBuscar").click(function(e) {
        e.preventDefault();
    });
    $("#btnEliminar").click(function(e) {
        e.preventDefault();
    });
    $("#btnNuevo").click(function(e) {
        e.preventDefault();
    });
    $("#btnCuenta").click(function(e) {
        e.preventDefault();
    });

    $("#btnGuardar").on("click", guardar_retencion);
    $("#btnModificar").on("click", modificar_grupo);
    // $("#btnBuscar").on("click", abrirDialogo);
    $("#btnEliminar").on("click", eliminar_cliente);
    $("#btnAceptar").on("click", aceptar);
    $("#btnSalir").on("click", cancelar);
    $("#btnAcceder").on("click", validar_acceso);
    $("#btnCancelar").on("click", cancelar_acceso);
    $("#btnNuevo").on("click", nuevo_cliente);
    $("#btnCuenta").on("click", abrirCuenta);

    // $("#clientes").dialog(dialogo);
    $("#cuentas").dialog(dialogo_cuenta);
    // $("#clave_permiso").dialog(dialogo3);
    // $("#seguro").dialog(dialogo4);

    jQuery("#list").jqGrid({
        url: 'datos_plan.php',
        datatype: 'xml',
        colNames: ['Id', 'Codigo', 'Descripción', 'Cuenta'],
        colModel: [
            {name: 'id_plan_cuentas', index: 'id_plan_cuentas',hide: true, editable: true, align: 'center', width: '120', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'codigo_cuenta', index: 'codigo_cuenta', editable: true, align: 'left', width: '120', search: false, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'descripcion', index: 'descripcion', editable: true, align: 'left', width: '200', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'cuenta', index: 'cuenta', editable: true, align: 'center', width: '120', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
        ],
        rowNum: 10,
        width: 580,
        height: 220,
        rowList: [10, 20, 30],
        pager: jQuery('#pager'),
        sortname: 'id_plan_cuentas',
        shrinkToFit: false,
        sortorder: 'asc',
        caption: 'Lista de Clientes',        
        viewrecords: true,
        ondblClickRow: function(){
         var id = jQuery("#list").jqGrid('getGridParam', 'selrow');
         jQuery('#list').jqGrid('restoreRow', id); 
         var ret = jQuery("#list").jqGrid('getRowData', id);

         $("#id_plan_cuentas").val(ret.id_plan_cuentas);
         $("#cuenta").val(ret.descripcion);

         //jQuery("#list").jqGrid('GridToForm', id, "#clientes_form");
         // $("#btnGuardar").attr("disabled", true);
         $("#cuentas").dialog("close");    
        }
    }).jqGrid('navGrid', '#pager',
            {
                add: false,
                edit: false,
                del: false,
                refresh: true,
                search: true,
                view: true
            },
    {
        recreateForm: true, closeAfterEdit: true, checkOnUpdate: true, reloadAfterSubmit: true, closeOnEscape: true
    },
    {
        reloadAfterSubmit: true, closeAfterAdd: true, checkOnUpdate: true, closeOnEscape: true,
        bottominfo: "Todos los campos son obligatorios son obligatorios"
    },
    {
        width: 300, closeOnEscape: true
    },
    {
        closeOnEscape: true,        
        multipleSearch: false, overlay: false

    },
    {
    },
        {
            closeOnEscape: true
        }
    );
    
    jQuery("#list").jqGrid('navButtonAdd', '#pager', {caption: "Añadir",
        onClickButton: function() {
            var id = jQuery("#list").jqGrid('getGridParam', 'selrow');
            jQuery('#list').jqGrid('restoreRow', id);
            var ret = jQuery("#list").jqGrid('getRowData', id);

            if (id) {
                $("#id_plan_cuentas").val(ret.id_plan_cuentas);
                $("#cuenta").val(ret.descripcion);

                // jQuery("#list").jqGrid('GridToForm', id, "#clientes_form");
                // $("#btnGuardar").attr("disabled", true);
                $("#cuentas").dialog("close");
            } else {
                alertify.alert("Seleccione un fila");
            }
        }
    });
}

