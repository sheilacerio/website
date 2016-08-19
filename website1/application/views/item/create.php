<div class="col-lg-8 col-lg-offset-2 well">
   <div id="container">

  <div class="page-header">
    <h1>Shipment Information <small><?php echo $title; ?></small></h1>
  </div>

  <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>

  <?php echo form_open_multipart('item/create'); ?>

  <div class="form-horizontal">
    <div class="form-group">
      <label class="col-md-2 control-label">Category</label>
      <div class="col-sm-10">
        <select name="category" class="form-control">
          <option value="0">Household</option>
          <option value="1">Tool</option>
          <option value="2">Vehicle</option>
           <option value="3">Pets</option>
           <option value="4">Others</option>
        </select>

      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Shipment Title</label>
      <div class="col-sm-10">
        <input type="text" name="title" class="form-control" placeholder="Shipment Title">
      </div>
    </div>

    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Width</label>
      <div class="col-sm-4">
        <input type="text" name="width" class="form-control" placeholder="width">
      </div>
      <label  class="col-md-2 control-label">Height</label>
      <div class="col-sm-4">
        <input type="text" name="height" class="form-control" placeholder="height">
      </div>

    </div>

    <br />

    <div class="form-group">
      <label  class="col-md-2 control-label">Length</label>
      <div class="col-sm-4">
        <input type="text" name="length" class="form-control" placeholder="length">
      </div>
      <label  class="col-md-2 control-label">Weight</label>
      <div class="col-sm-4">
        <input type="text" name="weight" class="form-control" placeholder="weight">
      </div>
    </div>
    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Quality</label>
      <div class="col-sm-10">
        <input type="text" name="quality" class="form-control" placeholder="quality">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="description"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Item Type</label>
      <div class="col-sm-10">
        <select name="itemtype" class="form-control">
          <option value="0">Crated</option>
          <option value="1">Plattized</option>
          <option value="2">Stackable</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Pickup Location</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="pickuplocation"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Shipment to be Pickup</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="shipmentpickup"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Delivery Location</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="deliverlocation"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Shipment to be Delivered</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="shipmentdeliver"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-md-2 control-label">Image</label>
      <div class="col-sm-10">
        <input type="file" name="userfile" class="form-control">
      </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
      <div class="col-sm-4">
        <a href="<?php echo site_url('main/item'); ?>"  class="btn btn-warning btn-block">Cancel</a>
      </div>
      <div class="col-md-offset-1 col-sm-7">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </div>
  </div>



  </form>


