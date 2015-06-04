$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}
function openPDF(){
window.open('../../ayudas/ayuda.pdf');
}


function guardar_suscomp() {    
    
    $.ajax({
        type: "POST",
        url: "guardar_sustento_comprobante.php",
        data: "id_sustento=" + $("#id_sustento").val() +"&id_comprobante=" + $("#id_comprobante").val(),
        success: function(data) {
            var val = data;
            if (val == 1) {
                alertify.success('Datos Agregados Correctamente');                                   
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }else{
                if(val == 2){
                    alertify.error('Error.. esta relación ya existe');                                                                                   
                }else{                    
                    alertify.error('Error.. al enviar datos');                                   
                    setTimeout(function() {
                       //location.reload();
                    }, 1000);                    
                }
            }
        }
    });  
}



function inicio() {                    
    $("#btnGuardar").click(function(e) {
        e.preventDefault();
    });    
    $.ajax({
        type: "POST",
        url: "cargar_sustento.php",        
        dataType:'json',
        success: function(data) {            
            for (var i = 0; i < data.length; i=i+3) {
                $("#id_sustento").append("<option id="+data[i]+" value="+data[i]+">"+data[i+1]+" - "+data[i+2]+"</option>");                
            }
        }
    });
    $.ajax({
        type: "POST",
        url: "cargar_comprobante.php",        
        dataType:'json',
        success: function(data) {            
            for (var i = 0; i < data.length; i=i+3) {
                $("#id_comprobante").append("<option id="+data[i]+" value="+data[i]+">"+data[i+1]+" - "+data[i+2]+"</option>");                
            }
        }
    });
    $("#btnNuevo").click(function(e) {
        e.preventDefault();
    });
    $("#btnNuevo").click(function(e) {
        nuevo();
    });
    $("#btnGuardar").on("click", guardar_suscomp);            
}

function nuevo() {
    location.reload();
}