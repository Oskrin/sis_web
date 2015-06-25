$(document).on("ready", inicio);
function evento(e) {
    e.preventDefault();
}

function openPDF(){
window.open('../../ayudas/ayuda.pdf');
}

function inicio(){
    function getDoc(frame) {
        var doc = null;     
     	
        try {
            if (frame.contentWindow) {
                doc = frame.contentWindow.document;
            }
        } catch(err) {
        }
        if (doc) { 
            return doc;
        }
        try { 
            doc = frame.contentDocument ? frame.contentDocument : frame.document;
        } catch(err) {
       
            doc = frame.document;
        }
        return doc;
    }
    $("#btnGuardarCargar").on("click",guardarCargar);
}


function guardarCargar(){    
    $("#tabla_excel tbody").empty(); 
    $("#form_cargar_plan").submit(function(e) {        
        var formObj = $(this);
        var formURL = formObj.attr("action");
        if(window.FormData !== undefined) {	
            var formData = new FormData(this);   
            formURL=formURL;        	
            $.ajax({
                url: "guardarExcel.php",
                type: "POST",
                data:  formData,
                mimeType:"multipart/form-data",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                success: function(data, textStatus, jqXHR)
                {
                    var res=data;
                    if(res != ""){
                        alertify.alert("Datos cargados");
                        cargarTabla(data);
                    }
                    else{
                        alertify.alert("Error..... Al cargar los registros");
                        cargarTabla(data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) 
                {
                } 	        
            });
            e.preventDefault();
            $(this).unbind("submit");
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
}
function cargarTabla(data){
    for(var i=0;i<data.length;i+=4){
        var tipo  = 0;
        var img = "";
        if(data[i + 3] == '0'){
            tipo = "Guardado Correctamente";
            img = "<a class='elimina'><img src='../../images/valid.png'/>";
        }else{
            if(data[i + 3] == '1'){
                tipo = "Producto Repetido";
                img = "<a class='elimina'><img src='../../images/invalid.png' />";
            }else{
                tipo = "Sintaxis incorrecta";
                img = "<a class='elimina'><img src='../../images/delete.png' />"; 
            }   
        }
        $("#tabla_excel tbody").append( "<tr>" +"<td align=>" + data[i] + "</td>" +"<td align=>" + data[i + 1] + "</td>" + "<td align=>" + tipo + "</td>" + "<td align=center>" + img  + "</td>" + "</tr>" );
    }
}
