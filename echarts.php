<!DOCTYPE html>
<html lang="es">
  
//cometarios version jueves
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Seguimiento de proyectos</title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Switchery -->
  <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <!-- starrr -->
  <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">

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
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
          </div>

          <div class="clearfix"></div>


          <br />

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
                  <img src="images/img.jpg" alt="">John Doe
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">


        <!-- FASE -->
        <div class="row tile_count">

          <div id="gadgets" class="col-md-3 col-sm-4 col-xs-6 col-xs-hidden tile_stats_count">
           <span class="count_top"><i class="fa fa-building"></i> Prospeccion </span>
           <div class="">
            <div id="echart_guage1" style="height:170px;"></div>
          </div>
        </div>
        <div id="gadgets" class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-industry"></i> Softlanding</span>
          <div class="">
            <div id="echart_guage2" style="height:170px;"></div>
          </div>
        </div>
        <div id="gadgets" class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-industry"></i> Preoperativo</span>
          <div class="">
            <div id="echart_guage3" style="height:170px;"></div>
          </div>
        </div>
        <div  id="gadgets" class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-industry"></i> Operativo</span>
          <div class="">
            <div id="echart_guage4" style="height:170px;"></div>
          </div>
        </div>
      </div>
      <!-- /FASE -->


      <!-- ESTATUS -->
      <div class="row tile_count">

        <div id="" class="col-md-3 col-sm-4 col-xs-6">
         <div class="x_content">
          <div id="echart_guage" style="height:235px;"></div>
          <h3>Autozone</h3>
          <ul class="list-unstyled user_data">
            <li><i class="fa fa-map-marker user-profile-icon"></i> Villa de Tezontepec
            </li>
            <li><i class="fa fa-map-marker user-profile-icon"></i> Parque Industrial PLATAH
            </li>
            <li>
              <i class="fa fa-briefcase user-profile-icon"></i> Autopartes
            </li>
            <li class="m-top-xs">
              <i class="fa fa-external-link user-profile-icon"></i>
              <a href="http://www.kimlabs.com/profile/" target="_blank">www.autozone.com</a>
            </li>
          </ul>
          <a class="btn btn-danger"><i class="fa fa-edit m-right-xs"></i>Editar</a>
          <?php
          $color1 = '"progress-bar progress-bar-success"';
          $color2 = '"progress-bar progress-bar-danger"';
          $color3 = '"progress-bar progress-bar-blue"';
          echo $color;
          ?>

          <div class="progress progress_sm">
            <div class=<?php echo $color1 ?> role="progressbar" data-transitiongoal="50"></div>
          </div>
          <div class="progress progress_sm">
            <div class=<?php echo $color2 ?> role="progressbar" data-transitiongoal="50"></div>
          </div>
          <div class="progress progress_sm">
            <div class=<?php echo $color3 ?> role="progressbar" data-transitiongoal="50"></div>
          </div>
          <br><br><br><br><br><br><br><br><br><br><br>
        </div>

      </div>

      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Registrar<small></small></h2>
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
          <div class="x_content">
            <div id="alerts"></div>
            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">

              <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu input-append">
                  <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                  <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
              </div>
              <br>
              <div class="row">
                <div class="col-6">
                  <p>ASUNTO</p>
                </div>
                <div class="col-6">
                  <p>FECHA</p>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nobis delectus nihil, asperiores. A voluptas nulla ipsam quaerat dolores mollitia, in molestiae doloribus maxime vitae consectetur commodi, dolore ex! Optio!</p>
                </div>
                <div class="col-6">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, asperiores, dicta! Molestiae atque delectus commodi, cupiditate soluta odio voluptate praesentium a, voluptatum quae, sint expedita omnis aut. Ducimus, minus, sint.</p>
                </div>
              </div>

              <br><br>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label for="message">Asunto :</label>
                   <textarea id="message" required="required" class="form-control" placeholder="Asunto" ></textarea>
                 </div>

                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Area</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_single form-control" tabindex="-1">
                      <option></option>
                      <option value="AK">COINHI</option>
                      <option value="HI">Hawaii</option>
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <br><br>
                  <label for="message">Tramite Municipal/Estatal/Federal :</label>
                  <textarea id="message" required="required" class="form-control" placeholder="Seguimiento del tramite" ></textarea>
                </div>

                <div class="row">
                 <!-- TAB proyectos -->
                 <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTabProy" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_negociaciones" id="" role="tab" data-toggle="tab" aria-expanded="true">Negociaciones</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_recomendaciones" role="tab" id="" data-toggle="tab" aria-expanded="false">Recomendaciones</a>
                    </li>
                  </ul>

                  <div id="myTabProyContent" class="tab-content">

                    <!-- TAB negociaciones/recomendaciones -->
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_negociaciones" aria-labelledby="home-tab">
                     <div class="form-group">
                       <label for="message">Negociaciones :</label>
                       <textarea id="message" required="required" class="form-control" placeholder="Asunto" ></textarea>
                     </div>
                   </div>
                   <!-- /TAB negociaciones/recomendaciones -->

                   <!-- TAB consolidados 3FASES -->
                   <div role="tabpanel" class="tab-pane fade" id="tab_recomendaciones" aria-labelledby="">
                     <div class="form-group">
                       <label for="message">Recomendaciones :</label>
                       <textarea id="message" required="required" class="form-control" placeholder="Asunto" ></textarea>
                     </div>
                   </div>
                   <!-- /TAB consolidados 3FASES -->
                 </div>
               </div>
               <!-- /TAB proyectos -->
             </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
             <label for="message">Fecha :</label>
             <textarea id="message" required="required" class="form-control" placeholder="Asunto" ></textarea>
           </div>
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Responsable</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="select2_single form-control" tabindex="-1">
                <option></option>
                <option value="AK">Vanessa Flores</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
              </select>
            </div>
          </div>
          <br><br>
          <div class="form-group">
           <br><br>
           <label class="control-label col-md-3 col-sm-3 col-xs-12">Semaforo</label>
           <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="">
              <label>
                <input type="checkbox" class="js-switch" checked /> alerta
              </label>
            </div>
            <div class="">
              <label>
                <input type="checkbox" class="js-switch" /> En proceso
              </label>
            </div>


          </div>
        </div>





      </div>

    </div>

    


  </div>

  <textarea name="descr" id="descr" style="display:none;"></textarea>

</div>
</div>
</div>

<div class="col-md-9 col-sm-12 col-xs-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Seguimiento<small></small></h2>
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
    <div class="x_content">
      <div id="alerts"></div>
      <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
        <div class="x_content">
          <div class="dashboard-widget-content">

            <ul class="list-unstyled timeline widget">
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                    </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>





  </div>
</div>
<!-- /ESTATUS -->


</div>





</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
<!-- ECharts -->
<script src="vendors/echarts/dist/echarts.min.js"></script>

<!-- bootstrap-progressbar -->
<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<!-- iCheck -->
<script src="vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="js/moment/moment.min.js"></script>
<script src="js/datepicker/daterangepicker.js"></script>
<!-- Ion.RangeSlider -->
<script src="vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="vendors/starrr/dist/starrr.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>


<script>
  var theme = {
    color: [
    '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
    '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
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

    dataZoom: {
      dataBackgroundColor: '#eee',
      fillerColor: 'rgba(64,136,41,0.2)',
      handleColor: '#408829'
    },
    grid: {
      borderWidth: 0
    },

    categoryAxis: {
      axisLine: {
        lineStyle: {
          color: '#408829'
        }
      },
      splitLine: {
        lineStyle: {
          color: ['#eee']
        }
      }
    },

    valueAxis: {
      axisLine: {
        lineStyle: {
          color: '#408829'
        }
      },
      splitArea: {
        show: true,
        areaStyle: {
          color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
        }
      },
      splitLine: {
        lineStyle: {
          color: ['#eee']
        }
      }
    },
    timeline: {
      lineStyle: {
        color: '#408829'
      },
      controlStyle: {
        normal: {color: '#408829'},
        emphasis: {color: '#408829'}
      }
    },

    k: {
      itemStyle: {
        normal: {
          color: '#68a54a',
          color0: '#a9cba2',
          lineStyle: {
            width: 1,
            color: '#408829',
            color0: '#86b379'
          }
        }
      }
    },
    map: {
      itemStyle: {
        normal: {
          areaStyle: {
            color: '#ddd'
          },
          label: {
            textStyle: {
              color: '#c12e34'
            }
          }
        },
        emphasis: {
          areaStyle: {
            color: '#99d2dd'
          },
          label: {
            textStyle: {
              color: '#c12e34'
            }
          }
        }
      }
    },
    force: {
      itemStyle: {
        normal: {
          linkStyle: {
            strokeColor: '#408829'
          }
        }
      }
    },
    chord: {
      padding: 4,
      itemStyle: {
        normal: {
          lineStyle: {
            width: 1,
            color: 'rgba(128, 128, 128, 0.5)'
          },
          chordStyle: {
            lineStyle: {
              width: 1,
              color: 'rgba(128, 128, 128, 0.5)'
            }
          }
        },
        emphasis: {
          lineStyle: {
            width: 1,
            color: 'rgba(128, 128, 128, 0.5)'
          },
          chordStyle: {
            lineStyle: {
              width: 1,
              color: 'rgba(128, 128, 128, 0.5)'
            }
          }
        }
      }
    },
    gauge: {
      startAngle: 225,
      endAngle: -45,
      axisLine: {
        show: true,
        lineStyle: {
          color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
          width: 8
        }
      },
      axisTick: {
        splitNumber: 10,
        length: 12,
        lineStyle: {
          color: 'auto'
        }
      },
      axisLabel: {
        textStyle: {
          color: 'auto'
        }
      },
      splitLine: {
        length: 18,
        lineStyle: {
          color: 'auto'
        }
      },
      pointer: {
        length: '90%',
        color: 'auto'
      },
      title: {
        textStyle: {
          color: '#333'
        }
      },
      detail: {
        textStyle: {
          color: 'auto'
        }
      }
    },
    textStyle: {
      fontFamily: 'Arial, Verdana, sans-serif'
    }
  };




  var echartGauge = echarts.init(document.getElementById('echart_guage'), theme);

  echartGauge.setOption({
    tooltip: {
      formatter: "{a} <br/>{b} : {c}%"
    },
    
    series: [{
      name: 'Performance',
      type: 'gauge',
      center: ['50%', '50%'],
      startAngle: 140,
      endAngle: -140,
      min: 0,
      max: 100,
      precision: 0,
      splitNumber: 10,
      axisLine: {
        show: true,
        lineStyle: {
          color: [
          [0.2, 'lightgreen'],
          [0.4, 'orange'],
          [0.8, 'skyblue'],
          [1, '#ff4500']
          ],
          width: 30
        }
      },
      axisTick: {
        show: true,
        splitNumber: 5,
        length: 8,
        lineStyle: {
          color: '#eee',
          width: 1,
          type: 'solid'
        }
      },
      axisLabel: {
        show: true,
        formatter: function(v) {
          switch (v + '') {
            case '10':
            return 'a';
            case '30':
            return 'b';
            case '60':
            return 'c';
            case '90':
            return 'd';
            default:
            return '';
          }
        },
        textStyle: {
          color: '#333'
        }
      },
      splitLine: {
        show: true,
        length: 30,
        lineStyle: {
          color: '#eee',
          width: 2,
          type: 'solid'
        }
      },
      pointer: {
        length: '80%',
        width: 8,
        color: 'auto'
      },
      title: {
        show: true,
        offsetCenter: ['-65%', -10],
        textStyle: {
          color: '#333',
          fontSize: 15
        }
      },
      detail: {
        show: true,
        backgroundColor: 'rgba(0,0,0,0)',
        borderWidth: 0,
        borderColor: '#ccc',
        width: 100,
        height: 40,
        offsetCenter: ['-60%', 10],
        formatter: '{value}%',
        textStyle: {
          color: 'auto',
          fontSize: 30
        }
      },
      data: [{
        value: 38,
        name: 'Estatus'
      }]
    }]
  });

  var echartGauge = echarts.init(document.getElementById('echart_guage1'), theme);

  echartGauge.setOption({
    series: [{
      name: 'Performance',
      type: 'gauge',
      center: ['50%', '50%'],
      startAngle: 140,
      endAngle: -140,
      min: 0,
      max: 100,
      precision: 0,
      splitNumber: 10,
      axisLine: {
        show: true,
        lineStyle: {
          color: [
          [1, '#2583A8'],

          [1, '#2c3e50']
          ],
          width: 20
        }
      },
      axisTick: {
        show: true,
        splitNumber: 5,
        length: 8,
        lineStyle: {
          color: '#eee',
          width: 1,
          type: 'solid'
        }
      },
      axisLabel: {
        show: true,
        formatter: function(v) {
          switch (v + '') {
            case '10':
            return '';
            case '30':
            return '';
            case '60':
            return '';
            case '90':
            return '';
            default:
            return '';
          }
        },
        textStyle: {
          color: '#333'
        }
      },
      splitLine: {
        show: true,
        length: 30,
        lineStyle: {
          color: '#eee',
          width: 2,
          type: 'solid'
        }
      },
      pointer: {
        length: '80%',
        width: 8,
        color: 'auto'
      },
      title: {
        show: true,
        offsetCenter: ['-65%', -10],
        textStyle: {
          color: '#333',
          fontSize: 12
        }
      },
      detail: {
        show: true,
        backgroundColor: 'rgba(0,0,0,0)',
        borderWidth: 0,
        borderColor: '#ccc',
        width: 100,
        height: 40,
        offsetCenter: ['-60%', 10],
        formatter: '{value}%',
        textStyle: {
          color: 'auto',
          fontSize: 20
        }
      },
      data: [{
        value: 100,
        name: 'Prospección'
      }]
    }]
  });


  var echartGauge = echarts.init(document.getElementById('echart_guage2'), theme);

  echartGauge.setOption({
    series: [{
      name: 'Performance',
      type: 'gauge',
      center: ['50%', '50%'],
      startAngle: 140,
      endAngle: -140,
      min: 0,
      max: 100,
      precision: 0,
      splitNumber: 10,
      axisLine: {
        show: true,
        lineStyle: {
          color: [
          [1, '#2583A8'],

          [1, '#2c3e50']
          ],
          width: 20
        }
      },
      axisTick: {
        show: true,
        splitNumber: 5,
        length: 8,
        lineStyle: {
          color: '#eee',
          width: 1,
          type: 'solid'
        }
      },
      axisLabel: {
        show: true,
        formatter: function(v) {
          switch (v + '') {
            case '10':
            return '';
            case '30':
            return '';
            case '60':
            return '';
            case '90':
            return '';
            default:
            return '';
          }
        },
        textStyle: {
          color: '#333'
        }
      },
      splitLine: {
        show: true,
        length: 30,
        lineStyle: {
          color: '#eee',
          width: 2,
          type: 'solid'
        }
      },
      pointer: {
        length: '80%',
        width: 8,
        color: 'auto'
      },
      title: {
        show: true,
        offsetCenter: ['-65%', -10],
        textStyle: {
          color: '#333',
          fontSize: 12
        }
      },
      detail: {
        show: true,
        backgroundColor: 'rgba(0,0,0,0)',
        borderWidth: 0,
        borderColor: '#ccc',
        width: 100,
        height: 40,
        offsetCenter: ['-60%', 10],
        formatter: '{value}%',
        textStyle: {
          color: 'auto',
          fontSize: 20
        }
      },
      data: [{
        value: 100,
        name: 'Instalación'
      }]
    }]
  });


  var echartGauge = echarts.init(document.getElementById('echart_guage3'), theme);

  echartGauge.setOption({
    series: [{
      name: 'Performance',
      type: 'gauge',
      center: ['50%', '50%'],
      startAngle: 140,
      endAngle: -140,
      min: 0,
      max: 100,
      precision: 0,
      splitNumber: 10,
      axisLine: {
        show: true,
        lineStyle: {
          color: [
          [.35, '#2583A8'],

          [1, '#bdc3c7']
          ],
          width: 20
        }
      },
      axisTick: {
        show: true,
        splitNumber: 5,
        length: 8,
        lineStyle: {
          color: '#eee',
          width: 1,
          type: 'solid'
        }
      },
      axisLabel: {
        show: true,
        formatter: function(v) {
          switch (v + '') {
            case '10':
            return '';
            case '30':
            return '';
            case '60':
            return '';
            case '90':
            return '';
            default:
            return '';
          }
        },
        textStyle: {
          color: '#333'
        }
      },
      splitLine: {
        show: true,
        length: 30,
        lineStyle: {
          color: '#eee',
          width: 2,
          type: 'solid'
        }
      },
      pointer: {
        length: '80%',
        width: 8,
        color: 'auto'
      },
      title: {
        show: true,
        offsetCenter: ['-65%', -10],
        textStyle: {
          color: '#333',
          fontSize: 12
        }
      },
      detail: {
        show: true,
        backgroundColor: 'rgba(0,0,0,0)',
        borderWidth: 0,
        borderColor: '#ccc',
        width: 100,
        height: 40,
        offsetCenter: ['-60%', 10],
        formatter: '{value}%',
        textStyle: {
          color: 'auto',
          fontSize: 20
        }
      },
      data: [{
        value: 35,
        name: 'Preoperativo'
      }]
    }]
  });


  var echartGauge = echarts.init(document.getElementById('echart_guage4'), theme);

  echartGauge.setOption({
    series: [{
      name: 'Performance',
      type: 'gauge',
      center: ['50%', '50%'],
      startAngle: 140,
      endAngle: -140,
      min: 0,
      max: 100,
      precision: 0,
      splitNumber: 10,
      axisLine: {
        show: true,
        lineStyle: {
          color: [
          [0, '#2583A8'],

          [1, '#bdc3c7']
          ],
          width: 20
        }
      },
      axisTick: {
        show: true,
        splitNumber: 5,
        length: 8,
        lineStyle: {
          color: '#eee',
          width: 1,
          type: 'solid'
        }
      },
      axisLabel: {
        show: true,
        formatter: function(v) {
          switch (v + '') {
            case '10':
            return '';
            case '30':
            return '';
            case '60':
            return '';
            case '90':
            return '';
            default:
            return '';
          }
        },
        textStyle: {
          color: '#333'
        }
      },
      splitLine: {
        show: true,
        length: 30,
        lineStyle: {
          color: '#eee',
          width: 2,
          type: 'solid'
        }
      },
      pointer: {
        length: '80%',
        width: 8,
        color: 'auto'
      },
      title: {
        show: true,
        offsetCenter: ['-65%', -10],
        textStyle: {
          color: '#333',
          fontSize: 12
        }
      },
      detail: {
        show: true,
        backgroundColor: 'rgba(0,0,0,0)',
        borderWidth: 0,
        borderColor: '#ccc',
        width: 100,
        height: 40,
        offsetCenter: ['-60%', 10],
        formatter: '{value}%',
        textStyle: {
          color: 'auto',
          fontSize: 20
        }
      },
      data: [{
        value: 0,
        name: 'Operativo'
      }]
    }]
  });


</script>


<!-- Select2 -->
<script>
  $(document).ready(function() {
    $(".select2_single").select2({
      placeholder: "Select a state",
      allowClear: true
    });
    $(".select2_group").select2({});
    $(".select2_multiple").select2({
      maximumSelectionLength: 4,
      placeholder: "With Max Selection limit 4",
      allowClear: true
    });
  });
</script>
<!-- /Select2 -->

<!-- EDITOR -->
<!-- bootstrap-wysiwyg -->
<script>
  $(document).ready(function() {
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
      'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
      'Times New Roman', 'Verdana'
      ],
      fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function(idx, fontName) {
        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
      });
      $('a[title]').tooltip({
        container: 'body'
      });
      $('.dropdown-menu input').click(function() {
        return false;
      })
      .change(function() {
        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
      })
      .keydown('esc', function() {
        this.value = '';
        $(this).change();
      });

      $('[data-role=magic-overlay]').each(function() {
        var overlay = $(this),
        target = $(overlay.data('target'));
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });

      if ("onwebkitspeechchange" in document.createElement("input")) {
        var editorOffset = $('#editor').offset();

        $('.voiceBtn').css('position', 'absolute').offset({
          top: editorOffset.top,
          left: editorOffset.left + $('#editor').innerWidth() - 35
        });
      } else {
        $('.voiceBtn').hide();
      }
    }

    function showErrorAlert(reason, detail) {
      var msg = '';
      if (reason === 'unsupported-file-type') {
        msg = "Unsupported format " + detail;
      } else {
        console.log("error uploading file", reason, detail);
      }
      $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
    }

    initToolbarBootstrapBindings();

    $('#editor').wysiwyg({
      fileUploadError: showErrorAlert
    });

    window.prettyPrint;
    prettyPrint();
  });
</script>
<!-- /bootstrap-wysiwyg -->


<!-- /EDITOR -->
<!-- Ion.RangeSlider -->
<script>
  $(document).ready(function() {
    $("#range_27").ionRangeSlider({
      type: "double",
      min: 1000000,
      max: 2000000,
      grid: true,
      force_edges: true
    });
    $("#range").ionRangeSlider({
      hide_min_max: true,
      keyboard: true,
      min: 0,
      max: 5000,
      from: 1000,
      to: 4000,
      type: 'double',
      step: 1,
      prefix: "$",
      grid: true
    });
    $("#range_25").ionRangeSlider({
      type: "double",
      min: 1000000,
      max: 2000000,
      grid: true
    });
    $("#range_26").ionRangeSlider({
      type: "double",
      min: 0,
      max: 10000,
      step: 500,
      grid: true,
      grid_snap: true
    });
    $("#range_31").ionRangeSlider({
      type: "double",
      min: 0,
      max: 100,
      from: 30,
      to: 70,
      from_fixed: true
    });
    $(".range_min_max").ionRangeSlider({
      type: "double",
      min: 0,
      max: 100,
      from: 30,
      to: 70,
      max_interval: 50
    });
    $(".range_time24").ionRangeSlider({
      min: +moment().subtract(12, "hours").format("X"),
      max: +moment().format("X"),
      from: +moment().subtract(6, "hours").format("X"),
      grid: true,
      force_edges: true,
      prettify: function(num) {
        var m = moment(num, "X");
        return m.format("Do MMMM, HH:mm");
      }
    });
  });
</script>
<!-- /Ion.RangeSlider -->



</body>
</html>
