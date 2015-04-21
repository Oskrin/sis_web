<?php 
include '../../procesos/base.php';
include('../menu/app.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PRODUCTOS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    
    <link href="../../plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/alertify.core.css" rel="stylesheet" />
    <link href="../../dist/css/alertify.default.css" id="toggleCSS" rel="stylesheet" />
    <link href="../../dist/css/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css"/>            
    <link href="../../dist/css/ui.jqgrid.css" rel="stylesheet" type="text/css"/> 
    <link href="../../plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <?php banner(); ?>
      <?php menu_lateral(); ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Registro Productos
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Ingresos</a></li>
            <li class="active">Productos</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Generales</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Adicionales</a></li>
                </ul>
                <form id="productos_form" name="productos_form" method="post">
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1">
                        <div class="box-body">
                          <div class="row">
                            <div class="col-mx-12">                    
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Código Producto: <font color="red">*</font></label>
                                  <input type="text" name="cod_prod"  id="cod_prod" placeholder="El código debe ser único" class="form-control" />
                                  <input type="hidden" name="cod_productos"  id="cod_productos" readonly class="form-control">
                                </div>

                                <div class="form-group">
                                  <label>Nombre Artículo: <font color="red">*</font></label>
                                  <input type="text" name="nombres_cli"  id="nombres_cli" placeholder="Nombres y Apellidos" class="form-control" />
                                </div>

                                <div class="form-group">
                                  <label>PSP Minorista: <font color="red">*</font></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-usd"></i>
                                    </div>
                                    <input type="text" name="nro_telefono" id="nro_telefono" class="form-control" placeholder="0.00"/>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label>Utilidad Minorista:<font color="red">*</font></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-usd"></i>
                                    </div>
                                    <input type="text" name="nro_telefono" id="nro_telefono" class="form-control" placeholder="0.00"/>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label>Categoria:</label>
                                  <select class="form-control" name="tipo_cli" id="tipo_cli">
                                    <option value="" selected>....Seleccione.....</option>
                                    <option value="Persona Natural" >Persona Natural</option>
                                    <option value="Persona Jurídica">Persona Jurídica</option>     
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Descuento:</label>
                                  <input type="text" name="pais_cli" id="pais_cli" placeholder="Ingrese un pais" class="form-control" />
                                </div>

                                <div class="form-group">
                                  <label>Stock Mínimo:<font color="red">*</font></label>
                                  <input type="text" name="direccion_cli" id="direccion_cli" placeholder="Dirección cliente" class="form-control" />
                                </div>

                                <div class="form-group">
                                  <label>Fecha Creación:<font color="red">*</font></label>
                                  <input type="text" name="direccion_cli" id="direccion_cli" placeholder="Dirección cliente" class="form-control" />
                                </div>

                                <div class="form-group">
                                  <label>Iva:</label>
                                  <select class="form-control" name="tipo_cli" id="tipo_cli">
                                    <option value="" selected>....Seleccione.....</option>
                                    <option value="Persona Natural" >Persona Natural</option>
                                    <option value="Persona Jurídica">Persona Jurídica</option>     
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Series:</label>
                                  <select class="form-control" name="tipo_cli" id="tipo_cli">
                                    <option value="" selected>....Seleccione.....</option>
                                    <option value="Persona Natural" >Persona Natural</option>
                                    <option value="Persona Jurídica">Persona Jurídica</option>     
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Comentarios:</label>
                                  <textarea class="form-control" name="notas_cli" id="notas_cli" rows="3"></textarea>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Código Barras:</label>
                                  <input type="text" name="ruc_ci"  id="ruc_ci" class="form-control" />
                                </div>

                                <div class="form-group">
                                  <label>Precio Compra: <font color="red">*</font></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-mobile"></i>
                                    </div>
                                    <input type="text" name="nro_celular" id="nro_celular" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label>PSP Mayorista: <font color="red">*</font></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-mobile"></i>
                                    </div>
                                    <input type="text" name="nro_celular" id="nro_celular" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label>Utilidad Mayorista:</label>
                                  <input type="text" name="ciudad_cli" id="ciudad_cli" class="form-control"/>
                                </div>

                                <div class="form-group">
                                  <label>Marca:</label>
                                  <select class="form-control" name="tipo_cli" id="tipo_cli">
                                    <option value="" selected>....Seleccione.....</option>
                                    <option value="Persona Natural" >Persona Natural</option>
                                    <option value="Persona Jurídica">Persona Jurídica</option>     
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label>Stock:</label>
                                  <input type="text" name="ciudad_cli" id="ciudad_cli" class="form-control"/>
                                </div>

                                <div class="form-group">
                                  <label>Stock Máximo: <font color="red">*</font></label>
                                  <input type="text" name="ciudad_cli" id="ciudad_cli" class="form-control"/>
                                </div>

                                <div class="form-group">
                                  <label>Caracteristicas:</label>
                                  <input type="text" name="ciudad_cli" id="ciudad_cli" class="form-control"/>
                                </div>

                                <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>

                                <div class="form-group">
                                  <label>Bodegas: <font color="red">*</font></label>
                                  <select class="form-control" name="bodegas" id="bodegas">
                                    <option value="">........Seleccione........</option>
                                    <?php
                                    $consulta = pg_query("select * from bodegas ");
                                    while ($row = pg_fetch_row($consulta)) {
                                        echo "<option id=$row[0] value=$row[0]>$row[1]</option>";
                                    }
                                    ?>     
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.tab-pane -->

                      <div class="tab-pane" id="tab_2">
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                      </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </form>
                <div class="row">
                 <div class="col-mx-12">
                  <p>
                    <button class="btn bg-olive margin" id='btnGuardar'><i class="fa fa-save"></i> Guardar</button>
                    <button class="btn bg-olive margin" id='btnModificar'><i class="fa fa-edit"></i> Modificar</button>
                    <button class="btn bg-olive margin" id='btnEliminar'><i class="fa fa-remove"></i> Eliminar</button>
                    <button class="btn bg-olive margin" id='btnBuscar'><i class="fa fa-search"></i> Buscar</button>
                    <button class="btn bg-olive margin" id='btnNuevo'><i class="fa fa-pencil"></i> Nuevo</button>
                  </p> 
                 </div>                           
                </div>
              </div><!-- nav-tabs-custom -->
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
    
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <script src="../../dist/js/validCampoFranz.js" type="text/javascript" ></script>
    <script src="../../dist/js/alertify.min.js" type="text/javascript"></script>
    <script src="../../dist/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="../../dist/js/jquery.jqGrid.src.js" type="text/javascript"></script>
    <script src="../../dist/js/grid.locale-es.js" type="text/javascript"></script>
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="productos.js" type="text/javascript"></script>
   
  </body>

</html>