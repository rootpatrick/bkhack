<?php
require_once 'core/db.php';
$db = new DB();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> R.InvestSoft || Stand With Refugees </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">


  <link href="theme/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />


  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
   <?php  include 'header.php'  ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php  include 'nav.php'  ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
        <?php
            if (isset($_REQUEST['request']))
                  {
                    if ($_REQUEST['request']=='index')
                    {

                      include 'views/about.php'  ;
 
                    }

                    // About the user

                     else if ($_REQUEST['request']=='adduser')
                    {

                      include 'views/new_user.php'  ;
 
                    }
                     else if ($_REQUEST['request']=='userlist')
                    {

                      include 'views/new_type.php'  ;
 
                    }
                      else if ($_REQUEST['request']=='charges')
                    {

                      include 'views/charge.php'  ;
 
                  } 
                    else if ($_REQUEST['request']=='avantages')
                    {

                      include 'views/avantage.php'  ;
 
                    } 

                    else if ($_REQUEST['request']=='categories')
                    {

                      include 'views/categories.php'  ;
 
                    } 

                    //PARAMETRE LOGISTIQUE

                    else if ($_REQUEST['request']=='fournisseur')
                    {

                      include 'views/fournisseur.php'  ;
 
                    } 

                    else if ($_REQUEST['request']=='article')
                    {

                      include 'views/article.php'  ;
 
                    } 

                    else if ($_REQUEST['request']=='document')
                    {

                      include 'views/document.php'  ;
 
                    } 

                    else if ($_REQUEST['request']=='remorque')
                    {

                      include 'views/remorque.php'  ;
 
                    } 

                    else if ($_REQUEST['request']=='transporter')
                    {

                      include 'views/transporter.php'  ;
 
                    } 

                    else if ($_REQUEST['request']=='demande')
                    {

                      include 'views/demande.php'  ;
 
                    } 

                      // About the customer
                    else if($_REQUEST['request']=='mission'){

                      include 'views/new_mission.php' ;

                    } else if($_REQUEST['request']=='missionlist'){

                      include 'views/list_mission.php' ;

                    } else if($_REQUEST['request']=='customeredit'){

                      include 'views/edit_customer.php' ;
 
                    }

                    // About the CONGE

                    else if($_REQUEST['request']=='conge'){

                      include 'views/new_conge.php' ;



                    } else if($_REQUEST['request']=='congelist'){

                      include 'views/list_conge.php' ;

                      

                    } else if($_REQUEST['request']=='addproject'){

                      include 'views/new_project.php' ;

                    }

                    // About the source

                    else if($_REQUEST['request']=='addsource'){

                      include 'views/new_budget_owner.php' ;

                    } else if($_REQUEST['request']=='sourcelist'){

                      include 'views/budget_owner_list.php' ;

                    } else if($_REQUEST['request']=='sourceedit'){

                      include 'views/editowner.php' ;
                    }

                    // About products

                    else if($_REQUEST['request']=='ajouter'){

                      include 'views/new_ajent.php' ;

                    } else if($_REQUEST['request']=='listagent'){

                      include 'views/list_agent.php' ;

                    } else if($_REQUEST['request']=='editproduct'){

                      include 'views/edit_product.php' ;
                    }

                    // About the stock

                    else if($_REQUEST['request']=='sortie'){

                      include 'views/new_sortie.php' ;

                    } else if($_REQUEST['request']=='sortielist'){

                      include 'views/list_sortie.php' ;
                    }


                    // Apropos BON DE RECEPTION

                    else if($_REQUEST['request']=='reception_order')
                    {

                   include 'views/reception_order.php' ;
                 }

                  else if($_REQUEST['request']=='list_all_reception_order')
                    {

                   include 'views/list_reception_order.php' ;
                 }

                    // APROPOS BON DE COMMANDE

                       else if($_REQUEST['request']=='customer_order')
                       {

                      include 'views/customer_order.php' ;
                    }

                     else if($_REQUEST['request']=='list_all_customer_order')
                       {

                      include 'views/list_customer_order.php' ;
                    }


                      else if($_REQUEST['request']=='orderall')
                       {

                      include 'views/list_all_customer_order.php' ;
                    }

                    // Apropos BON DE SORTIE

                    else if($_REQUEST['request']=='sortie_order')
                    {

                   include 'views/sortie_order.php' ;
                 }

                  else if($_REQUEST['request']=='list_all_sortie_order')
                    {

                   include 'views/list_sortie_order.php' ;
                 }

                 // Apropos BON DE REQUISITION

                 else if($_REQUEST['request']=='requisition_order')
                 {

                include 'views/requisition_order.php' ;
              }

               else if($_REQUEST['request']=='list_all_requisition_order')
                 {

                include 'views/list_requisition_order.php' ;
              }

              // Apropos WAY BILL

              else if($_REQUEST['request']=='way_bill_order')
              {

             include 'views/way_bill_order.php' ;
           }

            else if($_REQUEST['request']=='list_all_way_bill_order')
              {

             include 'views/list_way_bill_order.php' ;
           }


                  }
        ?>



  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  
  <?php  include 'footer.php'  ?> 
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


            <!-- Datatables -->
        


<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
//Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    //Date range picker
    $('#reserve').daterangepicker();
    //Date range picker with time picker
    $('#reservetime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //Date picker
    $('#datepick').datepicker({
      autoclose: true
    });

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });

</script>


 <style>
            .rTable {
                    display: table;
                    width: 100%;
            }
            .rTableRow {
                    display: table-row;
            }
            .rTableHeading {
                    display: table-header-group;
                    background-color: #ddd;
            }
            .rTableCell, .rTableHead {
                    display: table-cell;
                    padding: 3px 10px;
                    border: 1px solid #aaa;
            }
            .rTableHeading {
                    display: table-header-group;
                    background-color: #ddd;
                    font-weight: bold;
            }
            .rTableFoot {
                    display: table-footer-group;
                    font-weight: bold;
                    background-color: #ddd;
            }
            .rTableBody {
                    display: table-row-group;
            }
        </style>
        

</body>
</html>
