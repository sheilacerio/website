<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully created your personal profile.
</div>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <img src="/uploads/<?php echo $profile['photo']?>" alt="...">
      <div class="caption">
       
        <table class="table table-bordered">

          <tbody>
            <tr>
              <th>First Name</th>
              <td><?php echo $profile['fname']?></td>
              <th>Last Name</th>
              <td><?php echo $profile['lname']?></td>
            </tr>
            <tr>
              <th>Length</th>
              <td><?php echo $profile['height']?></td>
              <th>Weight</th>
              <td><?php echo $profile['weight']?></td>
            </tr>

          </tbody>
        </table>
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

      <p><a href="/Profile/create" class="btn btn-primary" role="button">Edit Profile</a> 
      </div>
    </div>
  </div>
</div>
