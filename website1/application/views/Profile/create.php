<div class="col-lg-8 col-lg-offset-2 well">
   <div id="container">

  <div class="page-header">
    <h1>Personal Profile</h1>
  </div>

  <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>

  <?php echo form_open_multipart('Profile/create'); ?>

  <div class="form-horizontal">
  
    <div class="form-group">
      <label  class="col-md-2 control-label">First Name</label>
      <div class="col-sm-4">
        <input type="text" name="fname" class="form-control" placeholder="First name">
      </div>
      <label  class="col-md-2 control-label">Last Name</label>
      <div class="col-sm-4">
        <input type="text" name="lname" class="form-control" placeholder="Last name">
      </div>
    </div>
   
   
    <br />
    <div class="form-group">
      <label  class="col-md-2 control-label">Facebook</label>
      <div class="col-sm-4">
        <input type="text" name="fb" class="form-control" placeholder="FB">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Address</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="description"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">Gender</label>
      <div class="col-sm-4">

        <select name="itemtype" class="form-control">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>

<div class="form-group">
      <label  class="col-md-2 control-label">Phone Number</label>
      <div class="col-sm-4">
        <input type="text" name="phone" class="form-control" placeholder="phone #">
      </div>
    </div>

    <div class="form-group">
      <label  class="col-md-2 control-label">Email</label>
      <div class="col-sm-4">
        <input type="text" name="email" class="form-control" placeholder="you@iship.com">
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
        <a href="<?php echo site_url('index'); ?>"  class="btn btn-warning btn-block">Cancel</a>
      </div>
    <div class="col-md-offset-1 col-sm-7">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </div>
  </div>
  </form>


</div>

 

