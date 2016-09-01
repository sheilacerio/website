<div class="col-lg-8 col-lg-offset-2 well">
   <div id="container">

  <div class="page-header">
   <h2><?php echo $title; ?></h2>
  </div>


  <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
  <form method="post" action ="<?php echo site_url('item/update');?>">

  


  <div class="form-horizontal">
    <div class="form-group">
      <label class="col-md-2 control-label">Category</label>
      <div class="col-sm-8">
        <select name="category" class="form-control" value ="<?php echo $item['category']?>">
          <option value="Household">Household</option>
          <option value="Tool">Tool</option>
          <option value="Vehicle">Vehicle</option>
           <option value="Pets">Pets</option>
           <option value="Others">Others</option>
        </select>

      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Shipment Title</label>
      <div class="col-sm-8">
        <input type="text" name="title" class="form-control" placeholder="eg. washing machine"
        value ="<?php echo $item['title']?>">
      </div>
    </div>

    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Width</label>
      <div class="col-sm-2">
        <input type="text" name="width" class="form-control" placeholder="cm" value ="<?php echo $item['width']?>"/>
      </div>
      <label  class="col-md-2 control-label">Height</label>
      <div class="col-sm-2">
        <input type="text" name="height" class="form-control" placeholder="cm" value ="<?php echo $item['height']?>">
      </div>
    </div>
    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Length</label>
      <div class="col-sm-2">
        <input type="text" name="length" class="form-control" placeholder="cm" value ="<?php echo $item['length']?>">
      </div>
      <label  class="col-md-2 control-label">Weight</label>
      <div class="col-sm-2">
        <input type="text" name="weight" class="form-control" placeholder="kg" value ="<?php echo $item['weight']?>">
      </div>
    </div>
    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Quantity</label>
      <div class="col-sm-2">
        <input type="text" name="quality" class="form-control" placeholder="quantity" value ="<?php echo $item['quality']?>">
      </div>
    </div>
     <br />

    <div class="form-group">
      <label  class="col-md-2 control-label">Description</label>
      <div class="col-sm-8">
      <input type="text" name="description" class="form-control" value ="<?php echo $item['description']?>">
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Item Type</label>
      <div class="col-sm-8">
        <select name="itemtype" class="form-control" value ="<?php echo $item['itemtype']?>">
          <option value="Crated">Crated</option>
          <option value="Plattized">Plattized</option>
          <option value="Stackable">Stackable</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Pickup Location</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="pickuplocation" value ="<?php echo $item['pickuplocation']?>">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Date to be Pickup</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="shipmentpickup" value ="<?php echo $item['shipmentpickup']?>">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Delivery Location</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="deliverlocation" value ="<?php echo $item['deliverlocation']?>">
    </div>
</div>
    <div class="form-group">
      <label  class="col-md-2 control-label">Date to be Delivered</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="shipmentdeliver" value ="<?php echo $item['shipmentdeliver']?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-md-2 control-label">Image</label>
      <div class="col-sm-8">
        <input type="file" name="userfile" class="form-control" value ="<?php echo $item['photo']?>">
      </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
      <div class="col-sm-4">
        <a href="<?php echo site_url('item'); ?>"  class="btn btn-warning btn-block">Cancel</a>
      </div>
      <div class="col-md-offset-1 col-sm-7">
        <button type="submit" class="btn btn-primary btn-block">Update</button>
      </div>
    </div>
  </div>
  </form>


