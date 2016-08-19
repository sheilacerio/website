<div class="col-lg-4 col-lg-offset-4">
    <h2>Sign Up</h2>
    <h5>Please enter the required information below.</h5>


<?php
    $fattr = array('class' => 'form-signin');
    echo form_open('/main/register', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
      <?php echo form_error('firstname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
      <?php echo form_error('lastname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email');?>
   </div>
   <div class="form-group">
    <div class="radio">
      <label>
        <input type="radio" name="role" value="0" checked>
        User
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="role" value="1">
        Carrier
      </label>
    </div>
   </div>
    <?php echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
</div>
