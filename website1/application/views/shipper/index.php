<div class="row">
  <div class="col-md-12 ">
    <a href="<?php echo site_url('shipper/create'); ?>" class="btn btn-info btn-sm pull-right" role="button">Create shipper</a>
          
 
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
          <?php foreach($shippers  as $shipper): ?>
          <tr>
            <th scope="row"><?php echo $shipper['companyname']?></th>
            <td><?php echo $shipper['ename']?></td>
            <td><?php echo $shipper['phone']?></td>
            <td>
          <p><a href="/shipper/success" class="btn btn-info btn-sm pull-right role="button">view</a> 
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