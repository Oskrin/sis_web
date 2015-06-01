$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}

function openPDF(){
	window.open('../../ayudas/ayuda.pdf');
}
function inicio(){
    carga_empresa();
    $("[data-mask]").inputmask();
    alertify.set({ delay: 1000 });
	$("#btnModificar").on('click',guardar_empresa);

}
function guardar_empresa(){			
   var iden = $("#ruc_empresa").val();   
    if ($("#nombre_empresa").val() === "") {
        $("#nombre_empresa").focus();
        alertify.error("Ingrese nombre de la empresa");
    } else {
        if ($("#ruc_empresa").val() === "") {
            $("#ruc_empresa").focus();
            alertify.error("Ingrese ruc de la empresa");
        }else{
            if ( iden.length < 13) {
                $("#ruc_ci").focus();
                alertify.error("Error.. Minimo 13 digitos ");
            } else {
                if ($("#descripcion_empresa").val() === "") {
                    $("#descripcion_empresa").focus();
                    alertify.error("Ingrese una descripción");
                }else{
                    if ($("#propietario_empresa").val() === "") {
                        $("#propietario_empresa").focus();
                        alertify.error("Ingrese el propietario");
                    }else{
                        if ($("#direccion_empresa").val() === "") {
                            $("#direccion_empresa").focus();
                            alertify.error("Ingrese dirección de la empresa");
                        }else{                           
                            if ($("#pais_empresa").val() === "") {
                                $("#pais_empresa").focus();
                                alertify.error("Ingrese el país");
                            }else{
                                if ($("#ciudad_empresa").val() === "") {
                                    $("#ciudad_empresa").focus();
                                    alertify.error("Ingrese la ciudad");
                                }else{
                                    $("#empresa_form").submit(function(e) {
                                        var formObj = $(this);
                                        var formURL = formObj.attr("action");
                                        if(window.FormData !== undefined) {	
                                            var formData = new FormData(this);   
                                            formURL=formURL; 
                                        
                                            $.ajax({
                                                url: "modifica_empresa.php",
                                                type: "POST",
                                                data:  formData,
                                                mimeType:"multipart/form-data",
                                                contentType: false,
                                                cache: false,
                                                processData:false,
                                                success: function(data, textStatus, jqXHR) {
                                                    var res=data;
                                                    if(res == 1){
                                                        alertify.success("Datos Modificados Correctamente",function(){
                                                        location.reload();
                                                        });
                                                    } else{
                                                        alertify.error("Error..... Datos no Agregados");
                                                        //location.reload();
                                                    }
                                                },
                                                error: function(jqXHR, textStatus, errorThrown) 
                                                {
                                                } 	        
                                            });
                                            e.preventDefault();
                                        } else {
                                            var  iframeId = "unique" + (new Date().getTime());
                                            var iframe = $('<iframe src="javascript:false;" name="'+iframeId+'" />');
                                            iframe.hide();
                                            formObj.attr("target",iframeId);
                                            iframe.appendTo("body");
                                            iframe.load(function(e)
                                            {
                                                var doc = getDoc(iframe[0]);
                                                var docRoot = doc.body ? doc.body : doc.documentElement;
                                                var data = docRoot.innerHTML;
                                            });
                                        }
                                    });
                                    $("#empresa_form").submit();
                                }
                            }
                        }
                    }
                }
            }         
        }
    }   	
}

function carga_empresa(){
   $.ajax({        
        type: "POST",
        dataType: 'json',        
        url: "carga_empresa.php",            
        success: function(data, status) {
            $("#id_empresa").val(data[0]);
            $("#nombre_empresa").val(data[1]);
            $("#ruc_empresa").val(data[2]);
            $("#direccion_empresa").val(data[3]);
            //$("#").val(data[4]);//TELEFONO
            $("#celular_empresa").val(data[5]);
            $("#pais_provincia").val(data[6]);
            $("#ciudad_empresa").val(data[7]);
            //$("#").val(data[8]);//fax
            $("#correo_empresa").val(data[9]);
            $("#web_empresa").val(data[10]);
            $("#descripcion_empresa").val(data[11]);
            //$("#imagen_empresa").val(data[12]);
            //$("#").val(data[13]);//estado
            $("#propietario_empresa").val(data[14]);
            $("#cc_representante_legal").val(data[15]);
            $("#contador_empresa").val(data[16]);
            $("#cc_contador").val(data[17]);
            $("#serie_factura").val(data[18]);
            $("#autorizacion_factura").val(data[19]);
            $("#serie_retencion").val(data[20]);
            $("#autorizacion_retencion").val(data[21]);
            $("#serie_nota_credito").val(data[22]);
            $("#autorizacion_nota_credito").val(data[23]);            
        },        
        error: function (data) {            
        
        },                 
    });
}

