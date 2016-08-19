<div class="col-lg-4 col-lg-offset-3">
<div id="container">
	<h2><?php echo $title; ?></h2>
	<a href="<?php echo site_url("/item/view/")."/".$item['id']; ?>">
   
		<label><b>ID:</b></label>   
		<?php echo $item['id']; ?><br/>     
		<label><b>Name:</b></label>   
		<?php echo $item['name']; ?><br/>   
		<label><b>Categories:</b></label>
		<?php echo $item['categoriesid']; ?><br/> 
		<label><b>Shipment Title:</b></label>
		<?php echo $item['shipment_title']; ?><br/>       		
		<label><b>Width:</b></label>    
		<?php echo $item['width']; ?><br/>     
		<label><b>Height:</b></label>
		<?php echo $item['height']; ?><br/>       
		<label><b>Length:</b></label>
		<?php echo $item['length']; ?><br/>       
		<label><b>Weight:</b></label>
		<?php echo $item['weight']; ?><br/>  
		<label><b>Quality:</b></label>    
		<?php echo $item['quality']; ?><br/>     
		<label><b>Description:</b></label>
		<?php echo $item['description']; ?><br/>       
		<label><b>Select:</b></label>
		<?php echo $item['selectid']; ?><br/>       
		<label><b>Pick up to be shipped:</b></label>
		<?php echo $item['pickup']; ?><br/> 
		<label><b>Date to be shipped:</b></label>    
		<?php echo $item['datepicker']; ?><br/>     
		<label><b>Shipment to be delivered:</b></label>
		<?php echo $item['delivery']; ?><br/>       
		<label><b>Date to be delivered:</b></label>
		<?php echo $item['datepicker1']; ?><br/>       
		<label><b>Active:</b></label>
		<?php echo $item['active']; ?><br/>                   
		<label><b>IMAGE:</b></label>
</br>
		<a href="<?php echo site_url("/item/update/")."/".$item['id']; ?>">Update</a>  </br>
		<a href="<?php echo site_url("/item/delete")."/".$item['id']; ?>">Delete</a>  
      
</div>      
	<a href="<?php echo site_url('/item'); ?>">Back to list</a>    
