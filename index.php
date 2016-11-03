<?php
session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. otra modificacion -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>| Tablero de Indicadores | </title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
   <!-- Datatables -->
  <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span></span></a>
          </div>


          <div class="clearfix"></div>

          <!-- menu perfil quick info -->
          <div id="girandologo" class="col-lg-12">
            <img class="img-rounded img-responsive center-block" src="images/logo_hgo.jpg" alt="">
          </div>
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido</span>
              <h2><strong><?php echo $_SESSION['user'];?></strong></h2>
            </div>
          </div>
          <!-- /menu perfil quick info -->

          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Empresas <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                      <li><a href="form_validation.php">Nuevo Registro</a></li>
                      
                    </ul>
                  <ul class="nav child_menu">
                    <!--<li><a href="tabla.html">Consolidadas</a></li>
                    <li><a href="#">Prospección</a></li> -->                   
                  </ul>
                  <li><a href="http://investhidalgo.mx" target="_blank"><i class="fa fa-chrome"></i> Nuevo Polo de Desarrollo</a>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Configuración">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Salir">
                <a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
              </a>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">

                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><strong><?php echo $_SESSION['user'];?></strong>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>


                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <!-- GADGETS -->
          <div class="row tile_count">
            <div id="gadgets" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <a href="javascript:;"> <span class="count_top"><i class="fa fa-building"></i> Proyectos consolidados</span>
                <div class="count">11</div>
                <span class="count_bottom"><i class="green">82% </i> Meta anual</span></a>
              </div>

              <div id="gadgets"class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-industry"></i> Inversión Total</span>
                <div class="count">7,601 </div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>MDP </i> Ultimo año</span>
              </div>
              <div id="gadgets" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-money"></i> Inversión Nacional</span>
                <div class="count">1,592</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>MDP </i> Ultimo año</span>
              </div>
              <div  id="gadgets" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-money"></i> Inversión Extranjera</span>
                <div class="count">6,212</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>120% </i> Meta anual</span>
              </div>
              <div id="gadgets" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Empleos Directos</span>
                <div class="count">5,355</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>80% </i> Meta anual</span>
              </div>
              <div id="gadgets" class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Asegurados IMSS</span>
                <div class="count">214,552</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Agosto 2016</span>
              </div>
            </div>
            <!-- /GADGETS -->

            <!-- Renglon CONT-9 CONT-3 -->
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Proyectos de Inversión </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                  <!-- TAB proyectos -->
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTabProy" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_prospeccion" id="" role="tab" data-toggle="tab" aria-expanded="true">Prospección</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_consolidados" role="tab" id="" data-toggle="tab" aria-expanded="false">Consolidados</a>
                          </li>
                        </ul>

                        <div id="myTabProyContent" class="tab-content">
                          <!-- TAB prospeccion 1FASE -->
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_prospeccion" aria-labelledby="home-tab">
                            <table id="datatable-responsive1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <?php
require_once 'conection.simple.php';
  $result;
 
  $conn = dbConnect();
  // Create the query
  $sql = 'SELECT empresas.proyecto, empresas.empresa, empresas.ubicacion, empresas.municipio, empresas.origen, empresas.sector, empresas.inversion, empresas.empleos, empresas.dependencia, empresas.giro, empresas.fase,contacto.nombre FROM empresas LEFT JOIN contacto ON empresas.proyecto=contacto.nombre  WHERE empresas.fase = 1'
  ;


  // Create the query and asign the result to a variable call $result
  $result = $conn->query($sql);   
  // Extract the values from $result
  $rows = $result->fetchAll();?>
                <thead>
                  <tr>
                  <th><span ><i class="fa fa-cogs " aria-hidden="true"></i></span> Proyecto</th>
                  <th><span ><i class="fa fa-stop-circle-o " aria-hidden="true"></i></span> Semaforo</th>
                  <th><span ><i class="fa fa-arrow-right " aria-hidden="true"></i></span> Avance</th>
                  <th><span ><i class="fa fa-industry " aria-hidden="true"></i></span> Empresa</th>
                  <th><span ><i class="fa fa-globe " aria-hidden="true"></i></span> Origén</th>
                  <th><span ><i class="fa fa-map-marker " aria-hidden="true"></i></span> Ubicación</th>
                   <th><span ><i class="fa fa-map-marker " aria-hidden="true"></i></span> Municipio</th>
                  <th><span ><i class="fa fa-area-chart " aria-hidden="true"></i></span> Sector</th>
                  <th><span ><i class="fa fa-usd " aria-hidden="true"></i></span> Inversión</th>
                  <th><span ><i class="fa fa-suitcase " aria-hidden="true"></i></span> Empleos</th>
                  <th><span ><i class="fa fa-laptop " aria-hidden="true"></i></span> Dependencia</th>
                  <th><span ><i class="fa fa-truck " aria-hidden="true"></i></span> Giro</th>
                  <th><span ><i class="fa fa-user " aria-hidden="true"></i></span> Contacto</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                  foreach ($rows as $row ) {
                   ?>
                    <tr>
                       <td>
                          <?php echo $row['proyecto']; ?>
                        </td>
                          <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100"></div>
                          </div>
                          <small><a href="#">Ver Detalle</a></small>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-blue role="progressbar" data-transitiongoal="60"></div>
                          </div>
                          <small>60% de Avance </small>
                        </td>
                       <td>
                          <a><?php echo $row['empresa'];?></a>
                          <br />
                        </td>
                           <td>
                          <a><?php echo $row['origen'];?></a>
                          <br />
                        </td>
                           <td>
                          <a><?php echo $row['ubicacion'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['municipio'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['sector'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['inversion'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['empleos'];?></a>
                          <br />
                        </td>
                        <td>
                          <a><?php echo $row['dependencia'];?></a>
                          <br />
                        </td>
                        <td>
                          <a><?php echo $row['giro'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['nombre'];?></a>
                          <br />
                           <small><a data-toggle="modal" href="#myModal">Ver Información del Contacto</a></small>
                        </td>  
                    </tr>

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Editar Perfil</h4>
                            </div>
                            <div class="modal-body">
                                 <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..."  class="img-circle profile_img">
              </div>
                           
                           <form class="form-horizontal form-label-left">
        Cambiar foto <input type="file" name="foto" value="examinar"><br>
        Nombre<br><input type="text" name="id" value= "Omar Fayad Meneses"><br>
        Dirección<br> <input type="text" name="user" value="Pachuca de Soto "><br>
        Ocupación<br> <input type="text" name="pass" value="Gobernador del Estado de Hidalgo"><br>
        Correo<br> <input type="text" name="email" value="gober@hidalgo.com"><br>
        Telefono<br> <input type="text" name="pasadmin" value="7751232552"><br>
        Sitio web<br> <input type="text" name="pasadmin" value="www.hidalgo.gob.mx"><br>
        <br>
        <input type="submit" value="Guardar" class="btn btn-success btn-primary">
      </form>


                            
                          </div>


                        </div>
                      </div>
                    <?php } ?>
                  </tbody>
                </table>
               </div>
              <!-- TAB prospeccion 1FASE-->
              <!-- TAB consolidado 3FASES-->
                          <div role="tabpanel" class="tab-pane fade" id="tab_consolidados" aria-labelledby="profile-tab">
                              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <?php
require_once 'conection.simple.php';
  $result;
 
  $conn = dbConnect();
  // Create the query
  $sql = 'SELECT empresas.proyecto, empresas.empresa, empresas.ubicacion, empresas.municipio, empresas.origen, empresas.sector, empresas.inversion, empresas.empleos, empresas.dependencia, empresas.giro, empresas.fase,contacto.nombre FROM empresas LEFT JOIN contacto ON empresas.proyecto=contacto.nombre  WHERE empresas.fase = 2'
  ;


  // Create the query and asign the result to a variable call $result
  $result = $conn->query($sql);   
  // Extract the values from $result
  $rows = $result->fetchAll();?>
                <thead>
                  <tr>
                  <th><span ><i class="fa fa-cogs " aria-hidden="true"></i></span> Proyecto</th>
                  <th><span ><i class="fa fa-stop-circle-o " aria-hidden="true"></i></span> Semaforo</th>
                  <th><span ><i class="fa fa-arrow-right " aria-hidden="true"></i></span> Avance</th>
                  <th><span ><i class="fa fa-industry " aria-hidden="true"></i></span> Empresa</th>
                  <th><span ><i class="fa fa-globe " aria-hidden="true"></i></span> Origén</th>
                  <th><span ><i class="fa fa-map-marker " aria-hidden="true"></i></span> Ubicación</th>
                   <th><span ><i class="fa fa-map-marker " aria-hidden="true"></i></span> Municipio</th>
                  <th><span ><i class="fa fa-area-chart " aria-hidden="true"></i></span> Sector</th>
                  <th><span ><i class="fa fa-usd " aria-hidden="true"></i></span> Inversión</th>
                  <th><span ><i class="fa fa-suitcase " aria-hidden="true"></i></span> Empleos</th>
                  <th><span ><i class="fa fa-laptop " aria-hidden="true"></i></span> Dependencia</th>
                  <th><span ><i class="fa fa-truck " aria-hidden="true"></i></span> Giro</th>
                  <th><span ><i class="fa fa-user " aria-hidden="true"></i></span> Contacto</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                  foreach ($rows as $row ) {
                   ?>
                    <tr>
                       <td>
                          <?php echo $row['proyecto']; ?>
                        </td>
                          <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="100"></div>
                          </div>
                          <small><a href="#">Ver Detalle</a></small>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-blue role="progressbar" data-transitiongoal="60"></div>
                          </div>
                          <small>60% de Avance </small>
                        </td>
                       <td>
                          <a><?php echo $row['empresa'];?></a>
                          <br />
                        </td>
                           <td>
                          <a><?php echo $row['origen'];?></a>
                          <br />
                        </td>
                           <td>
                          <a><?php echo $row['ubicacion'];?></a>
                          <br />
                        </td>
                        <td>
                          <a><?php echo $row['municipio'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['sector'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['inversion'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['empleos'];?></a>
                          <br />
                        </td>
                        <td>
                          <a><?php echo $row['dependencia'];?></a>
                          <br />
                        </td>
                        <td>
                          <a><?php echo $row['giro'];?></a>
                          <br />
                        </td>
                         <td>
                          <a><?php echo $row['nombre'];?></a>
                          <br />
                           <small><a href="#">Ver Información del Contacto</a></small>
                        </td>
                        
                        
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                          </div>
                          <!-- /TAB consolidados 3FASES -->
                        </div>
                      </div>
                      <!-- /TAB proyectos -->
            </div>
          </div>
        </div>
    <!-- /Renglon CONT-9 CONT-3 -->


    

<!-- Renglon ORIGEN-4  INVERSION-4  EMPLEO-4 -->
<div class="row">
  <!-- ORIGEN-4 -->
  <div class="col-md-4 col-sm-4 col-xs-12"> 
    <div class="x_panel tile fixed_height_320">
      <div class="x_title">
        <h2>Giro</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <h4></h4>
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>Estados Unidos</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span></span>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="widget_summary">
          <div class="w_left w_25">
            <span>Canada</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span></span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>Italia</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span></span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>España</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span></span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>Brasil</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span></span>
          </div>
          <div class="clearfix"></div>
        </div>

      </div>
    </div>
  </div>
  <!-- /ORIGEN-4 -->

  <!-- INVERSION-4 -->
  <div class="col-md-4 col-sm-4 col-xs-12"> 
    <div class="x_panel tile fixed_height_320 overflow_hidden">
      <div class="x_title">
        <h2>Inversión por Municipio</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="" style="width:100%">
          <tr>
            <th style="width:37%;">
              <p></p>
            </th>
            <th>
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <p class=""></p>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <p class=""></p>
              </div>
            </th>
          </tr>
          <tr>
            <td>
              <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
            </td>
            <td>
              <table class="tile_info">
                <tr>
                  <td>
                    <h5><i class="fa fa-square blue"></i>Tizayuca </h5>
                  </td>
                  <td><h5>30%</h5></td>
                </tr>
                <tr>
                  <td>
                    <h5><i class="fa fa-square green"></i>Villa de Tezontepec </h5>
                  </td>
                  <td><h5>10%</h5></td>
                </tr>
                <tr>
                  <td>
                    <h5><i class="fa fa-square purple"></i>Atotonilco de Tula </h5>
                  </td>
                  <td><h5>20%</h5></td>
                </tr>
                <tr>
                  <td>
                    <h5><i class="fa fa-square aero"></i>Tepeji del Rio </h5>
                  </td>
                  <td><h5>15%</h5></td>
                </tr>
                <tr>
                  <td>
                    <h5><i class="fa fa-square red"></i>Mineral de la Reforma </h5>
                  </td>
                  <td><h5>30%</h5></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- /INVERSION-4 -->

  <!-- EMPLEOS-4 -->
  <div class="col-md-4 col-sm-4 col-xs-12"> 
    <div class="x_panel tile fixed_height_320">
      <div class="x_title">
        <h2>Empleos</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="dashboard-widget-content">
          <ul class="quick-list">
            <br>

            <li><i class="fa fa-calendar-o"></i><h5>Directos</h5>
            </li>
            <br>
            <li><i class="fa fa-bars"></i><h5>IMSS</h5>
            </li>

          </ul>

          <div class="sidebar-widget">
            <h4>Empleos</h4>
            <canvas width="140" height="70" id="foo" class="" style="width: 170px; height: 90px;"></canvas>
            <div class="goal-wrapper">
              <span class="gauge-value pull-left"></span>
              <span id="gauge-text" class="gauge-value pull-left">1,200</span>
              <span id="goal-text" class="goal-value pull-right">5,000</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /EMPLEOS-4 -->
</div>
<!-- /Renglon ORIGEN-4  INVERSION-4  EMPLEO-4 -->

<!-- Renglon ORIGEN-5  MAPA-7 -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Origen de inversión <small>geo-presentación</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>

          <!-- CONTENEDOR TABLA-5  MAPA-7-->
          <div class="x_content">
            <div class="dashboard-widget-content">

              <!-- Renglon TABLA-5 -->
              <div class="col-md-5 col-xs-12 hidden-small">
                <h2 class="line_30"></h2>
                <table class="countries_list">
                  <tbody>
                    <tr>
                      <td>Estados Unidos</td>
                      <td class="fs15 fw700 text-right">32%</td>
                    </tr>
                    <tr>
                      <td>Canada</td>
                      <td class="fs15 fw700 text-right">27%</td>
                    </tr>
                    <tr>
                      <td>Italia</td>
                      <td class="fs15 fw700 text-right">16%</td>
                    </tr>
                    <tr>
                      <td>España</td>
                      <td class="fs15 fw700 text-right">11%</td>
                    </tr>
                    <tr>
                      <td>Brasil</td>
                      <td class="fs15 fw700 text-right">10%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /Renglon TABLA-5 -->

              <!-- Renglon MAPA-7 -->
              <div id="world-map-gdp" class="col-md-7 col-sm-12 col-xs-12" style="height:230px;">
              </div>
              <!-- /Renglon MAPA-7 -->

            </div>
          </div>
          <!-- /CONTENEDOR TABLA-5  MAPA-7-->

        </div>
      </div>
    </div>

  </div>
</div>
<!-- /Renglon ORIGEN-5  MAPA-7 -->



        </div>
      </div>
    </div>

  </div>
</div>
<!-- /Renglon ORIGEN-5  MAPA-7 -->
</div>

</div>

</div>
</div>

</div>root
<!-- /page content -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    SEDECO - Secretaría de Desarrollo Económico <a href="https://sedeco.hidalgo.gob.mx">Hidalgo</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="vendors/Flot/jquery.flot.js"></script>
<script src="vendors/Flot/jquery.flot.pie.js"></script>
<script src="vendors/Flot/jquery.flot.time.js"></script>
<script src="vendors/Flot/jquery.flot.stack.js"></script>
<script src="vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="js/moment/moment.min.js"></script>
<script src="js/datepicker/daterangepicker.js"></script>


<!-- para la grafica de sectores -->
 <script src="js/bootstrap.min.js"></script>
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="js/icheck/icheck.min.js"></script>
  <script src="js/custom.js"></script>





<!-- Datatables -->
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>

<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>

<script src="vendors/jszip/dist/jszip.min.js"></script>
<script src="vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
<!-- ECharts -->
    <script src="vendors/echarts/dist/echarts.min.js"></script>
    <script src="vendors/echarts/map/js/world.js"></script>

 <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  
<!-- Flot -->
<script>
  $(document).ready(function() {
    var data1 = [
    [gd(2012, 1, 1), 17],
    [gd(2012, 1, 2), 74],
    [gd(2012, 1, 3), 6],
    [gd(2012, 1, 4), 39],
    [gd(2012, 1, 5), 20],
    [gd(2012, 1, 6), 85],
    [gd(2012, 1, 7), 7]
    ];

    var data2 = [
    [gd(2012, 1, 1), 82],
    [gd(2012, 1, 2), 23],
    [gd(2012, 1, 3), 66],
    [gd(2012, 1, 4), 9],
    [gd(2012, 1, 5), 119],
    [gd(2012, 1, 6), 6],
    [gd(2012, 1, 7), 9]
    ];
    $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
      data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

    function gd(year, month, day) {
      return new Date(year, month - 1, day).getTime();
    }
  });
</script>
<!-- /Flot -->


<!-- JQVMap -->
<script>
  $(document).ready(function(){
    $('#world-map-gdp').vectorMap({
      map: 'world_en',
      backgroundColor: null,
      color: '#ffffff',
      hoverOpacity: 0.7,
      selectedColor: '#666666',
      enableZoom: true,
      showTooltip: true,
      values: sample_data,
      scaleColors: ['#E6F2F0', '#149B7E'],
      normalizeFunction: 'polynomial'
    });
  });
</script>
<!-- /JQVMap -->

<!-- Skycons -->
<script>
  $(document).ready(function() {
    var icons = new Skycons({
      "color": "#73879C"
    }),
    list = [
    "clear-day", "clear-night", "partly-cloudy-day",
    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
    "fog"
    ],
    i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  });
</script>
<!-- /Skycons -->

<!-- Doughnut Chart -->
<script>
  $(document).ready(function(){
    var options = {
      legend: false,
      responsive: false
    };

    new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: {
        labels: [
        "Tepeji de Rio",
        "Atotonilco de Tula",
        "Mineral de la Reforma",
        "Villa de Tezontepec",
        "Tizayuca"
        ],
        datasets: [{
          data: [15, 20, 30, 10, 30],
          backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#E74C3C",
          "#26B99A",
          "#3498DB"
          ],
          hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#E95E4F",
          "#36CAAB",
          "#49A9EA"
          ]
        }]
      },
      options: options
    });
  });
</script>
<!-- /Doughnut Chart -->

<!-- bootstrap-daterangepicker -->
<script>
  $(document).ready(function() {

    var cb = function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
      startDate: moment().subtract(29, 'days'),
      endDate: moment(),
      minDate: '01/01/2012',
      maxDate: '12/31/2015',
      dateLimit: {
        days: 60
      },
      showDropdowns: true,
      showWeekNumbers: true,
      timePicker: false,
      timePickerIncrement: 1,
      timePicker12Hour: true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      opens: 'left',
      buttonClasses: ['btn btn-default'],
      applyClass: 'btn-small btn-primary',
      cancelClass: 'btn-small',
      format: 'MM/DD/YYYY',
      separator: ' to ',
      locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Clear',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
      }
    };
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker(optionSet1, cb);
    $('#reportrange').on('show.daterangepicker', function() {
      console.log("show event fired");
    });
    $('#reportrange').on('hide.daterangepicker', function() {
      console.log("hide event fired");
    });
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
      console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
      console.log("cancel event fired");
    });
    $('#options1').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').click(function() {
      $('#reportrange').data('daterangepicker').remove();
    });
  });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- gauge.js -->
<script>
  var opts = {
    lines: 12,
    angle: 0,
    lineWidth: 0.4,
    pointer: {
      length: 0.75,
      strokeWidth: 0.042,
      color: '#1D212A'
    },
    limitMax: 'false',
    colorStart: '#1ABC9C',
    colorStop: '#1ABC9C',
    strokeColor: '#F0F3F3',
    generateGradient: true
  };
  var target = document.getElementById('foo'),
  gauge = new Gauge(target).setOptions(opts);

  gauge.maxValue = 6000;
  gauge.animationSpeed = 32;
  gauge.set(2315);
  gauge.setTextField(document.getElementById("gauge-text"));
</script>
<!-- /gauge.js -->

<!-- Datatables -->
<script>
  $(document).ready(function() {
    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
          {
            extend: "copy",
            className: "btn-sm"
          },
          {
            extend: "csv",
            className: "btn-sm"
          },
          {
            extend: "excel",
            className: "btn-sm"
          },
          {
            extend: "pdfHtml5",
            className: "btn-sm"
          },
          {
            extend: "print",
            className: "btn-sm"
          },
          ],
          responsive: true
        });
      }
    };

    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons();
        }
      };
    }();

    $('#datatable').dataTable();

    $('#datatable-keytable').DataTable({
      keys: true
    });

    $('#datatable-responsive').DataTable();

    $('#datatable-scroller').DataTable({
      ajax: "js/datatables/json/scroller-demo.json",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });

    $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
      'order': [[ 1, 'asc' ]],
      'columnDefs': [
      { orderable: false, targets: [0] }
      ]
    });
    $datatable.on('draw.dt', function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green'
      });
    });

    TableManageButtons.init();
  });

var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

      echartBar.setOption({
        title: {
          text: 'Bar Graph',
          subtext: 'Graph subtitle'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          x: 100,
          data: ['2015', '2016']
        },
       
        calculable: true,
        xAxis: [{
          type: 'value',
          boundaryGap: [0, 0.01]
        }],
        yAxis: [{
          type: 'category',
          data: ['Enero', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        }],
        series: [{
          name: '2015',
          type: 'bar',
          data: [18203, 23489, 29034, 104970, 131744, 630230]
        }, {
          name: '2016',
          type: 'bar',
          data: [19325, 23438, 31000, 121594, 134141, 681807]
        }]
      });

</script>
<script>
  $(document).ready(function() {
    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
          {
            extend: "copy",
            className: "btn-sm"
          },
          {
            extend: "csv",
            className: "btn-sm"
          },
          {
            extend: "excel",
            className: "btn-sm"
          },
          {
            extend: "pdfHtml5",
            className: "btn-sm"
          },
          {
            extend: "print",
            className: "btn-sm"
          },
          ],
          responsive: true
        });
      }
    };

    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons();
        }
      };
    }();

    $('#datatable').dataTable();

    $('#datatable-keytable').DataTable({
      keys: true
    });

    $('#datatable-responsive1').DataTable();

    $('#datatable-scroller').DataTable({
      ajax: "js/datatables/json/scroller-demo.json",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });

    $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
      'order': [[ 1, 'asc' ]],
      'columnDefs': [
      { orderable: false, targets: [0] }
      ]
    });
    $datatable.on('draw.dt', function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green'
      });
    });

    TableManageButtons.init();
  });

var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

      echartBar.setOption({
        title: {
          text: 'Bar Graph',
          subtext: 'Graph subtitle'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          x: 100,
          data: ['2015', '2016']
        },
       
        calculable: true,
        xAxis: [{
          type: 'value',
          boundaryGap: [0, 0.01]
        }],
        yAxis: [{
          type: 'category',
          data: ['Enero', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        }],
        series: [{
          name: '2015',
          type: 'bar',
          data: [18203, 23489, 29034, 104970, 131744, 630230]
        }, {
          name: '2016',
          type: 'bar',
          data: [19325, 23438, 31000, 121594, 134141, 681807]
        }]
      });

</script>
<!-- /Datatables -->

<!-- barras horizontal -->
    <script>
      var theme = {
          color: [
              '#e67e22', 'red'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },




          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },
  
         
      };

      var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

      echartBar.setOption({
        title: {
          text: 'Sectores',
          subtext: 'Giros'
        },

        tooltip: {
          trigger: 'axis'
        },
        legend: {
          x: 100,
          data: ['2015']
        },
        
        calculable: true,
        xAxis: [{
          type: 'value',
          boundaryGap: [0, 0.01]
        }],
        yAxis: [{
          type: 'category',
          data: ['Alimentos', 'Bienes de Capital', 'Biotecnologia', 'Electrico', 'Farmaceutico', 'Logistico', 'Manufactura', 'Metalmecanico', 'Papel', 'Textil']
        }],
        series: [{
          name: '2015',
          type: 'bar',
          data: [18203, 23489, 29034, 104970, 131744, 630230, 23489, 29034, 104970, 23489]
        
        }]
      });

      
    </script>


 <!-- //barras horizontal -->
</body>
</html>
