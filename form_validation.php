<?php
//session_start();
//if(!isset($_SESSION["user"])){
  //header("location:login.php");
//}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nuevo Registro| </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>



  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
          
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
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
                      <li><a href="index.php">Tablero</a></li>
                      
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Nuevo Registro</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar Proyecto</h2>
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

                    <form class="form-horizontal form-label-left" action="guardar_form.php" method="POST" novalidate>
                    </p>
                      <span class="section">Informacion de la Empresa</span>
                  <center>
                    <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span><input type="text" name="proyecto" id="proyecto" class="form-control" placeholder="Nombre de el proyecto" required="required"
                           ></input>
                    </div>
                      </div>
                      <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-industry " aria-hidden="true"></i></span><input type="text" name="empresa" id="empresa" class="form-control" placeholder="Nombre del la Empresa" required="required"
                            ></input>
                    </div>
                      </div>
                       <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Ubicacion del Proyecto" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>
                            <div class="form-group">
                             <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12 ">
                             <span class="input-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i></span>
                            <select id="municipio" name="municipio" class="form-control">
                            <option value="Acatlán">Acatlán</option>
                            <option value="Acaxochitlán">Acaxochitlán</option>
                            <option value="Actopan">Actopan</option>
                            <option value="Agua Blanca de Iturbide">Agua Blanca de Iturbide</option>
                            <option value="Ajacuba">Ajacuba</option>
                            <option value="Alfajayucan">Alfajayucan</option>
                            <option value="Almoloya">Almoloya</option>
                            <option value="Apan">Apan</option>
                            <option value="Atitalaquia">Atitalaquia</option>
                            <option value="Atlapexco">Atlapexco</option>
                            <option value="Atotonilco de Tula">Atotonilco de Tula</option>
                            <option value="Atotonilco el Grande">Atotonilco el Grande</option>
                            <option value="Calnali">Calnali</option>
                            <option value="Cardonal">Cardonal</option>
                            <option value="Chapantongo">Chapantongo</option>
                            <option value="Chapulhuacán">Chapulhuacán</option>
                            <option value="Chilcuautla">Chilcuautla</option>
                            <option value="Cuautepec de Hinojos">Cuautepec de Hinojosa</option>
                            <option value="El Arenal">El Arenal</option>
                            <option value="Eloxochitlán">Eloxochitlán</option>
                            <option value="Emiliano Zapata">Emiliano Zapata</option>
                            <option value="Francisco I. Madero">Francisco I. Madero</option>
                            <option value="Huasca de Ocampo">Huasca de Ocampo</option>
                            <option value="Huautla">Huautla</option>
                            <option value="Huazalingo">Huazalingo</option>
                            <option value="Huehuetla">Huehuetla</option>
                            <option value="Huejutla de Reyes">Huejutla de Reyes</option>
                            <option value="Huichapan">Huichapan</option>
                            <option value="Ixmiquilpan">Ixmiquilpan</option>
                            <option value="Jacala de Ledezma">Jacala de Ledezma</option>
                            <option value="Jaltocán">Jaltocán</option>
                            <option value="Juárez Hidalgo">Juárez Hidalgo</option>
                            <option value="La Misión">La Misión</option>
                            <option value="Lolotla">Lolotla</option>
                            <option value="Metepec">Metepec</option>
                            <option value="Metztitlán">Metztitlán</option>
                            <option value="Mineral de la Reforma">Mineral de la Reforma</option>
                            <option value="Mineral del Chico">Mineral del Chico</option>
                            <option value="Mineral del Monte">Mineral del Monte</option>
                            <option value="Mixquiahuala de Juárez">Mixquiahuala de Juárez</option>
                            <option value="Molango de Escamilla">Molango de Escamilla</option>
                            <option value="Nicolás Flore">Nicolás Flores</option>
                            <option value="Nopala de Villagrán">Nopala de Villagrán</option>
                            <option value="Omitlán de Juárez">Omitlán de Juárez</option>
                            <option value="Pachuca de Soto">Pachuca de Soto</option>
                            <option value="Pacula">Pacula</option>
                            <option value="Pisaflores">Pisaflores</option>
                            <option value="Progreso de Obregón">Progreso de Obregón</option>
                            <option value="San Agustín Metzquititlán">San Agustín Metzquititlán</option>
                            <option value="San Agustín Tlaxiaca">San Agustín Tlaxiaca</option>
                            <option value="San Bartolo Tutotepec">San Bartolo Tutotepec</option>
                            <option value="San Felipe Orizatlán">San Felipe Orizatlán</option>
                            <option value="San Salvador">San Salvador</option>
                            <option value="Santiago de Anaya">Santiago de Anaya</option>
                            <option value="Santiago Tulantepec de Lugo Guerr">Santiago Tulantepec de Lugo Guerre</option>
                            <option value="Singuilucan">Singuilucan</option>
                            <option value="Tasquillo">Tasquillo</option>
                            <option value="Tecozautla">Tecozautla</option>
                            <option value="Tenango de Doria">Tenango de Doria</option>
                            <option value="Tepeapulco">Tepeapulco</option>
                            <option value="Tepehuacán de Guerrero">Tepehuacán de Guerrero</option>
                            <option value="Tepeji del Río de Ocampo">Tepeji del Río de Ocampo</option>
                            <option value="Tepetitlán">Tepetitlán</option>
                            <option value="Tetepango">Tetepango</option>
                            <option value="Tezontepec de Aldama">Tezontepec de Aldama</option>
                            <option value="Tianguistengo">Tianguistengo</option>
                            <option value="Tizayuca">Tizayuca</option>
                            <option value="Tlahuelilpan">Tlahuelilpan</option>
                            <option value="Tlahuiltepa">Tlahuiltepa</option>
                            <option value="Tlanalapa">Tlanalapa</option>
                            <option value="Tlanchinol">Tlanchinol</option>
                            <option value="Tlaxcoapan">Tlaxcoapan</option>
                            <option value="Tolcayuca">Tolcayuca</option>
                            <option value="Tula de Allende">Tula de Allende</option>
                            <option value="Tulancingo de Bravo">Tulancingo de Bravo</option>
                            <option value="Villa de Tezontepec">Villa de Tezontepec</option>
                            <option value="Xochiatipan">Xochiatipan</option>
                            <option value="Xochicoatlán">Xochicoatlán</option>
                            <option value="Yahualica">Yahualica</option>
                            <option value="Zacualtipán de Ángeles">Zacualtipán de Ángeles</option>
                            <option value="Zapotlán de Juárez">Zapotlán de Juárez</option>
                            <option value="Zempoala">Zempoala</option>
                            <option value="Zimapán">Zimapán</option>
                            </select>
                       </div>
                      </div>

                     <div class="form-group">
                             <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12 ">
                             <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                            <select id="origen" name="origen" class="form-control">
                              <option>Abjasia</option>
                              <option>Acrotiri y Dhekelia</option>
                              <option>Afganistán</option>
                              <option>Albania</option>
                              <option>Alemania</option>
                              <option>Alto Karabaj</option>
                              <option>Andorra</option>
                              <option>Angola</option>
                              <option>Anguila</option>
                              <option>Antigua y Barbuda</option>
                              <option>Arabia Saudita</option>
                              <option>Argelia</option>
                              <option>Argentina</option>
                              <option>Armenia</option>
                              <option>Aruba</option>
                              <option>Australia</option>
                              <option>Austria</option>
                              <option>Azerbaiyán</option>
                              <option>Bahamas</option>
                              <option>Bahréin</option>
                              <option>Bangladesh</option>
                              <option>Barbados</option>
                              <option>Bélgica</option>
                              <option>Belice</option>
                              <option>Benin</option>
                              <option>Bermnudas</option>
                              <option>Bielorrusia</option>
                              <option>Birmania</option>
                              <option>Bolivia</option>
                              <option>Bosnia y Herzegovina</option>
                              <option>Botsuana</option>
                              <option>Brasil</option>
                              <option>Bruneí</option>
                              <option>Bulgaria</option>
                              <option>Burkina Faso</option>
                              <option>Burundi</option>
                              <option>Bután</option>
                              <option>Cabo Verde</option>
                              <option>Islas Caimán</option>
                              <option>Camboya</option>
                              <option>Camerún</option>
                              <option>Canadá</option>
                              <option>Catar</option>
                              <option>Chad</option>
                              <option>Chile</option>
                              <option>China</option>
                              <option>Chipre</option>
                              <option>Re. Turca Norte Chipre</option>
                              <option>Islas Cocos</option>
                              <option>Colombia</option>
                              <option>Comoras</option>
                              <option>Rep. del Congo</option>
                              <option>Rep. Dem. del Congo</option>
                              <option>Islas Cook</option>
                              <option>Corea del Norte</option>
                              <option>Corea del Sur</option>
                              <option>Costa de Marfil</option>
                              <option>Costa Rica</option>
                              <option>Croacia</option>
                              <option>Cuba</option>
                              <option>Curazao</option>
                              <option>Dinamarca</option>
                              <option>Dominica</option>
                              <option>Ecuador</option>
                              <option>Egipto</option>
                              <option>El Salvador</option>
                              <option>Emiratos Árabes Unidos</option>
                              <option>Eritrea</option>
                              <option>Eslovaquia</option>
                              <option>Eslovenia</option>
                              <option>España</option>
                              <option>Estados Unidos</option>
                              <option>Estonia</option>
                              <option>Etiopia</option>
                              <option>Islas Feroe</option>
                              <option>Filipinas</option>
                              <option>Finlanda</option>
                              <option>Fiyi</option>
                              <option>Francia</option>
                              <option>Gabón</option>
                              <option>Gambia</option>
                              <option>Georgia</option>
                              <option>Ghana</option>
                              <option>Gibraltar</option>
                              <option>Granada</option>
                              <option>Grecia</option>
                              <option>Groelandia</option>
                              <option>Guam</option>
                              <option>Guatemala</option>
                              <option>Guernsey</option>
                              <option>Guinea</option>
                              <option>Guinea-Bissau</option>
                              <option>Guinea Ecuatorial</option>
                              <option>Guyana</option>
                              <option>Haití</option>
                              <option>Honduras</option>
                              <option>Hong Kong</option>
                              <option>Hungria</option>
                              <option>India</option>
                              <option>Indonesia</option>
                              <option>Irán</option>
                              <option>Irak</option>
                              <option>Irlanda</option>
                              <option>Islandia</option>
                              <option>Israel</option>
                              <option>Italia</option>
                              <option>Jamaica</option>
                              <option>Japón</option>
                              <option>Isla de Jersey</option>
                              <option>Jordania</option>
                              <option>Kazajistán</option>
                              <option>Kenia</option>
                              <option>Kirguistán</option>
                              <option>Kiribati</option>
                              <option>Kosovo</option>
                              <option>Kuwait</option>
                              <option>Lesoto</option>
                              <option>Letonia</option>
                              <option>Líbano</option>
                              <option>Liberia</option>
                              <option>Libia (Consejo Nacional)</option>
                              <option>Liechtenstein</option>
                              <option>Lituania</option>
                              <option>Luxemburgo</option>
                              <option>Macao</option>
                              <option>Macedonia</option>
                              <option>Madagascar</option>
                              <option>Malasia</option>
                              <option>Malaui</option>
                              <option>Maldivas</option>
                              <option>Malí</option>
                              <option>Malta</option>
                              <option>Islas Malvinas (Falkland)</option>
                              <option>sla de Man</option>
                              <option>Islas Marianas del norte</option>
                              <option>Marruecos</option>
                              <option>Islas Marshall</option>
                              <option>Mauricio</option>
                              <option>Mauritania</option>
                              <option>Mayotte</option>
                              <option>México</option>
                              <option>Estados Federados Micronesia</option>
                              <option>Moldavia</option>
                              <option>Mónaco</option>
                              <option>Mongolia</option>
                              <option>Montenegro</option>
                              <option>Montserrat</option>
                              <option>Mozambique</option>
                              <option>Namibia</option>
                              <option>Nauru</option>
                              <option>Isla de Navidad</option>
                              <option>Nepal</option>
                              <option>Nicaragua</option>
                              <option>Níger</option>
                              <option>Nigeria</option>
                              <option>Niue</option>
                              <option>Isla Norfolk</option>
                              <option>Noruega</option>
                              <option>Nueva Caledonia</option>
                              <option>Nueva Zelanda</option>
                              <option>Omán</option>
                              <option>Osetia del Sur</option>
                              <option>Países Bajos</option>
                              <option>Pakistán</option>
                              <option>Palaos</option>
                              <option>Palestina</option>
                              <option>Panamá</option>
                              <option>Papúa Nueva Guinea</option>
                              <option>Paraguay</option>
                              <option>Perú</option>
                              <option>Polinesia Francesa</option>
                              <option>Polonia</option>
                              <option>Portugal</option>
                              <option>Puerto Rico</option>
                              <option>Reino Unido</option>
                              <option>Rep. Checa</option>
                              <option>Rep. Dominicana</option>
                              <option>Ruanda</option>
                              <option>Rumania</option>
                              <option>Rusia</option>
                              <option>Sahara Occidental</option>
                              <option>Islas Salomón</option>
                              <option>Samoa</option>
                              <option>Samoa Americana</option>
                              <option>San Bartolomé</option>
                              <option>San Cristóbal y Nieves</option>
                              <option>San Marino</option>
                              <option>San Martín (Francia)</option>
                              <option>San Martín (Países Bajos)</option>
                              <option>San Pedro y Miquelón</option>
                              <option>San Vicente y las Granadinas</option>
                              <option>Santa Helena</option>
                              <option>Santa Lucía</option>
                              <option>Santo Tomé y Príncipe</option>
                              <option>Senegal</option>
                              <option>Serbia</option>
                              <option>Seychelles</option>
                              <option>Sierra Leona</option>
                              <option>Singapur</option>
                              <option>Siria</option>
                              <option>Somalia</option>
                              <option>Somalilandia</option>
                              <option>Sri Lanka</option>
                              <option>Suazilandia</option>
                              <option>Sudáfrica</option>
                              <option>Sudán</option>
                              <option>Sudán del Sur</option>
                              <option>Suecia</option>
                              <option>Suiza</option>
                              <option>Surinam</option>
                              <option>Svalbard</option>
                              <option>Tailandia</option>
                              <option>Taiwán</option>
                              <option>Tanzania</option>
                              <option>Tayikistán</option>
                              <option>Timor Oriental</option>
                              <option>Togo</option>
                              <option>Tokelau</option>
                              <option>Tonga</option>
                              <option>Transnistria</option>
                              <option>Trinidad y Tobago</option>
                              <option>Túnez</option>
                              <option>Islas Turcas y Caicos</option>
                              <option>Turkmenistán</option>
                              <option>Turquía</option>
                              <option>Tuvalu</option>
                              <option>Ucrania</option>
                              <option>Uganda</option>
                              <option>Uruguay</option>
                              <option>Uzbekistán</option>
                              <option>Vanuatu</option>
                              <option>Ciudad del Vaticano</option>
                              <option>Venezuela</option>
                              <option>Vietnam</option>
                              <option>Islas Vírgenes Británicas</option>
                              <option>Islas Vírgenes de Estados Unidos</option>
                              <option>Wallis y Futuna</option>
                              <option>Yemen</option>
                              <option>Yibuti</option>
                              <option>Zambia</option>
                              <option>Zimbaue</option>
                            </select>
                       </div>
                      </div>
                    <div class="form-group">
                             <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12 ">
                             <span class="input-group-addon"><i class="fa fa-area-chart" aria-hidden="true"></i></span>
                            <select id="sector" name="sector" class="form-control">
                             <option >Sector</option>
                            <option >Textiil</option>
                            <option >Papel</option>
                            <option>Metal Mecanico</option>
                            <option >Logistico</option>
                            <option >Farmaceutico</option>
                            <option >Electrico</option>
                            <option >Alimentos</option>
                             <option >Cosntrucción</option>
                            <option >Manofactura</option>   
                             <option >Bienes de Capital</option>                        
                            </select>
                       </div>
                      </div>
                        <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span><input type="text" name="inversion" id="inversion"  class="form-control" onkeypress="return valida(event)" placeholder="Inversión" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>
                      <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-suitcase" aria-hidden="true"></i></span><input type="text" name="empleos" id="empleos" class="form-control" onkeypress="return valida(event)" placeholder="Empleos Directos" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>
                       <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-laptop" aria-hidden="true"></i></span><input type="text" name="dependencia" id="dependencia" class="form-control" placeholder="Dependencia a cargo" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>
                         
                      <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-truck" aria-hidden="true"></i></span><input type="text" name="giro" id="giro" class="form-control" placeholder="Giro" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>
                        <div class="form-group">
                             <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12 ">
                             <span class="input-group-addon"><i class="fa fa-flag" aria-hidden="true"></i></span>
                            <select id="fase" name="fase" class="form-control">
                            <option value="1">Prospección</option>
                            <option value="2">Consolidada</option>                    
                            </select>
                       </div>
                      </div>
                      
                         <span class="section">Datos de Contacto</span>
                         <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span><input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo del Contacto" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>    
                         <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span><input type="text" name="telefono" id="telefono" class="form-control" placeholder="telefono" onkeypress="return valida(event)" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>    
                       <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>    
                      <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><input type="email" name="email2" id="email2" class="form-control" placeholder="Confirme el Email" data-validate-linked="email" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div> 
                         <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span><input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección del Contacto" required="required"
                            data-validate-words="1"></input>
                    </div>
                      </div>    
                      <div class="item form-group">
                      <div class="input-group input-group-sm: col-md-6 col-sm-6 col-xs-12">
                            <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span><input type="url" name="web" id="web" class="form-control" placeholder="Sitio Web de la Empresa"
                            data-validate-words="1"></input>
                    </div>
                      </div>   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                      </center>
                    </form>
                  </div>
                </div>
              </div>
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
    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
  </body>
</html>