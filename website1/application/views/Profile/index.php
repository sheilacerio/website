<div class="row">
  <div class="col-md-12 ">
    <a href="<?php echo site_url('Profile/create'); ?>" class="btn btn-info btn-sm pull-right" role="button">Create Profile</a>
          
 
  </div>
</div>
<br />
<br />
<div class="row">
  <div class="col-sm-12 col-md-12">



    <table class="table table-bordered">
      <thead>
        <tr>

          <th>Title</th>
          <th>Quality</th>
          <th>Description</th>
          <th>View</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($profiles  as $profile): ?>
          <tr>
            <th scope="row"><?php echo $profile['fname']?></th>
            <td><?php echo $profile['lname']?></td>
            <td><?php echo $profile['description']?></td>
            <td>
          <p><a href="/Profile/success" class="btn btn-info btn-sm pull-right role="button">view</a> 
            </td>
          </tr>
          <?php endforeach; ?>

        </tbody>
      </table>


  </div>
</div>

<br />
<br />
<br />
<br />
<br />