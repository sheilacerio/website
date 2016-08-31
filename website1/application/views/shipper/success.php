<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully created your company profile.
</div>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <img src="/uploads/<?php echo $shipper['photo']?>" alt="...">
      <div class="caption">
       
        <table class="table table-bordered">

          <tbody>
        
          </tbody>
          </table>
           <div class="row">
          <div class="col-md-4">
            <strong>Company Name:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $shipper['companyname']?>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4">
            <strong>Email:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $shipper['email']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Phone:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $shipper['phone']?>
          </div>
        </div>

      <div class="row">
          <div class="col-md-4">
            <strong>Profile:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $shipper['profile']?>
          </div>
        </div>
     

       </div>
    </div>
  </div>
</div>

        
