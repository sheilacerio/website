<h2><?php echo $title; ?></h2>  

<?php echo validation_errors(); ?>

<?php echo form_open('bid/create'); ?>

    <label for="itemname">Item:</label>
    <?php echo $itemname; ?><br/></br> 
      
    <label for="clientname">Client:</label>
    <?php echo $clientname; ?><br/></br>

    <label for="amount">Amount:</label>
    <input type="input" name="amount"/></br></br>         
    
    </br>
    <input type="submit" name="submit" value="Create Bid" />

</form> 

<a href="<?php echo site_url('bid'); ?>">Cancel</a>  