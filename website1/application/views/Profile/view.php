<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <img src="/uploads/<?php echo $profile['photo']?>" alt="...">
      <div class="caption">
        <h3>Personal Profile</h3>
        
        
        
        <table class="table table-bordered">

          <tbody>
          

          </tbody>
        </table>
         <div class="row">
          <div class="col-md-4">
            <strong>First Name:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $profile['fname']?>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4">
            <strong>Last Name:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $profile['lname']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Facebook:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $profile['fb']?>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4">
            <strong>Description:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $profile['description']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Gender:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $profile['itemtype']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Phone Number:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $profile['phone']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Email:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $profile['email']?>
          </div>
        </div>


      <li><a href="<?php echo site_url('Profile/create'); ?>">Create Profile</li>
        
        </div>
        <br />
        <br />
        <br />
        <br />

      </div>
    </div>
  </div>
</div>




