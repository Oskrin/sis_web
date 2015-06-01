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
        <title>EMPRESA..</title>
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
                                        <div class="row">
                                            <form role="form" id="empresa_form" class="" method="POST" action="">                                                
                                                <div class="col-mx-12">                              
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nombre empresa: <font color="red">*</font></label>
                                                            <input type="text" name="nombre_empresa"  id="nombre_empresa" class="form-control" placeholder="Empresa" required />                                  
                                                            <input type="hidden" id="id_empresa" name="id_empresa" /> 
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>RUC: <font color="red">*</font></label>
                                                            <input type="text" name="ruc_empresa"  id="ruc_empresa" class="form-control" placeholder="RUC" required />                                  
                                                        </div>  
                                                    </div>                              
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Dirección: <font color="red">*</font></label>
                                                            <input type="text" name="direccion_empresa"  id="direccion_empresa" class="form-control" placeholder="Dirección"  />
                                                        </div>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Descripción:</label>
                                                            <input type="text" name="descripcion_empresa"  id="descripcion_empresa" class="form-control" placeholder="Descripción"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                          <label>Celular:</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-mobile"></i>
                                                            </div>
                                                            <input type="text" name="celular_empresa" id="celular_empresa" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>País: <font color="red">*</font></label>
                                                            <input type="text" name="pais_empresa"  id="pais_empresa" class="form-control" placeholder="País" required value="Ecuador" />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Ciudad: <font color="red">*</font></label>
                                                            <input type="text" name="ciudad_empresa"  id="ciudad_empresa" class="form-control" placeholder="Ciudad" required />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                          <label>E-mail:</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-envelope"></i>
                                                            </div>
                                                            <input type="text" name="correo_empresa" id="correo_empresa" placeholder="Email" class="form-control"/>
                                                          </div>
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Representante Legal: <font color="red">*</font></label>
                                                            <input type="text" name="propietario_empresa"  id="propietario_empresa" class="form-control" placeholder="Representante Legal" required />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>CI. Representante Legal:</label>
                                                            <input type="text" name="cc_representante_legal"  id="cc_representante_legal" class="form-control" placeholder="CC. Representante Legal" required />
                                                        </div>  
                                                    </div>

                                                     <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Contador:</label>
                                                            <input type="text" name="contador_empresa"  id="contador_empresa" class="form-control" placeholder="Nombre Contador"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>RUC Contador:</label>
                                                            <input type="text" name="cc_contador"  id="cc_contador" class="form-control" placeholder="RUC Contador"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Serie Factura:</label>
                                                            <input type="number" name="serie_factura"  id="serie_factura" class="form-control" placeholder="Serie Factura"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Autorización Factura:</label>
                                                            <input type="number" name="autorizacion_factura"  id="autorizacion_factura" class="form-control" placeholder="Autorización Factura"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Serie Retención:</label>
                                                            <input type="number" name="serie_retencion"  id="serie_retencion" class="form-control" placeholder="Serie Retención"  />
                                                        </div>  
                                                    </div> 

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Autorización Retención:</label>
                                                            <input type="number" name="autorizacion_retencion"  id="autorizacion_retencion" class="form-control" placeholder="Autorización Retención"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Serie Nota de Crédito:</label>
                                                            <input type="number" name="serie_nota_credito"  id="serie_nota_credito" class="form-control" placeholder="Serie nota de crédito"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Autorización Nota de Crédito:</label>
                                                            <input type="number" name="autorizacion_nota_credito"  id="autorizacion_nota_credito" class="form-control" placeholder="Autorización Nota de Crédito"  />
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                          <label>E-mail:</label>
                                                          <div class="input-group">
                                                            <div class="input-group-addon">
                                                              <i class="fa fa-globe"></i>
                                                            </div>
                                                            <input type="text" name="web_empresa" id="web_empresa" class="form-control"/>
                                                          </div>
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Imagén:</label>
                                                            <input type="file" name="imagen_empresa"  id="imagen_empresa" class="form-control" />
                                                        </div>  
                                                    </div>
                                                </div>
                                            </form>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <!--<button class="btn bg-olive margin" id='btnGuardar'  disabled=""><i class="fa fa-save"></i> Guardar</button>-->
                                            <button class="btn bg-olive margin" id='btnModificar'><i class="fa fa-edit"></i> Modificar</button>
                                            
                                            <!--<button class="btn bg-olive margin" id='btnNuevo'><i class="fa fa-pencil"></i> Nuevo</button>                                            -->
                                        </p> 
                                    </div>
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