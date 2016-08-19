<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('client/create'); ?>

    <label for="name">Name</label>
    <input type="input" name="name" /><br/></br> 
  
    <label for="width">Role</label>
    <select name="roleid"> 
        <option value="0">Not Set</option>
        <option value="1">Customer</option>
        <option value="2">Courier</option>
    </select>
    </br>
    <label for="checkbox">Active</label>
    <input type="checkbox" name="active" value="active"/></br></br>         
    
    </br>
    <input type="submit" name="submit" value="Create User" />

</form> 

<a href="<?php echo site_url('client/index'); ?>">Cancel</a>
