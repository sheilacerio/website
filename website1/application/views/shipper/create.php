<div class="col-lg-8 col-lg-offset-2 well">
   <div id="container">

  <div class="page-header">
    <h1>Company Profile </h1>
  </div>

  <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>

  <?php echo form_open_multipart('shipper/create'); ?>

  <div class="form-horizontal">
    <div class="form-group">
     
    <div class="form-group">
      <label  class="col-md-2 control-label">Company Name:</label>
      <div class="col-sm-8">
        <input type="text" name="companyname" class="form-control">
      </div>
    </div>

    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Email:</label>
      <div class="col-sm-8">
        <input type="text" name="email" class="form-control" placeholder="email">
        </div>
    </div>
     
    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Contact No:</label>
      <div class="col-sm-8">
        <input type="text" name="phone" class="form-control" placeholder="Phone/Cel No.">
      </div>
    </div>
      <br />

    <div class="form-group">
      <label  class="col-md-2 control-label">Company Profile:</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="profile"></textarea>
      </div>
    </div>
      <br />

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
        <a href="<?php echo site_url('Shipper'); ?>"  class="btn btn-warning btn-block">Cancel</a>
      </div>
   
      <div class="col-md-offset-1 col-sm-7">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </div>
  </div>
  </form>


