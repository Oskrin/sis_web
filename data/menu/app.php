<?php 

if (empty($_SESSION['id'])) {
    header('Location: ../');
}
// pie de pagina
function footer(){
	print' <footer class="main-footer">
        <strong>Copyright &copy; 2015 <a href="">P&S System</a>.</strong> Todos los derechos reservados.
      </footer>';
}
// banner o cabecera
function banner_1(){
	print'
	<header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo"><b>SISWEB</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">' . $_SESSION['nombres'] . '</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      ' . $_SESSION['nombres'] . '
                    </p>
                  </li>
                                
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="../configuracion" class="btn btn-default btn-flat">Ajustes</a>
                    </div>
                    <div class="pull-right">
                      <a href="../" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
';
}
// menu principal lateral
function menu_lateral_1(){
print'
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="">
                <i class="fa fa-share"></i> <span>Parámetros</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i>Empresa</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Privilegios</a></li>
                  <li>
                  <a href=""><i class="fa fa-circle-o"></i>Tablas<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li>
                      <a href=""><i class="fa fa-circle-o"></i>Facturación<i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i>Impuestos Ventas/Compras</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Retención en Impuesto</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Retención en Fuente</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Segundo Impuesto Ventas/Compras</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-circle-o"></i>Inventario<i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="../bodegas"><i class="fa fa-circle-o"></i>Bodegas</a></li>
                        <li><a href="../categorias"><i class="fa fa-circle-o"></i>Categorias</a></li>
                        <li><a href="../marcas"><i class="fa fa-circle-o"></i>Marcas</a></li>
                        <li><a href="../medida"><i class="fa fa-circle-o"></i>Unidades Productos</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href=""><i class="fa fa-circle-o"></i>Importar<i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Cargar Productos</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Cargar Plan Cuentas</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Respaldo</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="">
                <i class="fa fa-laptop"></i> <span>Ingresos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../usuarios"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li><a href="../proveedores"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                <li><a href="../clientes"><i class="fa fa-circle-o"></i> Clientes</a></li>
                <li><a href="../productos"><i class="fa fa-circle-o"></i> Productos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-files-o"></i> <span>Procesos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../inventario"><i class="fa fa-circle-o"></i>Inventario</a></li>
                <li><a href="../proformas"><i class="fa fa-circle-o"></i> Proforma</a></li>
                <li>
                  <a href=""><i class="fa fa-circle-o"></i>Compras<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../factura_compra"><i class="fa fa-circle-o"></i>Productos Bodega</a></li>
                    <li><a href="../devolucion_compra"><i class="fa fa-circle-o"></i>Devolución Compra</a></li>
                  </ul>
                </li>

                <li>
                  <a href=""><i class="fa fa-circle-o"></i>Ventas<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../factura_venta"><i class="fa fa-circle-o"></i>Ventas facturación</a></li>
                    <li><a href="../notas_credito"><i class="fa fa-circle-o"></i>Notas de crédito</a></li>
                  </ul>
                </li>

                <li>
                  <a href=""><i class="fa fa-circle-o"></i>Cartera<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../cuentas_cobrar"><i class="fa fa-circle-o"></i>Cuentas por cobrar</a></li>
                    <li><a href="../cuentas_pagar"><i class="fa fa-circle-o"></i>Cuentas por pagar</a></li>
                    <li>
                      <a href=""><i class="fa fa-circle-o"></i>Externas<i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="../cxc_externa"><i class="fa fa-circle-o"></i>Cuentas por cobrar</a></li>
                        <li><a href="../cxp_externa"><i class="fa fa-circle-o"></i>Cuentas por pagar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href=""><i class="fa fa-circle-o"></i>Transferencias<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="../ingresos"><i class="fa fa-circle-o"></i>Ingresos</a></li>
                    <li><a href="../egresos"><i class="fa fa-circle-o"></i>Egresos</a></li>
                  </ul>
                </li>

                <li><a href="../registro_gastos"><i class="fa fa-circle-o"></i>Registro Gastos</a></li>
                <li><a href="../gastos"><i class="fa fa-circle-o"></i>Gastos Internos</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Gastos Internos</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>

            <li><a href="documentation/index.html"><i class="fa fa-book"></i> Documentation</a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

	';
}
?>