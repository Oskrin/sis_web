<?php
    session_start();
    include '../../procesos/base.php';
    include('../menu/app.php'); 
    conectarse();
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DATOS EMPRESA</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <link href="../../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />        
        <link href="../../plugins/icon/ionicons.min.css" rel="stylesheet" type="text/css" />    
        <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <link href="../../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <link href="../../dist/css/alertify.core.css" rel="stylesheet" />
        <link href="../../dist/css/alertify.default.css" id="toggleCSS" rel="stylesheet" />
        <link href="../../dist/css/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css"/>            
        <link href="../../dist/css/ui.jqgrid.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            <?php banner_1(); ?>
            <?php menu_lateral_1(); ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    DATOS EMPRESA
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Parámetros</a></li>
                    <li class="active">Datos Empresa</li>
                </ol>
            </section>            
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-body">
                                <div class="rows">
                                    <div class="col-mx-12">
                                        <form id="clientes_form" name="clientes_form" method="post">
                                            <div class="row">
                                                <div class="col-mx-12">                              
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nombre empresa:</label>
                                                            <input type="text" name="nombre_empresa"  id="nombre_empresa" class="form-control" placeholder="Empresa" required />                                  
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>RUC:</label>
                                                            <input type="text" name="ruc_empresa"  id="ruc_empresa" class="form-control" placeholder="RUC" required />                                  
                                                        </div>  
                                                    </div>                              
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Dirección:</label>
                                                            <input type="text" name="direccion_empresa"  id="direccion_empresa" class="form-control" placeholder="Dirección" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Descripción:</label>
                                                            <input type="text" name="descripcion_empresa"  id="descripcion_empresa" class="form-control" placeholder="Descripción" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Celular:</label>
                                                            <input type="text" name="celular_empresa"  id="celular_empresa" class="form-control" placeholder="Celular" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>País:</label>
                                                            <input type="text" name="pais_provincia"  id="pais_provincia" class="form-control" placeholder="País" required value="Ecuador" />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Ciudad:</label>
                                                            <input type="text" name="ciudad_empresa"  id="ciudad_empresa" class="form-control" placeholder="Ciudad" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>E-mail:</label>
                                                            <input type="text" name="correo_empresa"  id="correo_empresa" class="form-control" placeholder="Correo Electrónico" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Representante Legal:</label>
                                                            <input type="text" name="propietario_empresa"  id="propietario_empresa" class="form-control" placeholder="Representante Legal" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>CC Representante Legal:</label>
                                                            <input type="text" name="cc_representante_legal"  id="cc_representante_legal" class="form-control" placeholder="CC. Representante Legal" required />
                                                        </div>  
                                                    </div>
                                                     <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Contador:</label>
                                                            <input type="text" name="contador_empresa"  id="contador_empresa" class="form-control" placeholder="Nombre Contador" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>RUC Contador:</label>
                                                            <input type="text" name="cc_contador"  id="cc_contador" class="form-control" placeholder="RUC Contador" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Serie Factura:</label>
                                                            <input type="number" name="serie_factura"  id="serie_factura" class="form-control" placeholder="Serie Factura" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Autorización Factura:</label>
                                                            <input type="number" name="autorizacion_factura"  id="autorizacion_factura" class="form-control" placeholder="Autorización Factura" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Serie Retención:</label>
                                                            <input type="number" name="serie_retencion"  id="serie_retencion" class="form-control" placeholder="Serie Retención" required />
                                                        </div>  
                                                    </div>                                                    
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Autorización Retención:</label>
                                                            <input type="number" name="autorizacion_retencion"  id="autorizacion_retencion" class="form-control" placeholder="Autorización Retención" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Serie Nota de Crédito:</label>
                                                            <input type="number" name="serie_nota_credito"  id="serie_nota_credito" class="form-control" placeholder="Serie nota de crédito" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Autorización Nota de Crédito:</label>
                                                            <input type="number" name="autorizacion_nota_credito"  id="autorizacion_nota_credito" class="form-control" placeholder="Autorización Nota de Crédito" required />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Web:</label>
                                                            <input type="text" name="web_empresa"  id="web_empresa" class="form-control" placeholder="Página web de la empresa" />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Imagén:</label>
                                                            <input type="file" name="imagen_empresa"  id="imagen_empresa" class="form-control" />
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <button class="btn bg-olive margin" id='btnGuardar'><i class="fa fa-save"></i> Guardar</button>
                                            <button class="btn bg-olive margin" id='btnModificar'><i class="fa fa-edit"></i> Modificar</button>
                                            <button class="btn bg-olive margin" id='btnBuscar'><i class="fa fa-search"></i> Buscar</button>
                                            <button class="btn bg-olive margin" id='btnNuevo'><i class="fa fa-pencil"></i> Nuevo</button>
                                            <button class="btn bg-olive margin" id='btnImprimir'><i class="fa fa-print"></i> Imprimir</button>
                                            <button class="btn bg-olive margin" id='btnAtras'><i class="fa fa-backward"></i> Atras</button>
                                            <button class="btn bg-olive margin" id='btnAdelante'>Adelante <i class="fa fa-forward"></i></button>
                                        </p> 
                                    </div>
                                </div>
                                <div id="buscar_cartera_pagar" title="BUSCAR CARTERA POR PAGAR">
                                    <table id="list2"><tr><td></td></tr></table>
                                    <div id="pager2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php footer(); ?>
    </div>

    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <script src="../../dist/js/validCampoFranz.js" type="text/javascript" ></script>
    <script src="../../dist/js/alertify.min.js" type="text/javascript"></script>
    <script src="../../dist/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="../../dist/js/jquery.jqGrid.src.js" type="text/javascript"></script>
    <script src="../../dist/js/grid.locale-es.js" type="text/javascript"></script>
    <script src="empresa.js" type="text/javascript"></script>
    <link href="../../dist/css/style.css" rel="stylesheet" type="text/css"/>     
    <script src="../../dist/js/ventana_reporte.js" type="text/javascript"></script>
  </body>
</html>