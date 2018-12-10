
<?php

                  
$condition =array 
             (
                'order_by'=>'business_idea_id', 
               
             );
        $Data = $db->getRows('distribution',$condition); ?>
      


<section class="content">
<div class="row">
<div class="col-sm-12">
       <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title"><strong>Monitoring Loans</strong></h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
             <thead>
             <tr>
             <th>No </th>
             <th><strong>Refugee Name</strong></th>
             <th><strong>Idea Title</strong></th>
               <th><strong>Amount</strong></th>
                <th><strong>Total Interest</strong></th>
               <th><strong>Incomes</strong></th>
               <th>Action </th>
              </tr>
             </thead>
             <tbody>
                   <?php if(!empty($Data)): $count = 0; foreach($Data as $data): $count++; ?>
                     
                                          <tr>
                                          <td>#<?php echo $count; ?></td>
                                          <?php
// Statement to get the supplier order number of reference  
$condition =array 
   (                                
    'where'=>array('idea_id' => $data['business_idea_id'], ),               
   );
$supplies = $db->getRows('idearegistration',$condition);
?><?php if(!empty($supplies)): foreach($supplies as $supply):  ?>
                                            <td><?php echo $supply['refugee_names']; ?> </td>
 
               <td><?php echo $supply['idea_title']; ?></td>
               <?php endforeach; else: ?>     
<?php endif; ?> 
                                              
                                             <td><?php echo $data['amount']; ?></td>
                                             <td><?php echo $data['interest_rate']; ?></td>
                                               <td>90</td>
                                               
                                              <td>
                                               <a href="" data-toggle="modal" data-target="#modal<?php echo $data['business_idea_id']; ?>"   class="fa fa-eye"> View More </a>
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
                 <div class="modal fade" id="modal<?php echo $data['business_idea_id']; ?>">
                                 <div class="modal-dialog">
                                      <div class="modal-content">
                                            <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                           <span aria-hidden="true">&times;</span></button>
                                                         <h4 class="modal-title"><?php echo "Amount Invested :". $data['amount']; ?>, <?php echo "Total Incomes :  100"; ?>, <?php  echo " Total interest : 90 " ?></h4>
                                                       </div>
                                         
                                      <div class="modal-body">
                                                            <table id="example2" class="table table-bordered table-hover">
             <thead>
             <tr>
               <th>No </th>
              <th>Date </th>
              <th>Amount </th>
               <th>Bank</th>
              
              </tr>
             </thead>
             <tbody>

                                        <tr>
                                           <td>#1</td>
                                           <td>2018-01-78</td>
                                           <td>10</td>
                                            <td>BK KIGALI</td>
                                          <td></td> 
                                                
                                           
                                         </tr>
                                         <tr>
                                           <td>#2</td>
                                           <td>2018-01-78</td>
                                           <td>10</td>
                                            <td>BK KIGALI</td>
                                          <td></td> 
                                                
                                           
                                         </tr>
                                         <tr>
                                           <td>#3</td>
                                           <td>2018-01-78</td>
                                           <td>10</td>
                                            <td>BK KIGALI</td>
                                          <td></td> 
                                                
                                           
                                         </tr>
                                         <tr>
                                           <td>#4</td>
                                           <td>2018-01-78</td>
                                           <td>10</td>
                                            <td>BK KIGALI</td>
                                          <td></td> 
                                                
                                           
                                         </tr>


                                       




             </tbody>
           </table> 
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







