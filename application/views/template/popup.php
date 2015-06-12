<!-- Add more button code startas -->
   
       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-city">
         <i class="fa fa-plus">Add more</i>
       </button>
  
       <!-- Modal -->
       <div class="modal fade" id="add-city" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title" id="myModalLabel">Enter City name and Country.</h4>
             </div>
             <div class="modal-body">
               <!-- Form -->
                <form class="form-horizontal" action="<?php echo base_url();?>index.php/city/add_city" method="post">
            <div class="form-group">
              <label for="city" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="city" placeholder="City">
              </div>
            </div>
            <div class="form-group">
              <label for="country" class="col-sm-2 control-label">Father Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="country" placeholder="Country">
              </div>
            </div>
            
             </div>
             <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-success"><?php echo $title; ?></button>
               <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"> Clear</i></button>
               <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"> Close</i></button>
               
               </form>
               <!-- EnD Form -->
             </div>
           </div>
         </div>
       </div>
       <!-- End Modal -->
      
      <!-- Add Button Code Ends -->