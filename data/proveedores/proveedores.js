$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}

function openPDF(){
window.open('../../ayudas/ayuda.pdf');
}
function scrollToBottom() {
    $('html, body').animate({
        scrollTop: $(document).height()
    }, 'slow');
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
    // position: "top",
    show: "explode",
    hide: "blind"    
}

var dialogo4 = {
    autoOpen: false,
    resizable: false,
    width: 240,
    height: 150,
    modal: true,
    // position: "top",
    show: "explode",
    hide: "blind"
}

var dialogo_cuenta = {
    autoOpen: false,
    resizable: false,
    width: 620,
    height: 350,
    modal: true,
    // position: "top",
    show: "explode",
    hide: "blind"
}

var dialogo_retencion1 = {
    autoOpen: false,
    resizable: false,
    width: 750,
    height: 350,
    modal: true,
    // position: "top",
    show: "explode",
    hide: "blind"
}

var dialogo_retencion2 = {
    autoOpen: false,
    resizable: false,
    width: 750,
    height: 350,
    modal: true,
    // position: "top",
    show: "explode",
    hide: "blind"
}

function enter1(e) {
    if (e.which === 13 || e.keyCode === 13) {
        buscador1();
        return false;
    }
    return true;
}

function enter2(e) {
    if (e.which === 13 || e.keyCode === 13) {
        buscador2();
        return false;
    }
    return true;
}

function enter3(e) {
    if (e.which === 13 || e.keyCode === 13) {
        buscador3();
        return false;
    }
    return true;
}

function buscador1(){
    $("#buscar_plan").dialog("open");
}

function buscador2(){
    $("#buscar_retencion1").dialog("open");
}

function buscador3(){
    $("#buscar_retencion2").dialog("open");
}

function abrirDialogo() {
    $("#proveedores").dialog("open");
}

function abrirCuenta() {
    $("#cuentas").dialog("open");
}

function guardar_proveedor() {
    var iden = $("#ruc_ci").val();
    var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var correo = $("#correo").val();
    
    if ($("#tipo_docu").val() === "") {
        $("#tipo_docu").focus();
        alertify.error("Seleccione un tipo de documento ");
    } else {
        if ($("#tipo_docu").val() === "Cedula" && iden.length < 10) {
            $("#ruc_ci").focus();
            alertify.error("Error.. Minimo 10 digitos ");
        } else {
            if ($("#tipo_docu").val() === "Ruc" && iden.length < 13) {
                $("#ruc_ci").focus();
                alertify.error("Error.. Minimo 13 digitos ");
            } else {
                if ($("#empresa_pro").val() === "") {
                    $("#empresa_pro").focus();
                    alertify.error("Indique nombre de la empresa");
                } else {
                    if ($("#direccion_pro").val() === "") {
                        $("#direccion_pro").focus();
                        alertify.error("Indique la dirección");
                    } else {
                        if ($("#sustento").val() === "") {
                            $("#sustento").focus();
                            alertify.error("Indique una opción");
                        } else {
                        //     if (!expr.test(correo) || $("#correo").val() === "") {
                        //         $("#correo").focus();
                        //         alertify.error("Ingrese un correo");
                        //     }else{
                                if ($("#pais_pro").val() === "") {
                                    $("#pais_pro").focus();
                                    alertify.error("Ingrese el país");
                                } else {
                                    if ($("#ciudad_pro").val() === "") {
                                        $("#ciudad_pro").focus();
                                        alertify.error("Ingrese la ciudad");
                                    } else {
                                        if ($("#grupo").val() === "") {
                                            $("#grupo").focus();
                                            alertify.error("Indique una opción");
                                        } else {
                                            if ($("#id_codigo_compras").val() === "") {
                                                $("#codigo_compras").focus();
                                                alertify.error("Llene todos los campos");
                                            }else{
                                                if ($("#id_codigo_fuente").val() === "") {
                                                    $("#codigo_fuente").focus();
                                                    alertify.error("Llene todos los campos");
                                                    }else{
                                                        if ($("#id_codigo_iva").val() === "") {
                                                            $("#codigo_iva").focus();
                                                            alertify.error("Llene todos los campos");
                                                        }else{
                                                            $.ajax({
                                                            type: "POST",
                                                            url: "guardar_proveedores.php",
                                                            data: $("#proveedores_form").serialize(),
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
                                // }
                            }
                        }
                    }
                }
            } 
        }
    }
}

function modificar_proveedor() {
    var iden = $("#ruc_ci").val();
    var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var correo = $("#correo").val();
    
    if ($("#id_proveedor").val() === "") {
        alertify.error("Seleccione un proveedor");
    } else {
        if ($("#tipo_docu").val() === "") {
            $("#tipo_docu").focus();
            alertify.error("Seleccione un tipo de documento ");
        } else {
            if ($("#tipo_docu").val() === "Cedula" && iden.length < 10) {
                $("#ruc_ci").focus();
                alertify.error("Error.. Minimo 10 digitos ");
            } else {
                if ($("#tipo_docu").val() === "Ruc" && iden.length < 13) {
                    $("#ruc_ci").focus();
                    alertify.error("Error.. Minimo 13 digitos ");
                } else {
                    if ($("#empresa_pro").val() === "") {
                        $("#empresa_pro").focus();
                        alertify.error("Indique nombre de la empresa");
                    } else {
                        if ($("#direccion_pro").val() === "") {
                            $("#direccion_pro").focus();
                            alertify.error("Indique la dirección");
                        } else {
                            // if ($("#nro_telefono").val() === "") {
                            //     $("#nro_telefono").focus();
                            //     alertify.error("Indique número telefónico");
                            // } else {
                                // if (!expr.test(correo) || $("#correo").val() === "") {
                                //     $("#correo").focus();
                                //     alertify.error("Ingrese un correo");
                                // } else {
                                    if ($("#pais_pro").val() === "") {
                                        $("#pais_pro").focus();
                                        alertify.error("Ingrese el pais");
                                    } else {
                                        if ($("#ciudad_pro").val() === "") {
                                            $("#ciudad_pro").focus();
                                            alertify.error("Ingrese la ciudad");
                                        } else {
                                            if ($("#forma_pago").val() === "") {
                                                $("#forma_pago").focus();
                                                alertify.error("Seleccione forma de pago");
                                            } else {
                                                if ($("#principal_pro").val() === "") {
                                                    $("#principal_pro").focus();
                                                    alertify.error("Seleccione un tipo");
                                                }else{
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "modificar_proveedores.php",
                                                        data: $("#proveedores_form").serialize(),
                                                        success: function(data) {
                                                            var val = data;
                                                            if (val == 1) {
                                                                alertify.success('Datos Modificados Correctamente');						    		
                                                                setTimeout(function() {
                                                                    location.reload();
                                                                }, 1000);
                                                            }
                                                        }
                                                    });
                                                }
                                            }
                                        // }
                                    // }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function eliminar_proveedor() {
    if ($("#id_proveedor").val() === "") {
        alertify.error("Seleccione un proveedor");
    } else {
        $("#clave_permiso").dialog("open"); 
    }
}

function validar_acceso(){
    if($("#clave").val() == ""){
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
                }else {
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
        url: "eliminar_proveedor.php",
        data: "id_proveedor=" + $("#id_proveedor").val(),
        success: function(data) {
            var val = data;
            if (val == 1) {
                alertify.error('Error.. El Proveedor tiene movimientos en el sistema');						    		
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }else{
                alertify.success('Proveedor Eliminado Correctamente');						    		
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

function nuevo_proveedor(e) {
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

function reset () {
    $("#toggleCSS").attr("href", "../../css/alertify.default.css");
    alertify.set({
        labels : {
            ok     : "OK",
            cancel : "Cancel"
        },
        delay : 5000,
        buttonReverse : false,
        buttonFocus   : "ok"
    });
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

    $("#buscar_plan").dialog(dialogo_cuenta);
    $("#buscar_retencion1").dialog(dialogo_retencion1);
    $("#buscar_retencion2").dialog(dialogo_retencion2);

    $("#codigo_compras").on("keypress", enter1);
    $("#codigo_fuente").on("keypress", enter2);
    $("#codigo_iva").on("keypress", enter3);
    
    /*----------------*/
    $.ajax({
        type: "POST",
        url: "../sustento_comprobante/cargar_sustento.php",        
        dataType:'json',
        success: function(data) {            
            for (var i = 0; i < data.length; i=i+3) {
                $("#sustento").append("<option id="+data[i]+" value="+data[i]+">"+data[i+1]+" - "+data[i+2]+"</option>");                
            }
        }
    });

    $("#sustento").on('change',function(){        
        $("#comprobante").html('<option value="">........Seleccione........</option>');
        $.ajax({
            type: "POST",
            url: "cargar_comprobante.php?id_sustento="+$("#sustento").val(),        
            dataType:'json',
            success: function(data) {            
                for (var i = 0; i < data.length; i=i+3) {
                    $("#comprobante").append("<option id="+data[i]+" value="+data[i]+">"+data[i+1]+" - "+data[i+2]+"</option>");                
                }
            }
        }); 
    });

    /*----------------*/
    $("[data-mask]").inputmask();
    alertify.set({ delay: 1000 });    
    $("#ruc_ci").focus();
    $("#ruc_ci").attr("maxlength", "10");
    $("#ruc_ci").keypress(ValidNum);
    $("#nro_telefono").validCampoFranz("0123456789");
    $("#nro_celular").validCampoFranz("0123456789");
    $("#cupo_credito").on("keypress",punto);

    $("#tipo_docu").change(function() {
        if ($("#tipo_docu").val() === "Cedula") {
            $("#ruc_ci").val("");
            $("#ruc_ci").keypress(ValidNum);
            $("#ruc_ci").removeAttr("disabled");
            $("#ruc_ci").attr("maxlength", "10");

        } else {
            if ($("#tipo_docu").val() === "Ruc") {
                $("#ruc_ci").val("");
                $("#ruc_ci").keypress(ValidNum);
                $("#ruc_ci").removeAttr("disabled");
                $("#ruc_ci").removeAttr("maxlength");
                $("#ruc_ci").attr("maxlength", "13");
            } else {
                if ($("#tipo_docu").val() === "Pasaporte") {
                    $("#ruc_ci").val("");
                    $("#ruc_ci").unbind("keypress");
                    $("#ruc_ci").removeAttr("disabled");
                    $("#ruc_ci").attr("maxlength", "30");
                }
            }
        }
    });  
    
    $("#ruc_ci").keyup(function() {
        $.ajax({
            type: "POST",
            url: "comparar_cedulas.php",
            data: "cedula=" + $("#ruc_ci").val() + "&tipo_docu=" + $("#tipo_docu").val(),
            success: function(data) {
                var val = data;
                if (val == 1) {
                    $("#ruc_ci").val("");
                    $("#ruc_ci").focus();
                    alertify.error("Error... El proveedor ya ésta registrado");
                }else{
                    var numero = $("#ruc_ci").val();
                    var suma = 0;      
                    var residuo = 0;      
                    var pri = false;      
                    var pub = false;            
                    var nat = false;                     
                    var modulo = 11;
                    var p1;
                    var p2;
                    var p3;
                    var p4;
                    var p5;
                    var p6;
                    var p7;
                    var p8;            
                    var p9; 
                    var d1  = numero.substr(0,1);         
                    var d2  = numero.substr(1,1);         
                    var d3  = numero.substr(2,1);         
                    var d4  = numero.substr(3,1);         
                    var d5  = numero.substr(4,1);         
                    var d6  = numero.substr(5,1);         
                    var d7  = numero.substr(6,1);         
                    var d8  = numero.substr(7,1);         
                    var d9  = numero.substr(8,1);         
                    var d10 = numero.substr(9,1);  

                    if (d3 < 6){           
                        nat = true;            
                        p1 = d1 * 2;
                        if (p1 >= 10) p1 -= 9;
                        p2 = d2 * 1;
                        if (p2 >= 10) p2 -= 9;
                        p3 = d3 * 2;
                        if (p3 >= 10) p3 -= 9;
                        p4 = d4 * 1;
                        if (p4 >= 10) p4 -= 9;
                        p5 = d5 * 2;
                        if (p5 >= 10) p5 -= 9;
                        p6 = d6 * 1;
                        if (p6 >= 10) p6 -= 9; 
                        p7 = d7 * 2;
                        if (p7 >= 10) p7 -= 9;
                        p8 = d8 * 1;
                        if (p8 >= 10) p8 -= 9;
                        p9 = d9 * 2;
                        if (p9 >= 10) p9 -= 9;             
                        modulo = 10;
                    } else if(d3 == 6){           
                        pub = true;             
                        p1 = d1 * 3;
                        p2 = d2 * 2;
                        p3 = d3 * 7;
                        p4 = d4 * 6;
                        p5 = d5 * 5;
                        p6 = d6 * 4;
                        p7 = d7 * 3;
                        p8 = d8 * 2;            
                        p9 = 0;            
                    } else if(d3 == 9) {          
                        pri = true;                                   
                        p1 = d1 * 4;
                        p2 = d2 * 3;
                        p3 = d3 * 2;
                        p4 = d4 * 7;
                        p5 = d5 * 6;
                        p6 = d6 * 5;
                        p7 = d7 * 4;
                        p8 = d8 * 3;
                        p9 = d9 * 2;            
                    }

                    suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;                
                    residuo = suma % modulo;                                         

                    var digitoVerificador = residuo==0 ? 0: modulo - residuo; 
                    ////////////verificamos del tipo cedula o ruc////////////////////
                    if ($("#tipo_docu option:selected").text() === "Cedula") {
                        if (numero.length === 10) {
                            if(nat == true){
                                if (digitoVerificador != d10){                          
                                    alertify.error('El número de cédula es incorrecto.');
                                    $("#ruc_ci").val("");
                                }else{
                                     if($("#ruc_ci").val() === "0000000000"){
                                        alertify.error('El número de cédula es incorrecto.');
                                        $("#ruc_ci").val("");
                                        }else{
                                            alertify.success('El número de cédula es correcto.');
                                    }
                                }
                            }
                        }
                    }else{
                        if ($("#tipo_docu option:selected").text() === "Ruc") {
                            var ruc = numero.substr(10,13);
                            var digito3 = numero.substring(2,3);

                            if(ruc == "001" ){
                                if(digito3 < 6){ 
                                    if(nat == true){
                                     if (digitoVerificador != d10){                          
                                      alertify.error('El ruc persona natural es incorrecto.');
                                      $("#ruc_ci").val("");
                                      }else{
                                       alertify.success('El ruc persona natural es correcto.');    
                                      } 
                                    }
                                }else{
                                    if(digito3 == 6){ 
                                        if (pub==true){  
                                            if (digitoVerificador != d9){                          
                                                alertify.error('El ruc público es incorrecto.'); 
                                                $("#ruc_ci").val("");
                                            }else{
                                                alertify.success('El ruc público es correcto.'); 
                                            } 
                                        }
                                    }else{
                                        if(digito3 == 9){
                                            if(pri == true){
                                                if (digitoVerificador != d10){                          
                                                    alertify.error('El ruc privado es incorrecto.');
                                                    $("#ruc_ci").val("");
                                                }else{
                                                    alertify.success('El ruc privado es correcto.');      
                                                } 
                                            }
                                        } 
                                    }
                                }
                            }else{
                                if(numero.length === 13){
                                    alertify.error('El ruc es incorrecto.');  
                                    $("#ruc_ci").val("");
                                }
                            }
                        }
                    }
                }
            }
        });
    });
    
    $("#btnGuardar").click(function(e) {
        e.preventDefault();
    });
    $("#btnBuscar").click(function(e) {
        e.preventDefault();
    });
    $("#btnModificar").click(function(e) {
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
    
    $("#btnGuardar").on("click", guardar_proveedor);
    $("#btnModificar").on("click", modificar_proveedor);
    $("#btnEliminar").on("click", eliminar_proveedor);
    $("#btnNuevo").on("click", nuevo_proveedor);
    $("#btnAceptar").on("click", aceptar);
    $("#btnSalir").on("click", cancelar);
    $("#btnAcceder").on("click", validar_acceso);
    $("#btnCancelar").on("click", cancelar_acceso);
    $("#btnBuscar").on("click", abrirDialogo);
    $("#btnCuenta").on("click", abrirCuenta);    

    $("#proveedores").dialog(dialogo);
    $("#cuentas").dialog(dialogo_cuenta);
    $("#clave_permiso").dialog(dialogo3);
    $("#seguro").dialog(dialogo4);

  
    // lista proveedores
    jQuery("#list").jqGrid({
        url: 'datos_proveedores.php',
        datatype: 'xml',
        colNames: ['Codigo', 'Tipo Documento', 'Identificación', 'Empresa', 'Representante', 'Visitador', 'Dirección', 'Teléfono', 'Movil', 'Correo', 'Fax', 'País', 'Ciudad', 'Forma Pago', 'Principal', 'Observacion','Cupo','Tipo Proveedor','Sustento Tributario','Tipo Comprobante','Grupo','Serie','Autorizacion'],
        colModel: [
            {name: 'id_proveedor', index: 'id_proveedor', editable: true, align: 'center', width: '120', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'tipo_docu', index: 'tipo_docu', editable: true, align: 'center', width: '120', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'ruc_ci', index: 'ruc_ci', editable: true, align: 'center', width: '120', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'empresa_pro', index: 'empresa_pro', editable: true, align: 'center', width: '120', search: true, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'representante_legal', index: 'representante_legal', editable: true, align: 'center', width: '120', search: true, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'visitador', index: 'visitador', editable: true, align: 'center', width: '120', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'direccion_pro', index: 'direccion_pro', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'nro_telefono', index: 'nro_telefono', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'nro_celular', index: 'nro_celular', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'correo', index: 'correo', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'fax', index: 'fax', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'pais_pro', index: 'pais_pro', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'ciudad_pro', index: 'ciudad_pro', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'forma_pago', index: 'forma_pago', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'principal_pro', index: 'principal_pro', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'observaciones_pro', index: 'observaciones_pro', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'cupo_credito', index: 'cupo_credito', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'tipo_pro', index: 'tipo_pro', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'sustento', index: 'sustento', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'comprobante', index: 'comprobante', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'grupo', index: 'grupo', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'serie', index: 'serie', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'autorizacion', index: 'autorizacion', editable: true, align: 'center', width: '120', search: false, frozen: false, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}}
        ],
        rowNum: 10,
        width: 830,
        height: 200,
        rowList: [10, 20, 30],
        pager: jQuery('#pager'),
        sortname: 'id_proveedor',
        shrinkToFit: false,
        sortorder: 'asc',
        caption: 'Lista de Proveedores',        
        viewrecords: true,
        ondblClickRow: function(){
        var id = jQuery("#list").jqGrid('getGridParam', 'selrow');
        jQuery('#list').jqGrid('restoreRow', id);
        jQuery("#list").jqGrid('GridToForm', id, "#proveedores_form");
        var ret = jQuery("#list").jqGrid('getRowData', id);

        // cargar comprobante
        $.ajax({
            type: "POST",
            url: "cargar_comprobante.php?id_sustento="+ret.sustento,        
            dataType:'json',
            success: function(data) {                            
                console.log(data)
                for (var i = 0; i < data.length; i = i + 3) {                                        
                    if(ret.comprobante == data[i]){
                        $("#comprobante").append("<option id="+data[i]+" value="+data[i]+" selected>"+data[i+1]+" - "+data[i+2]+"</option>");                     
                    }else{
                        $("#comprobante").append("<option id="+data[i]+" value="+data[i]+">"+data[i+1]+" - "+data[i+2]+"</option>");                
                    }
                    
                }
            }
        }); 
        //fin carga

        // cargar codigo compras y codigo retencion fuente
        $.getJSON('retornar_plan_fuente.php?id=' + ret.id_proveedor, function(data) {
        var tama = data.length;
        if (tama !== 0) {
            for (var i = 0; i < tama; i = i + 4) {
                $("#id_codigo_compras").val(data[i]);
                $("#codigo_compras").val(data[i + 1 ]);
                $("#id_codigo_fuente").val(data[i + 2]);
                $("#codigo_fuente").val(data[i + 3]);
                }
            }
        });
        //fin carga

        // cargar codigo retencion iva
        $.getJSON('retornar_iva.php?id=' + ret.id_proveedor, function(data) {
        var tama = data.length;
        if (tama !== 0) {
            for (var i = 0; i < tama; i = i + 2) {
                $("#id_codigo_iva").val(data[i]);
                $("#codigo_iva").val(data[i + 1 ]);
                }
            }
        });
        //fin carga




        $("#btnGuardar").attr("disabled", true);
        $("#proveedores").dialog("close");    
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
                jQuery("#list").jqGrid('GridToForm', id, "#proveedores_form");
                $("#btnGuardar").attr("disabled", true);
                $("#proveedores").dialog("close");
            } else {
              alertify.alert("Seleccione un fila");
            }
        }
    }); 

    //////////////////tabla plan de cuentas///////////////////
    jQuery("#list2").jqGrid({
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
        pager: jQuery('#pager2'),
        sortname: 'id_plan_cuentas',
        shrinkToFit: false,
        sortorder: 'asc',
        // caption: 'Lista de Clientes',        
        viewrecords: true,
        ondblClickRow: function(){
         var id = jQuery("#list2").jqGrid('getGridParam', 'selrow');
         jQuery('#list2').jqGrid('restoreRow', id); 
         var ret = jQuery("#list2").jqGrid('getRowData', id);

         $("#codigo_compras").val(ret.descripcion);
         $("#id_codigo_compras").val(ret.id_plan_cuentas);
         
         $("#buscar_plan").dialog("close");    
        }
    }).jqGrid('navGrid', '#pager2',
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
    
    jQuery("#list2").jqGrid('navButtonAdd', '#pager2', {caption: "Añadir",
        onClickButton: function() {
            var id = jQuery("#list2").jqGrid('getGridParam', 'selrow');
            jQuery('#list2').jqGrid('restoreRow', id);
            var ret = jQuery("#list2").jqGrid('getRowData', id);

            if (id) {
                $("#codigo_compras").val(ret.descripcion);
                $("#id_codigo_compras").val(ret.id_plan_cuentas);

                $("#buscar_plan").dialog("close");
            } else {
                alertify.alert("Seleccione un fila");
            }
        }
    });
    /////////////////////////////fin plan cuentas///////////////////////////////

    //////////////////tabla retenciones fuente 1///////////////////
    jQuery("#list3").jqGrid({
        url: 'datos_retenciones.php',
        datatype: 'xml',
        colNames: ['Id', 'Codigo Anexo', 'Código Formulario','Porcentaje','Descripción','Ids', 'Cuenta'],
        colModel: [
            {name: 'id_retencion_fuente', index: 'id_retencion_fuente',hide: true, editable: true, align: 'center', width: '50', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'codigo_anexo', index: 'codigo_anexo', editable: true, align: 'left', width: '100', search: false, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'formulario', index: 'formulario', editable: true, align: 'left', width: '100', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'porcentaje', index: 'porcentaje', editable: true, align: 'left', width: '50', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'detalle', index: 'detalle', editable: true, align: 'left', width: '350', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'id_plan_cuentas', index: 'id_plan_cuentas', editable: true,hidden: true, align: 'left', width: '200', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'cuenta', index: 'cuenta', editable: true, align: 'center', width: '150', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
        ],
        rowNum: 10,
        width: 710,
        height: 220,
        rowList: [10, 20, 30],
        pager: jQuery('#pager3'),
        sortname: 'id_retencion_fuente',
        shrinkToFit: false,
        sortorder: 'asc',
        // caption: 'Lista Retenciones Fuente',        
        viewrecords: true,
        ondblClickRow: function(){
         var id = jQuery("#list3").jqGrid('getGridParam', 'selrow');
         jQuery('#list3').jqGrid('restoreRow', id); 
         var ret = jQuery("#list3").jqGrid('getRowData', id);

         $("#codigo_fuente").val(ret.codigo_anexo);
         $("#id_codigo_fuente").val(ret.id_retencion_fuente);

         $("#buscar_retencion1").dialog("close");    
        }
    }).jqGrid('navGrid', '#pager3',
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
    
    jQuery("#list3").jqGrid('navButtonAdd', '#pager3', {caption: "Añadir",
        onClickButton: function() {
            var id = jQuery("#list3").jqGrid('getGridParam', 'selrow');
            jQuery('#list3').jqGrid('restoreRow', id);
            var ret = jQuery("#list3").jqGrid('getRowData', id);

            if (id) {
                $("#codigo_fuente").val(ret.codigo_anexo);
                $("#id_codigo_fuente").val(ret.id_retencion_fuente);

                $("#buscar_retencion1").dialog("close");
            } else {
                alertify.alert("Seleccione un fila");
            }
        }
    });
    /////////////////////////////fin retenciones fuente1///////////////////////////////

    //////////////////tabla retenciones fuente2///////////////////
    jQuery("#list4").jqGrid({
        url: 'datos_retenciones.php',
        datatype: 'xml',
        colNames: ['Id', 'Codigo Anexo', 'Código Formulario','Porcentaje','Descripción','Ids', 'Cuenta'],
        colModel: [
            {name: 'id_retencion_fuente', index: 'id_retencion_fuente',hide: true, editable: true, align: 'center', width: '50', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
            {name: 'codigo_anexo', index: 'codigo_anexo', editable: true, align: 'left', width: '100', search: false, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'formulario', index: 'formulario', editable: true, align: 'left', width: '100', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'porcentaje', index: 'porcentaje', editable: true, align: 'left', width: '50', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'detalle', index: 'detalle', editable: true, align: 'left', width: '350', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'id_plan_cuentas', index: 'id_plan_cuentas', editable: true,hidden: true, align: 'left', width: '200', search: true, frozen: true, formoptions: {elmsuffix: " (*)"}, editrules: {required: true}},
            {name: 'cuenta', index: 'cuenta', editable: true, align: 'center', width: '150', search: false, frozen: true, editoptions: {readonly: 'readonly'}, formoptions: {elmprefix: ""}},
        ],
        rowNum: 10,
        width: 710,
        height: 220,
        rowList: [10, 20, 30],
        pager: jQuery('#pager4'),
        sortname: 'id_retencion_fuente',
        shrinkToFit: false,
        sortorder: 'asc',
        // caption: 'Lista Retenciones Fuente',        
        viewrecords: true,
        ondblClickRow: function(){
         var id = jQuery("#list4").jqGrid('getGridParam', 'selrow');
         jQuery('#list4').jqGrid('restoreRow', id); 
         var ret = jQuery("#list4").jqGrid('getRowData', id);

         $("#codigo_iva").val(ret.codigo_anexo);
         $("#id_codigo_iva").val(ret.id_retencion_fuente);

         $("#buscar_retencion2").dialog("close");    
        }
    }).jqGrid('navGrid', '#pager4',
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
    
    jQuery("#list4").jqGrid('navButtonAdd', '#pager4', {caption: "Añadir",
        onClickButton: function() {
            var id = jQuery("#list4").jqGrid('getGridParam', 'selrow');
            jQuery('#list4').jqGrid('restoreRow', id);
            var ret = jQuery("#list4").jqGrid('getRowData', id);

            if (id) {
                $("#codigo_iva").val(ret.codigo_anexo);
                $("#id_codigo_iva").val(ret.id_retencion_fuente);

                $("#buscar_retencion2").dialog("close");
            } else {
                alertify.alert("Seleccione un fila");
            }
        }
    });
    /////////////////////////////fin retenciones fuente1///////////////////////////////

}


