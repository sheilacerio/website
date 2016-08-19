<div class="col-lg-4 col-lg-offset-4">
   <div id="container">
   <h2>Shipment Information</h2>
  <h2><?php echo $title; ?></h2>

  <?php echo validation_errors(); ?>

  <?php echo form_open('item/update'); ?>
  
  
  
       <label for="width">Categories</label>
   	<select name="categoriesid"> 
   		<option value="0">Household</option>
   		<option value="1">Tool</option>
   		<option value="2">Vehicle</option>
         <option value="3">Pets</option>
         <option value="4">Others</option>
   	</select>
  

      <label for="shipment_title">Shipment Title</label>
      <input type="input" name="shipment_title" /><br/></br> 

     
      <label for="width">Width</label>
      <input type="input" name="width" placeholder="cm"/></br></br> 

      <label for="height">Height</label>
      <input type="input" name="height"  placeholder="cm"/></br></br>  

      <label for="length">Length</label>
      <input type="input" name="length"  placeholder="cm"/></br></br>  

      <label for="weight">Weight</label>
      <input type="input" name="weight"  placeholder="kg"/></br></br> 
      
      <label for="quality">Quality</label>
      <input type="input" name="quality" /></br></br> 
      
      <label for="description">Description</label>
      <textarea name="description"></textarea><br/></br> 
      </br>
     
       <label for="width">Select:</label>
   	<select name="selectid"> 
   		<option value="0">Crated</option>
   		<option value="1">Plattized</option>
   		<option value="2">Stackable</option>
         
   	</select>
     
      
      <label for="pickup">Pick up Location</label>
      <textarea name="pickup"></textarea><br/></br></br> 
      
      <label for="datepickup">Shipment to be Pickup</label>
      <textarea name="datepickup"></textarea><br/></br></br> 
      
     <label for="delivery">Delivery Location</label>
     <textarea name="delivery"></textarea><br/></br></br> 
     
     <label for="datedelivery">Shipment to be delivered</label>
     <textarea name="datedelivery"></textarea><br/></br></br> 
    
      <label for="image">Image</label></br></br> 
  	<input name="image" accept="image/jpeg" type="file"></br>         
    
      </br>
      <input type="submit" name="submit" value="Update Item" />

  </form> 

  <a href="<?php echo site_url('item'); ?>">Cancel</a>
  