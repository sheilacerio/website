<div class="col-lg-8 col-lg-offset-2 well">
   <div id="container">

  <div class="page-header">
   <h2><?php echo $title; ?></h2>
  </div>

  <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>

  <?php echo form_open_multipart('item/update/'); ?>


  <div class="form-horizontal">
    <div class="form-group">
      <label class="col-md-2 control-label">Category</label>
      <div class="col-sm-8">
        <select name="category" class="form-control"  />
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
        <input type="text" name="title" class="form-control" placeholder="eg. washing machine">
      </div>
    </div>

    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Width</label>
      <div class="col-sm-2">
        <input type="text" name="width" class="form-control" placeholder="cm">
      </div>
      <label  class="col-md-2 control-label">Height</label>
      <div class="col-sm-2">
        <input type="text" name="height" class="form-control" placeholder="cm">
      </div>
    </div>
    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Length</label>
      <div class="col-sm-2">
        <input type="text" name="length" class="form-control" placeholder="cm">
      </div>
      <label  class="col-md-2 control-label">Weight</label>
      <div class="col-sm-2">
        <input type="text" name="weight" class="form-control" placeholder="kg">
      </div>
    </div>
    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Quantity</label>
      <div class="col-sm-2">
        <input type="text" name="quality" class="form-control" placeholder="quantity">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Description</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="description"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Item Type</label>
      <div class="col-sm-8">
        <select name="itemtype" class="form-control">
          <option value="Crated">Crated</option>
          <option value="Plattized">Plattized</option>
          <option value="Stackable">Stackable</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Pickup Location</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="pickuplocation"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Date to be Pickup</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="shipmentpickup"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Delivery Location</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="deliverlocation"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Date to be Delivered</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="shipmentdeliver"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-md-2 control-label">Image</label>
      <div class="col-sm-8">
        <input type="file" name="userfile" class="form-control">
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
<p><a href="/item/create" class="btn btn-primary" role="button">Create New</a> 
<a href="views/item" class="btn btn-warning pull-right" role="button">Goto Listing</a></p>


