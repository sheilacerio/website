<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully created your item.
</div>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <img src="/uploads/<?php echo $item['photo']?>" alt="...">
      <div class="caption">
        <h3><?php echo $item['title']?></h3>
        <p><?php echo $item['category']?></p>


        <table class="table table-bordered">

          <tbody>
            <tr>
              <th>Width</th>
              <td><?php echo $item['width']?></td>
              <th>Height</th>
              <td><?php echo $item['height']?></td>
            </tr>
            <tr>
              <th>Length</th>
              <td><?php echo $item['length']?></td>
              <th>Weight</th>
              <td><?php echo $item['weight']?></td>
            </tr>

          </tbody>
        </table>
        <div class="row">
          <div class="col-md-4">
            <strong>Quality:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['quality']?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <strong>Description:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['description']?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <strong>itemtype:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['itemtype']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Pickup Location:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['pickuplocation']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Shipment Pickup:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['shipmentpickup']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Deliver Location:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['deliverlocation']?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <strong>Shipment Deliver:</strong>
          </div>
          <div class="col-md-8">
            <?php echo $item['shipmentdeliver']?>
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />

        <p><a href="/item/create" class="btn btn-primary" role="button">Create New</a> <a href="/item/list" class="btn btn-warning pull-right" role="button">Goto Listing</a></p>
      </div>
    </div>
  </div>
</div>

