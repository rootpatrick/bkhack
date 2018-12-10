<style>
.modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
</style>


<?php

                  
$condition =array 
             (
                'order_by'=>'	idea_id',
               
               
             );
        $Data = $db->getRows('idearegistration',$condition); ?>
      


<section class="content">
<div class="row">
<div class="col-sm-12">
       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title"><strong>New Financial Aid</strong></h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
             <thead>
             <tr>
               <th>No </th>
               <th><strong>Idea CODE</strong></th>
               <th><strong>Refugee Name<strong></th>
                <th><strong>Refugee ID</strong></th>
               <th><strong>Idea Title</strong></th>
               <th><strong>Objective</strong></th>
               <!--th>Utilisateur</th>-->
               <!--th>Date</th>-->
               <th><strong>Action</strong> </th>
              </tr>
             </thead>
             <tbody>
                   <?php if(!empty($Data)): $count = 0; foreach($Data as $data): $count++; ?>
                     
                                          <tr>
                                             
                                              <td>#<?php echo $count; ?></td>
                                              <td><?php echo $data['idea_id']; ?></td>
                                             <td><?php echo $data['refugee_names']; ?></td>
                                               <td><?php echo $data['refugee_id_number']; ?></td>
                                               <td><?php echo $data['idea_title']; ?></td>
                                               <td><?php echo $data['objective']; ?></td>
                                              <td>
                                               <a href="" data-toggle="modal" data-target="#modal<?php echo $data['idea_id']; ?>"   class="glyphicon glyphicon-th"> Distribute Loans </a>
                                             </td>
                                           </tr>
                   <?php endforeach; else: ?>
                        <?php endif; ?>
                

             </tbody>
           </table>


         </div>
         <!-- /.box-body -->
       </div>
       <!-- /.box -->

      
     </div>
       <!-- /.box -->
     </div>
   </section> 

   
<?php if(!empty($Data)): $count = 0; foreach($Data as $data): $count++; ?>
    <div class="modal fade"  id="modal<?php echo $data['idea_id']; ?>">
          <div class="col-md-9" class="modal-dialog modal-dialog-center">
                <div class="modal-content">
                      <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                          <div class="modal-body">
<section class="content">

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class=" col-md-9" style="margin-left: 140px">
        <form method="post" action="class/missioncontroller.php">
           <!--LOAN DISTRIBUTION -->
          <div class="box box-info">
              <div class="box-header with-border">
                <center><h3 class="box-title"><strong>Distribute Loan</strong></h3></center>

                <div class="box-tools pull-right">
                  
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body" style="padding: 30px;">
                  
                   <div class="form-group">

                    <input name="id" hidden type="number" value="<?php echo $data['idea_id']; ?>" required="">
                    
                    <br>
                    
                     <label><strong>Interest Rate<strong></label>
                     
                    <input name="rate" type="number" class="form-control" placeholder="Enter Rate... " required="">

                    <br>
                    
                     <label><strong>Amount<strong></label>
                     
                    <input name="amount" type="number" class="form-control" placeholder="Enter Amount... " required="">

                    <br>

                    <label><strong>Bank<strong></label>
                    
                    <input name="bank" type="text" class="form-control" placeholder="Enter Bank... " required="">

                    <br>
                    
                   </div>
                <!-- /.box-body -->
            
              <div class="box-footer clearfix">
                  <a href="" class="btn btn-sm btn-primary btn-flat pull-left" >Cancel </a>
                  <button type="submit" name="reception_order" class="btn btn-primary btn-flat pull-right">submit </button>
              </div>
              <!-- /.box-footer -->
            </div>
           <!--RECENT REGISTER -->
        </form>
    </div>
</div><!-- /.row -->

<div class="row">
<div class="col-md-8 col-xs-12">
     
</div><!-- ./col -->
<div class="col-md-4 col-xs-12">
     
</div><!-- ./col -->
</div><!-- /.row -->

</section>
                                                       </div>
                                                   <div class="modal-footer">
                                                         <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                                                        
                                                       </div>
                                                     </div>
                                                     <!-- /.modal-content -->
                                                   </div>
                                                   <!-- /.modal-dialog -->
                                                 </div>             
                      <?php  


                    endforeach; else: ?>
                        <?php endif; ?>







