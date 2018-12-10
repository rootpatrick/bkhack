
<?php
      if ($_SESSION['user_cat']=="5")
      {

      ?>
       <section class="sidebar">
     
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <li style="font-family: Raleway;"> <a href="<?php echo $db->url ?>?request=index"> <i class="fa fa-dashboard"></i><strong>
       Tableau de Bord</strong></a></li>

          <li class="treeview">
          <a href="#">
            <!--i class="fa fa-file-video-o">--></i> <span><strong>ADMINISTRATION</strong> </span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

       <li class="treeview">
          <a href="#">
            <i class="fa
 fa-group"></i> <span style="font-family: Raleway;"><strong>Personnel</strong></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active" style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=ajouter"><strong> Ajout du Personnel</strong></a></li>
            <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=listagent"><strong> Liste du Personnel</strong></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-hand-o-right"></i> <span style="font-family: Raleway;"><strong> Sortie</strong></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active" style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=sortie"><strong> Nouvelle Sortie</strong> </a></li>
            <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=sortielist"><strong> Liste des Sorties</strong></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa
 fa-binoculars"></i> <span style="font-family: Raleway;"><strong> Mission</strong> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active" style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=mission"><strong> Nouvelle Mission</strong></a></li>
            <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=missionlist"><strong> Liste des Missions</strong></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa
 fa-bell-slash"></i> <span style="font-family: Raleway;"><strong> Conges</strong> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active" style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=conge"><strong> Nouveau Conge</strong></a></li>
            <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=congelist"><strong> Liste des Conges</strong></a></li>
             <!--li><a href="gal-list"> Purchase Order</a></li-->
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span style="font-family: Raleway;"><strong> Contrat de Travail</strong></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active" style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=addsource"><strong> Nouveau Contrat</strong></a></li>
            <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=sourcelist"><strong> Liste des Contratst</strong></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa
 fa-gavel"></i> <span style="font-family: Raleway;"> <strong>
Présence</strong></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active" style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=addsource"><strong> Liste de Presence</strong></a></li>
          </ul>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i><span style="font-family: Raleway;"><strong> PARAMETRES</strong></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active" style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=adduser"> Ajouter Un Utilisateur </a></li>
             <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=userlist">  Type De Conge</a></li>
             <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=addproject">  Projet</a></li>
             <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=charges">  Charges</a></li>
             <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=avantages">  Avantages</a></li>
             <li style="font-family: Raleway;"><a href="<?php echo $db->url ?>?request=categories">  Fonction</a></li>
          </ul>
        </li>
<!--  -->
         

              <li style="font-family: Raleway;"> <a href="class/usercontroller.php?action_type=logout"> <i class="fa fa-sign-out"></i>Logout </a></li>
       </ul>
    </section>
            
     <?php 

      } 

 
     else  if ($_SESSION['user_cat']=="6")
      {

      ?>
             <section class="sidebar">
     
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <li style="font-family: Raleway;"> <a href="<?php echo $db->url ?>?request=index"> <i class="fa fa-dashboard"></i><strong>
       DASHBOARD</strong></a></li>

        <!--li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span><strong>Bon de Commande</strong> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=customer_order"><strong>Nouvelle Commande</strong></a></li>
            <li><a href="<?php echo $db->url ?>?request=list_all_customer_order"><strong> Liste Commande</strong></a></li>
            
          </ul>
        </li>-->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span><strong>Loan Distribution</strong> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=reception_order"><strong>New Financial Loan</strong></a></li>
            <!--li><a href="<?php echo $db->url ?>?request=list_all_reception_order"><strong> List Of Financial Loan</strong></a></li>-->
            
          </ul>
        </li>

 <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-menu-down"></i> <span><strong>Monitoring Loans</strong> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=requisition_order"><strong>Loans Monitoring</strong></a></li>
            <!--<li><a href="<?php echo $db->url ?>?request=list_all_requisition_order"><strong> Liste Requisition</strong></a></li>-->
            
          </ul>
        </li>

        <!--li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-menu-up"></i> <span><strong>Bon de Sortie</strong> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=sortie_order"><strong>Nouvelle Sortie</strong></a></li>
            <li><a href="<?php echo $db->url ?>?request=list_all_sortie_order"><strong> Liste Sortie</strong></a></li>
            
          </ul>
        </li>-->

       

       <!--  <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-text-size"></i> <span><strong>Way Bill</strong> </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=way_bill_order"><strong>Lettre de transport</strong></a></li>
            <li><a href="<?php echo $db->url ?>?request=list_all_way_bill_order"><strong> Liste Way Bill</strong></a></li>
            
          </ul>
        </li> -->
         

              <li style="font-family: Raleway;"> <a href="class/usercontroller.php?action_type=logout"> <i class="fa fa-sign-out"></i>Logout </a></li>
       </ul>
    </section>

     <?php 

      } 

     else  if ($_SESSION['user_cat']=="6")
      {

      ?>
            <section class="sidebar">
     
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
           <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=receivelist">List of Receiving </a></li>
            <li><a href="<?php echo $db->url ?>?request=saleslist"> List of Selling</a></li>
            <li><a href="<?php echo $db->url ?>?request=listproducts"> Product list</a></li>
          </ul>
        </li>

        <li> <a href="class/usercontroller.php?action_type=logout"> <i class="fa fa-user"></i>Logout </a></li>
       </ul>
    </section>

     <?php 

      } 

      else  if ($_SESSION['user_cat']=="90")
      {

      ?>
            <section class="sidebar">
     
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
           <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Sales </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo $db->url ?>?request=saleslist"> List of Selling</a></li>
            <li><a href="<?php echo $db->url ?>?request=orderall"> New  Order List </a></li>
          </ul>
        </li>

        <li> <a href="class/usercontroller.php?action_type=logout"> <i class="fa fa-user"></i>Logout </a></li>
       </ul>
    </section>

     <?php 

      } 

 
     else  if ($_SESSION['user_cat']=="9")
      {

      ?>
            <section class="sidebar">
     
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <li> <a href="<?php echo $db->url ?>?request=index"> <i class="fa fa-dashboard"></i>Dashboard</a></li>


       <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo $db->url ?>?request=listproducts"> products list</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=receivelist">List of Receiving </a></li>
            <li><a href="<?php echo $db->url ?>?request=saleslist"> List of Selling</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-video-o"></i> <span>Customer </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo $db->url ?>?request=customerlist"> List of Customer</a></li>
           
            <li><a href="<?php echo $db->url ?>?request=orderall"> New  Order List </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-image-o"></i> <span>Supplier </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo $db->url ?>?request=listsupplier"> List of Supplier</a></li>
          </ul>
            
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Budget Owner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="<?php echo $db->url ?>?request=sourcelist"> budget owners list</a></li>
          </ul>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> Users<span></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
             <li><a href="<?php echo $db->url ?>?request=userlist">  List of Users</a></li>
          </ul>
        </li>
         

               <li> <a href="class/usercontroller.php?action_type=logout"> <i class="fa fa-user"></i>Logout </a></li>
       </ul>
    </section>

     <?php 

      } 

      else {

?>



<section class="sidebar">
     
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <li> <a href="<?php echo $db->url ?>?request=index"> <i class="fa fa-dashboard"></i>Dashboard</a></li>


       <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=addproduct"> New product</a></li>
            <li><a href="<?php echo $db->url ?>?request=listproducts"> products list</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=receivelist">List of Receiving </a></li>
            <li><a href="<?php echo $db->url ?>?request=saleslist"> List of Selling</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-video-o"></i> <span>Customer </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=addcustomer">New Customer</a></li>
            <li><a href="<?php echo $db->url ?>?request=customerlist"> List of Customer</a></li>
            <li><a href="<?php echo $db->url ?>?request=ordercustomer"> New  Order</a></li>
            <li><a href="<?php echo $db->url ?>?request=orderlist"> New  Order List </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-image-o"></i> <span>Supplier </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=addsupplier"> New Supplier</a></li>
            <li><a href="<?php echo $db->url ?>?request=listsupplier"> List of Supplier</a></li>
             <li><a href="gal-list"> Purchase Order</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-archive-o"></i> <span>Budget Owner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=addsource"> New budget owner</a></li>
            <li><a href="<?php echo $db->url ?>?request=sourcelist"> budget owners list</a></li>
          </ul>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> Users<span></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo $db->url ?>?request=adduser"> New User </a></li>
             <li><a href="<?php echo $db->url ?>?request=userlist">  List of Users</a></li>
          </ul>
        </li>
         

              <li> <a href="class/usercontroller.php?action_type=logout"> <i class="fa fa-user"></i>Logout </a></li>
       </ul>
    </section><?php
  }?>